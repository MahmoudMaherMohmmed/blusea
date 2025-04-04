<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreContactMessageRequest;
use App\Http\Requests\Front\StoreSubscribeRequest;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
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
        $special_products = Product::active()->special()->latest()->limit(8)->get();
        $best_seller_products = Product::active()->bestSeller()->latest()->get();
        $blogs = Blog::active()->latest()->limit(9)->get();
        $partners = Partner::active()->get();
        $services = Service::active()->latest()->limit(4)->get();

        return view('front.index', compact('sliders', 'special_products', 'best_seller_products', 'blogs', 'partners', 'services'));
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
     * Show the application products page.
     *
     * @return \Illuminate\View\View
     */
    public function products()
    {
        $products = Product::active()->latest()->paginate(12);
        $latest_products = Product::active()->latest()->limit(4)->get();

        return view('front.products', compact('products', 'latest_products'));
    }

    /**
     * Show the application product details page.
     *
     * @return \Illuminate\View\View
     */
    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->active()->firstOrFail();

        return view('front.product_details', compact('product'));
    }

    /**
     * Show the application blogs page.
     *
     * @return \Illuminate\View\View
     */
    public function blogs()
    {
        $blogs = Blog::active()->latest()->paginate(6);
        $recent_blogs = Blog::active()->latest()->limit(3);

        return view('front.blogs', compact('blogs', 'recent_blogs'));
    }

    /**
     * Show the application blog details page.
     *
     * @return \Illuminate\View\View
     */
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->active()->first();
        $recent_blogs = Blog::active()->latest()->limit(3);

        return view('front.blog_details', compact('blog', 'recent_blogs'));
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
