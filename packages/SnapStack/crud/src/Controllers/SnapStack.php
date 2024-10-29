<?php

namespace SnapStack\crud\Controllers;

use App\Http\Controllers\Controller;

class SnapStack extends Controller
{
    public function index()
    {
        return view('crud::index');
    }
}
