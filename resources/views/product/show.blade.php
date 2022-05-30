@extends('layouts.layout')

@section('main')
<div class='container main'>
    <h1> Produit {{ $products->id }} </h1>

    <h2> {{ $products->title }} </h2>

    <p> {{ $products->description }} </p>
    <p> {{ $products->prix }} € </p>

    {!! Form::open([
        'route' => ['product.show', $products->id],
        'method' => 'GET'
    ]) !!}

    {!! Form::select('filtre', [
        'Up' => 'Prix Montant',
        'Down' => 'Prix Descendant',
    ]) !!}

    {!! Form::submit('Filtrer') !!}

    {!! Form::close() !!}


    <a href="{{ route('product.index') }}" class="btn-btn-info"> </a>

</div>
@endsection
