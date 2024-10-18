<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        try {
            // Save the subscriber to the database
            $subscriber = Subscriber::create([
                'email' => $validatedData['email'],
                'first_name' => explode(' ', $validatedData['name'])[0], // Assuming the first word is the first name
                'last_name' => substr(strstr($validatedData['name'], ' '), 1), // Get everything after the first space
                'status' => 'active',
            ]);

            // Send confirmation email
            Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber->first_name, $subscriber->email));

            return redirect()->back()->with('success', 'Thank you for subscribing! Please check your email for confirmation.');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Subscription error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while processing your subscription. Please try again later.');
        }
    }
}
