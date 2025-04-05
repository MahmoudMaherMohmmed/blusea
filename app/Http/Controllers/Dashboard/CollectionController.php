<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCollectionRequest;
use App\Http\Requests\Dashboard\UpdateCollectionRequest;
use App\Models\Collection;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $collections = Collection::latest()->get();

        return view('dashboard.collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create()
    {
        if (Collection::all()->count() >= 1) {
            return back();
        }
        return view('dashboard.collections.form', ['collection' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreCollectionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCollectionRequest $request)
    {
        $collection = Collection::create(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        $collection->products()->attach($request->products_ids);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $collection->addMediaFromRequest('image')
                ->toMediaCollection(Collection::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.collections.show', $collection)->with('success', trans('collections.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Collection $collection
     * @return \Illuminate\View\View
     */
    public function show(Collection $collection)
    {
        return view('dashboard.collections.show', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Collection $collection
     * @return \Illuminate\View\View
     */
    public function edit(Collection $collection)
    {
        return view('dashboard.collections.form', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateCollectionRequest $request
     * @param \App\Models\Collection $collection
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $collection->update(array_merge($request->validated(), ['slug' => Str::slug($request->title['en'])]));
        $collection->products()->sync($request->products_ids);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $collection->clearMediaCollection(Collection::MEDIA_COLLECTION_NAME);
            $collection->addMediaFromRequest('image')
                ->toMediaCollection(Collection::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.collections.show', $collection)->with('success', trans('collections.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Collection $collection
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        return redirect()->route('admin.collections.index')->with('success', trans('collections.messages.deleted'));
    }
}
