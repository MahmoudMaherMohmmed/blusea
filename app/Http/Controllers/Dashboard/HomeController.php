<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\ClientTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Client;
use App\Models\ReportAccident;
use App\Models\Service;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $users = User::latest()->get();
        $branches = Branch::latest()->get()->count();
        $services = Service::latest()->get()->count();

        return view('dashboard.index', compact('users', 'branches', 'services'));
    }
}
