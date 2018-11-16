<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head');
        <header>
                <div class="header"><p>Welkom op Marktplaats</p></div>
        </header>
    @include('partials._nav')
        <div class="wrapper">
            @yield('content')
        </div>
    @include('partials._footer')

</html>
