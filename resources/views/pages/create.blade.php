@extends('pages.home')

@section('title', '| Nieuw Artikel')

@section('content')  {{-- voeghierinallesuityield(content) --}}


{{--  <div class="page-header">  --}}
    <p>Voer hier een nieuw artikel in</p>
    <div class="form-control">
        {!! Form::open(array('route' => 'Artikels.store')) !!}
            {{ Form::label('artikelnaam', 'Artikelnaam:') }}
            {{ Form::text('artikelnaam', null) }}
        {{--  {!! Form::close() !!}   --}}
    </div>
    <div class="form-control">
        {!! Form::open(array('route' => 'Artikels.store')) !!}
            {{ Form::label('omschrijving', 'Omschrijving:') }}
            {{ Form::text('omschrijving', null) }}
        {{--  {!! Form::close() !!}  --}}
    </div>
    <div class="form-control">
        {!! Form::open(array('route' => 'Artikels.store')) !!}
            {{ Form::label('prijs', 'Prijs:') }}
            {{ Form::text('prijs', null) }}
        {{--  {!! Form::close() !!}  --}}
    </div>
    <div class="form-control">
        {!! Form::open(array('route' => 'Artikels.store')) !!}
            {{ Form::label('foto1', '1e foto:') }}
            {{ Form::file('foto1', null, true) }}
        {{--  {!! Form::close() !!}  --}}
    </div>
    <div class="form-control">
        {!! Form::open(array('route' => 'Artikels.store', 'files' => true)) !!}
            {{ Form::label('foto2', '2e foto:', array('class' => 'input')) }}
            {{ Form::file('foto2', null) }}
            <div>
            {{ Form::submit('Voer in', array('class' => 'button')) }}
            </div>
        {!! Form::close() !!}

    </div>

{{--  </div>  --}}

@endsection
