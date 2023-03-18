@extends('dashboard.master')
@section('contenido')

    <h6>Editar Post</h6>
    <form action="{{ route('post.update', $post -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection