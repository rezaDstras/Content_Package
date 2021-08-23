<?php

namespace Ehcoder\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
        //publish in laravel source when install package or php artisan vendor:publish
        $this->publishes([__DIR__.'/config/contact.php' => config_path('contact.php'),]);
    }

    public function boot()
    {
        //
    }
}
