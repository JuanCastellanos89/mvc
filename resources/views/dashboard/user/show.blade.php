@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')
@csrf

    <div class="form-group">
        <label for="name">Nombre: </label>
        <input readonly class="form-control" type="text" name="name" id="name"
            value="{{$user->name }}">
    </div>

    <div class="form-group">
        <label for="email">Descripcion</label>
        <textarea readonly class="form-control" name="email" id="email" 
        cols="30" rows="10">
            {{$user->email }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection