<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // set up controller so that "/" takes us to the home view

    public function index () {
        return view('home');
    }
}

