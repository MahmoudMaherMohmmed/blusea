<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreBrandRequest;
use App\Http\Requests\Dashboard\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $brands = Brand::latest()->get();

        return view('dashboard.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.brands.form', ['brand' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreBrandRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = Brand::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $brand->addMediaFromRequest('image')
                ->toMediaCollection(Brand::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.brands.show', $brand)->with('success', trans('brands.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\View\View
     */
    public function show(Brand $brand)
    {
        return view('dashboard.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\View\View
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.form', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateBrandRequest $request
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $brand->clearMediaCollection(Brand::MEDIA_COLLECTION_NAME);
            $brand->addMediaFromRequest('image')
                ->toMediaCollection(Brand::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.brands.show', $brand)->with('success', trans('brands.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', trans('brands.messages.deleted'));
    }
}
