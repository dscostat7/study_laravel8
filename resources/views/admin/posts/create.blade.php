@extends('admin.layouts.app')

@section('title', 'Criar Novo Post')
    
@section('content')
<h1>Cadastrar Novo Post</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @include('admin.partials.form')
</form>
@endsection