@extends('dashboard.master')
@section('contenido')
    <h6>Modificar categoría</h6>
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection