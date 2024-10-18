<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
use Illuminate\Support\Facades\URL;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        // For demonstration purposes, we'll use fake data
        $userName = 'John Doe';
        $userEmail = 'test@example.com';

        // Generate a fake verification link
        $verificationLink = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => 1, 'hash' => sha1($userEmail)]
        );

        try {
            // Send the email
            Mail::to($userEmail)->send(new SignUp($userName, $verificationLink));

            // If you want to preview the email in the browser
            if ($request->has('preview')) {
                return new SignUp($userName, $verificationLink);
            }

            return response()->json(['message' => 'Signup email sent successfully to Mailtrap'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
        }
    }
}
