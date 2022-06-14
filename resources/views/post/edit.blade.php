@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer {{ $post->title}}</h1>
    <div class="contenteditspacing">
    {!! Form::open([
    'route' => ['post.update', $post->id],'method' => 'PUT'
    ]) !!}
    </div>
    <div class="contenteditspacing">
    {!! Form::label('title', 'Titre du post') !!}
    {!! Form::text('title', $post->title, ['placeholder' => 'titre du post']) !!}
    </div>
    <div class="contenteditspacing">
    {!! Form::label('content', 'Contenu de l\'article') !!}
    {!! Form::textarea('content', null, ['placeholder' => 'contenu du post']) !!}
    </div>
    <div class="contenteditspacing">
    <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : ''}}> {{ $category->title}} </option>
            @endforeach
    </select>
    </div>
    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


    <h1>Supprimer un post </h1>

    {!! Form::open([
    'route' => ['post.destroy', $post->id],'method' => 'DELETE' ]) !!}

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


</div>

@endsection
