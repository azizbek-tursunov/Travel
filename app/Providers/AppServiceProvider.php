<?php

namespace App\Providers;

use App\Models\Destination;
use App\Models\Footer;
use App\Models\Icon;
use App\Models\Logo;
use Illuminate\Support\Facades\App;
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
        if (!App::runningInConsole()) {
            $destinations = Destination::all();
            view()->share('destinations', $destinations);

            view()->composer(
                'components.footer',
                function ($view) {
                    $view->with('footer', Footer::first());
                }
            );

            $logo = Logo::first();
            view()->share('logo', $logo);
        }
    }
}
