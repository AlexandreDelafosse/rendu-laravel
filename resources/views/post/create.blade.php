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
        <div class="contenteditspacing">
        {!! Form::label('title', 'Titre de l\'article') !!}
        {!! Form::text('title', null, ['placeholder' => 'title post']) !!}
        </div>
        <div class="contenteditspacing">
        {!! Form::label('content', 'Contenu de l\'article') !!}
        {!! Form::textarea('content', null, ['placeholder' => 'contenu du post']) !!}
        </div>
        <div class="contenteditspacing">
        {!! Form::label('category', 'Categorie de l\'article') !!}
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->title}} </option>
            @endforeach
        </select>
        {!! Form::submit('Envoyer') !!}
        </div>
{!! Form::close() !!}
	
</div>

@endsection