<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\Dashboard\StoreBlogRequest;
use App\Http\Requests\Dashboard\UpdateBlogRequest;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.blogs.form', ['blog' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreBlogRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $blog->addMediaFromRequest('image')
                ->toMediaCollection(Blog::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.blogs.show', $blog)->with('success', trans('blogs.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\View\View
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\View\View
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.form', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateBlogRequest $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $blog->clearMediaCollection(Blog::MEDIA_COLLECTION_NAME);
            $blog->addMediaFromRequest('image')
                ->toMediaCollection(Blog::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.blogs.show', $blog)->with('success', trans('blogs.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', trans('blogs.messages.deleted'));
    }
}
