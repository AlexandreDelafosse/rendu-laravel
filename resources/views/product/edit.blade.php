@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer un produit </h1>

    {!! Form::open([
    'route' => ['product.update', $product->id],'method' => 'PUT'
    ]) !!}
    <div class="contenteditspacing">
    {!! Form::label('title', 'Changer de catégorie') !!}
    {!! Form::text('title', $product->title, ['placeholder' => 'Catégorie']) !!}
    </div>
    {!! Form::submit('Changer') !!}

    {!! Form::close() !!}


    <h1>Supprimer un produit </h1>

    {!! Form::open([
    'route' => ['product.destroy', $product->id],'method' => 'DELETE' ]) !!}

    {!! Form::submit('Supprimer') !!}

    {!! Form::close() !!}


</div>

@endsection
