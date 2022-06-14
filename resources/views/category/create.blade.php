@extends('layouts.layout')

@section('main')

<div class='container'>
    <h1> Ajouter une catégorie </h1>

    {!! Form::open([
        'route' => 'category.store','method' => 'POST'
        ]) !!}
        <div class="contenteditspacing">
        {!! Form::label('title', 'Titre de la catégorie') !!}
        {!! Form::text('title', null, ['placeholder' => 'title catégorie']) !!}
        </div>
        {!! Form::submit('Envoyer') !!}

{!! Form::close() !!}
</div>

@endsection