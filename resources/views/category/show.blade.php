@extends('layouts.layout')

@section('main')
<div class='container main'>
    <h1> Catégories {{ $categories->id }} </h1>

    <h2> {{ $categories->title }} </h2>

    @foreach ($product as $products)

    <li>
        #{{ $products->id}} / {{$products->title_product}}

        {{$products->prix}} €

        <br>
        <br>

        <img src="{{ asset('img/') }}/{{$products->src}}" class="imgproduct">
        <br>
        <a href="{{ route ('product.show', ['product' => $products->id])   }}"> Voir </a>
        <a href="{{ route ('product.edit', ['product' => $products->id])   }}"> Editer </a>

    </li>

@endforeach
</div>
<a href="{{route('product.create') }}" class="btn-btn-info"> Ajouter un produit </a>
<a href="{{ route('category.index') }}" class="btn-btn-info"> Retourner aux catégories</a>


@endsection
