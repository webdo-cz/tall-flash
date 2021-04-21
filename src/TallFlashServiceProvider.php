<?php

namespace WebdoCZ\TallFlash;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class TallFlashServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__. '/publish/tall-flash.php', 'tall-flash');

        $this->loadViewsFrom(__DIR__ . '/views', 'tall-flash');

        $this->publishes([
            __DIR__ . '/publish' => config_path()
        ]);

        Livewire::component('flash-messages', \WebdoCZ\TallFlash\Livewire\FlashMessages::class);
    }
}
