<?php

namespace Fedeblengio\Jetpack\Providers;

use Illuminate\Support\ServiceProvider;

class JetpackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/jetpack/custom.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'jetpack');




        $this->publishes([
            __DIR__ . '/../routes/jetpack/custom.php' => base_path('routes/jetpack/custom.php'),
        ], 'jetpack-routes');


        $this->publishes([
            __DIR__ . '/../Config/jetpack.php' => config_path('jetpack.php'),
        ], 'config');

    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/jetpack.php', 'jetpack'
        );
    }
}
