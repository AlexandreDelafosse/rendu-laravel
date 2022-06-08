@extends('layouts.layout')

@section('main')
<div class="container main">
	<h1> Ajouter un article</h1>

@foreach ($errors->all() as $error)
    <span> {{ $error }}</span>
@endforeach

    {!! Form::open([
        'route' => 'post.store','method' => 'POST'
        ]) !!}  

        @csrf

        {!! Form::label('title', 'Titre de l\'article') !!}
        {!! Form::text('title', null, ['placeholder' => 'title post']) !!}

        {!! Form::label('content', 'Contenu de l\'article') !!}
        {!! Form::textarea('content', null, ['placeholder' => 'contenu du post']) !!}

        {!! Form::label('image', 'Image de l\'article') !!}
        {!! Form::file('image', null, ['placeholder' => 'image post']) !!}

        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->title}} </option>
            @endforeach
        </select>
        {!! Form::submit('Envoyer') !!}

{!! Form::close() !!}
	
</div>

@endsection