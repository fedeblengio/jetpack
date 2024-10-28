<?php

use Fedeblengio\Jetpack\Controllers\JetpackController;
use Illuminate\Support\Facades\Route;

Route::get('/jetpack', [JetpackController::class, 'index']);
