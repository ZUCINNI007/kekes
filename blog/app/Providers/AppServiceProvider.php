<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/**
 * @MY_LIL_SHIT
 */
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @MY_LIL_SHIT
         * for creatin' migrations with an older MySQL version
         */
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
