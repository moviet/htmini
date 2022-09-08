<?php

namespace Moviet\Htmini;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class HTMiniServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/../config/htmini.php" => config_path("htmini.php"),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../config/htmini.php", "htmini.php");
    }
}
