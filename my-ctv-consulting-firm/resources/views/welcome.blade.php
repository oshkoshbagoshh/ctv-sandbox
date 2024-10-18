<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTV Consulting Firm</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{--   TODO: IMPORT ICONS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
{{--NAVBAR--}}
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <strong>CTV Consulting Firm</strong>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="/" class="navbar-item">Home</a>
                <a href="#Services" class="navbar-item">Services</a>
                <a href="#About" class="navbar-item">About</a>
                <a href="#Contact" class="navbar-item">Contact Us</a>
                <a href="#Blog" class="navbar-item">Blog</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">More</a>
                    <div class="navbar-dropdown">
                        <a href="#FAQ" class="navbar-item">FAQ</a>
                        <a href="#Testimonials" class="navbar-item">Testimonials</a>
                        <a href="#Privacy" class="navbar-item">Privacy Policy</a>
                    </div>
                </div>


            </div>
        </div>

    </div>


</nav>

{{--END OF NAVBAR--}}

{{--MAIN--}}
<main>
    @yield('content')
</main>
{{--END OF MAIN--}}


{{--FOOTER--}}
<footer class="footer">
    <!-- Add your footer content here -->
</footer>
{{--END OF FOOTER--}}
</body>
</html>
