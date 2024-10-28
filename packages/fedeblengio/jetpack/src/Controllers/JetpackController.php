<?php

namespace Fedeblengio\Jetpack\Controllers;

use App\Http\Controllers\Controller;

class JetpackController extends Controller
{
    public function index()
    {
        return view('jetpack::index');
    }
}
