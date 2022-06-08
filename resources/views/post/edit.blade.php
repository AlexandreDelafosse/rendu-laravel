@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer {{ $post->title}}</h1>

    {!! Form::open([
    'route' => ['post.update', $post->id],'method' => 'PUT'
    ]) !!}

    {!! Form::label('title', 'Titre du post') !!}
    {!! Form::text('title', $post->title, ['placeholder' => 'titre du post']) !!}

    {!! Form::label('content', 'Contenu de l\'article') !!}
    {!! Form::textarea('content', null, ['placeholder' => 'contenu du post']) !!}

    {!! Form::label('image', 'Image de l\'article') !!}
    {!! Form::file('image', null, ['placeholder' => 'image post']) !!}

    <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : ''}}> {{ $category->title}} </option>
            @endforeach
    </select>

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


    <h1>Supprimer un post </h1>

    {!! Form::open([
    'route' => ['post.destroy', $post->id],'method' => 'DELETE' ]) !!}

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


</div>

@endsection
