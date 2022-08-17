<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use function Symfony\Component\String\b;

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
        Blade::directive('inlineCss', function ($css_path){
            $css_full_path = public_path().'/'.$css_path;
            return "<style><?php include '$css_full_path'?></style>";
        });
    }
}
