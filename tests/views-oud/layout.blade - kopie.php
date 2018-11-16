<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <script type="text/javascript" href="{{asset('js/main.js') }}"src="main.js"></script>

    </head>
    <header>
            <div class="header"><p>Welkom op Marktplaats</p></div>
    </header>
    <body>
        <div class="topnav">
            <ul>
                <li><a href=/>Home</a></li>
                <li><a href=/login>Inloggen</a></li>
                <li><a href=/register>Registreren</a></li>
                <li><a href=/reset>Wijzig wachtwoord</a></li>
            </ul>
        </div>

        @yield('content')

    </body>
</html>
