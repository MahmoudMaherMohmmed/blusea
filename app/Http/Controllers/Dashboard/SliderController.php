<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\Dashboard\StoreSliderRequest;
use App\Http\Requests\Dashboard\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sliders = Slider::latest()->get();

        return view('dashboard.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.sliders.form', ['slider' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Dashboard\StoreSliderRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSliderRequest $request)
    {
        $slider = Slider::create($request->validated());
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $slider->addMediaFromRequest('image')
                ->toMediaCollection(Slider::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.sliders.show', $slider)->with('success', trans('sliders.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\View\View
     */
    public function show(Slider $slider)
    {
        return view('dashboard.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\View\View
     */
    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.form', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Dashboard\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $slider->update($request->validated());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $slider->clearMediaCollection(Slider::MEDIA_COLLECTION_NAME);
            $slider->addMediaFromRequest('image')
                ->toMediaCollection(Slider::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.sliders.show', $slider)->with('success', trans('sliders.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->back()->with('success', trans('sliders.messages.deleted'));
    }
}
