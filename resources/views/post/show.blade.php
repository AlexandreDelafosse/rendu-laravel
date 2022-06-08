@extends('layouts.layout')

@section('main')
<div class="container main">
	<h1> {{ $posts->title }}</h1>

    <div> 

        {{ $posts->content }}
    </div>

	
</div>

@endsection