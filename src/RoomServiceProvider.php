<?php

namespace ffy\rooms;

use Illuminate\Support\ServiceProvider;

class RoomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'rooms');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/ffy/rooms'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('ffy\rooms\RoomController');
    }
}
