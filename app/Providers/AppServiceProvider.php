<?php

namespace App\Providers;

use Alkoumi\LaravelHijriDate\Hijri;
use App\Area;
use App\Icon;
use App\Links;
use App\Settings;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


        Carbon::setLocale(config('app.locale'));
        view()->share('settings', Settings::findOrFail(1));
        view()->share('areas', Area::getMainAreas());
        view()->share('header1', Icon::wherePlace('header1')->get());
        view()->share('header2', Icon::wherePlace('header2')->get());
        view()->share('header3', Icon::wherePlace('header3')->get());
        view()->share('footer', Icon::wherePlace('footer')->get());
        view()->share('footer_payment', Icon::wherePlace('footer-payment')->get());
        view()->share('menuonelinks', Links::wherePlace('menu1')->whereVisible(1)->orderBy('position')->get());
        view()->share('footeronelinks', Links::wherePlace('footer1')->whereVisible(1)->orderBy('position')->get());
        view()->share('footertwolinks', Links::wherePlace('footer2')->whereVisible(1)->orderBy('position')->get());
        view()->share('footerthreelinks', Links::wherePlace('footer3')->whereVisible(1)->orderBy('position')->get());
        view()->share('hijridate', Hijri::DateFullFormat(Carbon::now()));
    }
}
