<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;




Route::get('/', [HomeController::class, 'index']);

// TEST ROUTE
Route::get('/test', function () {
    return view('test');
});

Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index']);


// POST request to subscribe to our newsletter
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Route::get('/sendmail', [MailController::class, 'sendMail']);




