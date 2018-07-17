<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Collective\Html\FormFacade;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        FormFacade::macro('namedRoute', function($routeName, $htmlTitle = null, $attributes = null, $options = null)
        {
            $aBegin = '<a class = "'.$options['class'].(route($routeName) == url()->current() ? ' active' : '').'" href="'.route($routeName).'" >';
            $aEnd = '</a>';
            $title = $htmlTitle;

            return  $aBegin.$title.$aEnd;
        });

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
