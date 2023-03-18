@extends('dashboard.master')
@section('contenido')
    <h6>Crear Post</h6>
    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>
@endsection