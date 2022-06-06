@extends('layouts.layout')

@section('main')
<div class="container main">
    <h1>Produits</h1>
    <ul>
@foreach ($products as $product)

        <li>
            {{ $product->id}} / {{$product->title}}


            <img src="{{ asset('img/Berserkproduct.jpg') }}" class="imgproduct">
            <br>

            <a href="{{ route ('product.show', ['product' => $product->id])   }}"> Voir </a>

            <a href="{{ route ('product.edit', ['product' => $product->id])   }}"> Editer </a>

        </li>
<br>

@endforeach

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>{{ $product->name }}</h1>
			<h3 class="text-success" >{{ $product->price }} $</h3>
			<div class="mb-3" >{!! nl2br($product->description) !!}</div>
			<div class="bg-white mt-3 p-3 border text-center" >	
				<p>Commander <strong>{{ $product->name }}</strong></p>
				<form method="POST" action="#" class="form-inline d-inline-block" >
					{{ csrf_field() }}
					<input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" >
					<button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
				</form>
			</div>
		</div>
	</div>
</div>


</ul>
<a href="{{route('product.create') }}" class="btn-btn-info"> Ajouter un produit </a>

</div>

@endsection