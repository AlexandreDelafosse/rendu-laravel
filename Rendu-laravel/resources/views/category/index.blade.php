@extends('layouts.layout')

@section('main')
<div class="container main">
    <h1>Categories</h1>
    <ul>
@foreach ($categorie as $category)

        <li>
            {{ $category->id}} / {{$category->title}}


            <img src="{{ asset('img/') }}/{{$category->img}}" >
            <br>

            <a href="{{ route ('category.show', ['category' => $category->id])   }}"> Voir </a>

            <a href="{{ route ('category.edit', ['category' => $category->id])   }}"> Editer </a>

        </li>
<br>

@endforeach

</ul>
<a href="{{route('category.create') }}" class="btn-btn-info"> Ajouter une catégorie </a>

</div>

@endsection