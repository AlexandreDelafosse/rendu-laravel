<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            @if(session('success'))

            {{ session('success') }}

            @endif
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg contentdashboardposts">
                @foreach ( $posts as $post)
                <div>
                    <a href="{{ route('post.edit', $post) }}"  class="btn-btn-info-posts"> Editer </a> <br>
                    {{ $post->title}} 

                     {!! Form::open([
                    'route' => ['post.destroy', $post->id],'method' => 'DELETE' ]) !!} 

                    <a class="btn-btn-info-posts"> {!! Form::submit('Supprimer un post') !!}</a> <br> <br>

                    {!! Form::close() !!}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
