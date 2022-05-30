@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer un produit </h1>

    {!! Form::open([
    'route' => ['product.update', $product->id],'method' => 'PUT'
    ]) !!}

    {!! Form::label('title', 'Titre du produit') !!}

    {!! Form::text('title', $product->title, ['placeholder' => 'title product']) !!}

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


    <h1>Supprimer un produit </h1>

    {!! Form::open([
    'route' => ['product.destroy', $product->id],'method' => 'DELETE' ]) !!}

    {!! Form::submit('Supprimer') !!}

    {!! Form::close() !!}


</div>

@endsection
