<?php

namespace App\Providers;

use Alkoumi\LaravelHijriDate\Hijri;
use App\Area;
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
        view()->share('hijridate', Hijri::DateFullFormat(Carbon::now()));
    }
}
