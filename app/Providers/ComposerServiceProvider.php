<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // use creator instead of composer
        View::composer(['pages.profile','pages.settings'],'App\Http\ViewComposer\ProfileComposer');
        //View::composer('pages.profile','App\Http\ViewComposer\ProfileComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
