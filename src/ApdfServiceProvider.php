<?php

namespace riftwebdev\Apdf;

use Illuminate\Support\ServiceProvider;


class ApdfServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {

        $this->app->singleton(Apdf::class,function (){
            return new Apdf();
        });
    }

}
