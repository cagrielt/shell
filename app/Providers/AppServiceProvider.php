<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use App\Models\MenuItem;

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
        Builder::defaultStringLength(191);

        view()->composer('shared.header',function($view){
            $menuItems = $menuItems = MenuItem::where('position','Ana Menü')->where('language',app()->getLocale())->where('parent_id',null)->orderBy('id');

            if(!session()->has('user')){
                $menuItems = $menuItems->where('private',false);
            }
            
            $view->with('menuItems',$menuItems->get());
        });

        view()->composer('shared.footer',function($view){
            $menuItems = MenuItem::where('position','Footer Menü')->where('language',app()->getLocale())->where('parent_id',null)->orderBy('id');

            if(!session()->has('user')){
                $menuItems = $menuItems->where('private',false);
            }

            $view->with('menuItems',$menuItems->get());
        });
    }
}
