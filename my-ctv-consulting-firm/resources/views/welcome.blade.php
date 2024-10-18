<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTV Consulting Firm</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <!-- Add your navigation menu here -->
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#Services">Services</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Contact">Contact Us</a></li>
        <li><a href="#Info">Info</a></li>
            {{--   Add FAQ, Testimonials, Privacy Policy, etc.     --}}
    </ul>

</nav>

<main>
    @yield('content')
</main>

<footer class="footer">
    <!-- Add your footer content here -->
</footer>
</body>
</html>
