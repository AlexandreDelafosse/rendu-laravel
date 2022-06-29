@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer un produit </h1>

    {!! Form::open([
    'route' => ['product.update', $product->id],'method' => 'PUT'
    ]) !!}

    <div class="contenteditspacing">
        {!! Form::label('title_product', 'Nom du produit') !!}
        {!! Form::text('title_product', null, ['placeholder' => 'Nom du produit']) !!}
    </div>

    <div class="contenteditspacing">
        {!! Form::label('price', 'Prix du produit') !!}
        {!! Form::text('price', null, ['placeholder' => 'Prix du produit']) !!}
    </div>

    <div class="contenteditspacing">
        {!! Form::label('catégorie', null, ['placeholder' => 'changement de categories']) !!}
        <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id === $category->id ? 'selected' : ''}}> {{ $category->title}} </option>
                @endforeach
        </select>
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
