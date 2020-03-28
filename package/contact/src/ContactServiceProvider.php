<?php
namespace bitfumes\contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php')
        ], 'config');

        /*
         * After add publishes run the following command in terminal
         *
         * $ php artisan vendor:publish
         *
         * $ index number [Which file should be published]
         *
         * */
    }

    public function register()
    {

    }

}
