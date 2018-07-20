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
            $aBegin = '<a class = "'.$options['class'].(route($routeName) == url()->current() ? ' active' : '').'" href="'.route($routeName, [], false).'" >';
            $aEnd = '</a>';
            $title = $htmlTitle;

            return  $aBegin.$title.$aEnd;
        });

        FormFacade::macro('orderingPaginateUrl', function($url){

            $orderingUrl = $url;

            if(!is_null($rank = app('request')->input('sortRank')))
                $orderingUrl .= '&sortRank='.$rank;

            if(!is_null($price = app('request')->input('sortPrice')))
                $orderingUrl .= '&sortPrice='.$price;

            return $orderingUrl;
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
