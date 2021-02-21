@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')
    
@section('content')
<h1>Posts</h1>
<hr>
@if (session('message'))
    <div> 
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Pesquisar</button>
</form>

<hr>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@foreach ($posts as $post) 
    <p>
        <img src="{{ url("/storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width:100px;">
        {{ $post->title }} 
        [
        <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
        <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
        ] 
    </p>
    {{-- <p>{{ $post->content }}</p> --}}
@endforeach
<hr>
@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif

@endsection