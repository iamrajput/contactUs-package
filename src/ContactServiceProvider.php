<?php

namespace atulPackage\contactForm;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * For the routes files
         */
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        /**
         * For the views files
         */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactForm');
        /**
         * database Files
         */
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        /**
         * For publish any config file we use this command
         */
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contactForm.php'),
        ]);
    }
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contactForm'
        );
    }

}
