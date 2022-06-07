@extends('layouts.layout')

@section('main')
<div class="container main">
	<h1> Blog</h1>
	@foreach ($posts as $post)

		<li>
			{{ $post->id}} / {{$post->title}}


			<img src="{{ asset('img/Berserkpost.jpg') }}" class="imgpost">

			<p> {{ $post->created_at->format ('d M Y') }} </p>

			<p> {{ $post->category->title}} </p>  

			<p> {{ Str::limit($post->content, 120)}} </p>

			<p> {{ $post->user->name}}</p>
			<br>

			<a href="{{ route ('post.show', ['post' => $post->id])   }}"> Voir </a>

			<a href="{{ route ('post.edit', ['post' => $post->id])   }}"> Editer </a>

		</li>
<br>

@endforeach
	
</div>

@endsection