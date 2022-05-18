@extends('layouts.layout')

@section('main')
<div class='container main'>
    <h1> Catégories {{ $categories->id }} </h1>

    <h2> {{ $categories->title }} </h2>

    {!! Form::open([
        'route' => ['category.show', $categories->id],
        'method' => 'GET'
    ]) !!}

    {!! Form::select('filtre', [
        'Up' => 'Prix Montant',
        'Down' => 'Prix Descendant',
    ]) !!}

    {!! Form::submit('Filtrer') !!}

    {!! Form::close() !!}


    <a href="{{ route('category.index') }}" class="btn-btn-info"> </a>

    @foreach ($product as $products)

    <li>
        #{{ $products->id}} / {{$products->title_product}}

        {{$products->prix}} €

        <br>
        <br>

        <img src="{{ asset('img/') }}/{{$products->src}}" >
        <br>
        <a href="{{ route ('product.show', ['product' => $products->id])   }}"> Voir </a>
        <a href="{{ route ('product.edit', ['product' => $products->id])   }}"> Editer </a>

    </li>

@endforeach

</div>
@endsection
