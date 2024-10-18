<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;


Route::get('/', [HomeController::class, 'index']);


Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index']);


// POST request to subscribe to our newsletter
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


// TEST ROUTE
Route::get('/test', function () {
    return view('test');
});


// GET to send Test Email
Route::get('/send-test-email', function () {
    Mail::to('test@example.com')->send(new TestEmail());
    return 'Test email sent to Mailtrap!';
});




