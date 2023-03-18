@extends('dashboard.master')
@section('contenido')
    <h6>Crear Categoria</h6>
    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection