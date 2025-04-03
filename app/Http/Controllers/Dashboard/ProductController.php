<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreProductRequest;
use App\Http\Requests\Dashboard\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.products.form', ['product' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        $product->categories()->attach($request->category_id);
        $product->brands()->attach($request->brand_id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $product->addMediaFromRequest('image')
                ->toMediaCollection(Product::MAIN_MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.products.show', $product)->with('success', trans('products.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.form', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateProductRequest $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        $product->categories()->sync($request->category_id);
        $product->brands()->sync($request->brand_id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $product->clearMediaCollection(Product::MAIN_MEDIA_COLLECTION_NAME);
            $product->addMediaFromRequest('image')
                ->toMediaCollection(Product::MAIN_MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.products.show', $product)->with('success', trans('products.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', trans('products.messages.deleted'));
    }
}
