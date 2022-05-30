@extends('layouts.layout')

@section('main')

<div class='container'>
    <h1> Ajouter un produit </h1>

    {!! Form::open([
        'route' => 'product.store','method' => 'POST'
        ]) !!}

        {!! Form::label('title_product', 'Titre du produit') !!}
        {!! Form::text('title_product', null, ['placeholder' => 'title product']) !!}

        {!! Form::submit('Envoyer') !!}

{!! Form::close() !!}
</div>

@endsection