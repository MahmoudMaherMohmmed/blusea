<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\CategoryTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCategoryRequest;
use App\Http\Requests\Dashboard\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.categories.form', ['category' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($request->type == CategoryTypeEnum::MAIN_CATEGORY) {
            $category = Category::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en']), 'parent_id' => null]));
        } else {
            $category = Category::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en']), 'parent_id' => $request->parent_id]));
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $category->addMediaFromRequest('image')
                ->toMediaCollection(Category::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.categories.show', $category)->with('success', trans('categories.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\View\View
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateCategoryRequest $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->type == CategoryTypeEnum::MAIN_CATEGORY) {
            $category->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en']), 'parent_id' => null]));
        } else {
            $category->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en']), 'parent_id' => $request->parent_id]));
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $category->clearMediaCollection(Category::MEDIA_COLLECTION_NAME);
            $category->addMediaFromRequest('image')
                ->toMediaCollection(Category::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.categories.show', $category)->with('success', trans('categories.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', trans('categories.messages.deleted'));
    }
}
