@extends('admin.layouts.app')

@section('title', 'Detalhes do Posts')
    
@section('content')
<h1>Detalhes do Post {{ $post->title }}</h1>

<ul>
    <li><strong> Nome: </strong>{{ $post->title }}</li>
    <li><strong> Descrição: </strong>{{ $post->content }}</li>
    <a href="posts.index"> << Voltar</a>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o Post {{ $post->title }}</button>
</form>
@endsection