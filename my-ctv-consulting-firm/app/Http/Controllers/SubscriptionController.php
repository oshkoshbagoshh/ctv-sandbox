<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
    // subscribe function to validate emails

    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers, email',
            ]);

        // Save the subscriber to your database here
        // ...
        //TODO:

        // Send confirmation email
        Mail::to($request->email)->send(new SubscriptionConfirmation($request->name, $request->email));

        return redirect()->back()->with('success', 'Thank you for subscribing! Please check your email for confirmation');

    }

}
