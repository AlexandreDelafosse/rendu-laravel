@extends('layouts.layout')

@section('main')
<div class="container main">
    <h1>Categories</h1>
    <ul class="containercategories">
@foreach ($categorie as $category)

        <li class="divcategories">
            <div class="imgidcategories">
                <img src="{{ asset('img/Berserk.jpg') }}" class="imgcategory">

                <p> {{ $category->id}} / {{$category->title}} </p>
            </div>
            <br>

            <a href="{{ route ('category.show', ['category' => $category->id])   }}" class="categoriesbouton"> Voir </a>

            <a href="{{ route ('category.edit', ['category' => $category->id])   }}" class="categoriesbouton"> Editer </a>

        </li>
<br>

@endforeach

</ul>
<a href="{{route('category.create') }}" class="btn-btn-info"> Ajouter une catégorie </a>

</div>

@endsection