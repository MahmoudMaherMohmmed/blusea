<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings') && Schema::hasTable('branches')) {
            View::share([
                'layout_settings' => Setting::first(),
                'main_branch' => Branch::first(),
                'categories' => Category::active()->get(),
                'brands' => Brand::active()->get(),
                'collections' => Collection::active()->get(),
            ]);
        }
    }
}
