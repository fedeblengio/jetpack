<?php

namespace SnapStack\crud\Providers;

use Illuminate\Support\ServiceProvider;

class SnapStackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/SnapStack/custom.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'crud');




        $this->publishes([
            __DIR__ . '/../routes/SnapStack/custom.php' => base_path('routes/crud/custom.php'),
        ], 'crud-routes');


        $this->publishes([
            __DIR__ . '/../Config/SnapStack.php' => config_path('crud.php'),
        ], 'config');

    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/SnapStack.php', 'crud'
        );
    }
}
