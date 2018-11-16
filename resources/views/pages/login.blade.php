@extends('pages.home') {{--uitbreiding van de layout--}}

@section('title', 'Inloggen')

@section('content') {{-- voeghierinallesuityield(content) --}}

{{--  <div class="wrapper">  --}}
    <p>Inloggen</p>
    <p>Om in te loggen s.v.p. hier uw naam en wachtwoord invullen.</p>

    <form action="login" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="email" class="form-control" placeholder="info@email.nl">

        </div>

        <div>
            <input type="password" name="password" class="form-control" placeholder="wachtwoord">
        </div>

        <button type="submit">Bevestig</button>

    </form>
{{--  </div>  --}}

@endsection
