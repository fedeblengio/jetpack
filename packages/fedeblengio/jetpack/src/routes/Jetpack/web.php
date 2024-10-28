<?php

use Fedeblengio\Jetpack\Controllers\JetpackController;

Route::get('/jetpack', [JetpackController::class, 'index']);
