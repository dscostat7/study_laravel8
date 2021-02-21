@extends('admin.layouts.app')

@section('title', 'Editar Post')
    
@section('content')
<h1>Editando Post <strong>{{ $post->title }}</strong></h1>


<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @include('admin.partials.form')
</form>
@endsection