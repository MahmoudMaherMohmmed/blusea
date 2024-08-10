<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Http\Requests\Dashboard\StorePartnerRequest;
use App\Http\Requests\Dashboard\UpdatePartnerRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $partners = Partner::latest()->get();

        return view('dashboard.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.partners.form', ['partner' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StorePartnerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePartnerRequest $request)
    {
        $partner = Partner::create($request->validated());
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $partner->addMediaFromRequest('image')
                ->toMediaCollection(Partner::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.partners.show', $partner)->with('success', trans('partners.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\View\View
     */
    public function show(Partner $partner)
    {
        return view('dashboard.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\View\View
     */
    public function edit(Partner $partner)
    {
        return view('dashboard.partners.form', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdatePartnerRequest $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $partner->update($request->validated());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $partner->clearMediaCollection(Partner::MEDIA_COLLECTION_NAME);
            $partner->addMediaFromRequest('image')
                ->toMediaCollection(Partner::MEDIA_COLLECTION_NAME);
        }

        return redirect()->route('admin.partners.show', $partner)->with('success', trans('partners.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', trans('partners.messages.deleted'));
    }
}
