@extends('layouts.layout')

@section('main')
<div class='container'>
    <h1> Editer une catégorie </h1>

    {!! Form::open([
    'route' => ['category.update', $category->id],'method' => 'PUT'
    ]) !!}

    {!! Form::label('title', 'Titre de la catégorie') !!}

    {!! Form::text('title', $category->title, ['placeholder' => 'title catégorie']) !!}

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


    <h1>Supprimer une catégorie </h1>

    {!! Form::open([
    'route' => ['category.destroy', $category->id],'method' => 'DELETE' ]) !!}

    {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}


</div>

@endsection
