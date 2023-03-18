@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')
@csrf

    <div class="form-group">
        <label for="category">Nombre de la categoria</label>
        <input readonly class="form-control" type="text" name="category" id="category"
            value="{{$category->category }}">
    </div>

    <div class="form-group">
        <label for="description_c">Descripcion</label>
        <textarea readonly class="form-control" name="description_c" id="description_c" 
        cols="30" rows="10">
            {{$category->description_c }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection