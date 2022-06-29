@extends('layouts.layout')

@section('main')
<div class="container main">
    <h1>Produits</h1>
    <ul>
@foreach ($products as $product)

        <li>



            <img src="{{ asset('img/Berserkproduct.jpg') }}" class="imgproduct">
            <br>

			{{ $product->id}} <br>
            {{ $product->title_product}} <br>
            {{ $product->prix}} €<br>

			<div class="productbuttons">

				<a href="{{ route ('product.show', ['product' => $product->id])   }}" class="categoriesbouton"> Voir </a>

				<a href="{{ route ('product.edit', ['product' => $product->id])   }}" class="categoriesbouton"> Editer </a>

			</div>


        </li>
<br>

@endforeach

</ul>
<a href="{{route('product.create') }}" class="btn-btn-info"> Ajouter un produit </a>

</div>

@endsection