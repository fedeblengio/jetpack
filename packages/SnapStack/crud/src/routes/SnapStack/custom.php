<?php

use \SnapStack\crud\Controllers\SnapStack;
use Illuminate\Support\Facades\Route;

Route::get('/crud', [SnapStack::class, 'index']);
