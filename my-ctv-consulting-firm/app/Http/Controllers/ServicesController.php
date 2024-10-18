<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Services controller used to return the "Services" view
    public function index() {
        return view('services');
    }
}

