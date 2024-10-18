<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SubscriptionController;



Route::get('/', [HomeController::class, 'index']);


Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index']);


// POST request to subscribe to our newsletter
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


