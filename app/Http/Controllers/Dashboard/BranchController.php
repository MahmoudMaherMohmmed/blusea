<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreBranchRequest;
use App\Http\Requests\Dashboard\UpdateBranchRequest;
use App\Models\Branch;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $branches = Branch::latest()->get();

        return view('dashboard.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create()
    {
        if (Branch::all()->count() >= 1) {
            return back();
        }

        return view('dashboard.branches.form', ['branch' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\StoreBranchRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBranchRequest $request)
    {
        $branch = Branch::create($request->validated());

        return redirect()->route('admin.branches.show', $branch)->with('success', trans('branches.messages.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\View\View
     */
    public function show(Branch $branch)
    {
        return view('dashboard.branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\View\View
     */
    public function edit(Branch $branch)
    {
        return view('dashboard.branches.form', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UpdateBranchRequest $request
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        $branch->update($request->validated());

        return redirect()->route('admin.branches.show', $branch)->with('success', trans('branches.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->back()->with('success', trans('branches.messages.deleted'));
    }
}
