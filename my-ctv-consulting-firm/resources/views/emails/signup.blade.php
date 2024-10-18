<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our App</title>
</head>
<body>
<h1>Welcome to Our App, {{ $userName }}!</h1>
<p>Thank you for signing up. We're excited to have you on board!</p>
<p>To complete your registration, please click the link below to verify your email address:</p>
<p><a href="{{ $verificationLink }}">Verify Your Email</a></p>
<p>If you didn't create an account, you can safely ignore this email.</p>
<p>Best regards,<br>The App Team</p>
</body>
</html>
