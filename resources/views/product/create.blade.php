@extends('layouts.layout')

@section('main')

<div class='container'>
    <h1> Ajouter un produit </h1>

    {!! Form::open([
        'route' => 'product.store','method' => 'POST'
        ]) !!}

        <div class="contenteditspacing">
        {!! Form::label('title_product', 'Titre du produit') !!}
        {!! Form::text('title_product', null, ['placeholder' => 'title product']) !!}
        </div>


        {!! Form::submit('Créer votre produit') !!}

{!! Form::close() !!}
</div>

@endsection