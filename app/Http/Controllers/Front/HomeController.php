<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreContactMessageRequest;
use App\Http\Requests\Front\StoreSubscribeRequest;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscribe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sliders = Slider::active()->latest()->get();
        $blogs = Blog::active()->latest()->limit(9)->get();
        $partners = Partner::active()->get();
        $services = Service::active()->latest()->limit(4)->get();

        return view('front.index', compact('sliders', 'blogs', 'partners', 'services'));
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * Show the application blogs page.
     *
     * @return \Illuminate\View\View
     */
    public function blogs()
    {
        $blogs = Blog::active()->latest()->get();

        return view('front.blogs', compact('blogs'));
    }

    /**
     * Show the application blog details page.
     *
     * @return \Illuminate\View\View
     */
    public function blogDetails($slug)
    {
        $blogs = Blog::active()->latest()->get();
        $blog = Blog::where('slug', $slug)->active()->first();

        return view('front.blog_details', compact('blogs', 'blog'));
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Save contact message.
     *
     * @param \App\Http\Requests\Front\StoreContactMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveContactMessage(StoreContactMessageRequest $request)
    {
        Contact::create($request->validated());

        return back()->with('success', trans('contacts.messages.created'));
    }

    /**
     * Save subscribe.
     *
     * @param \App\Http\Requests\Front\StoreSubscribeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(StoreSubscribeRequest $request)
    {
        Subscribe::create($request->validated());

        return back()->with('success', trans('subscribes.messages.created'));
    }
}
