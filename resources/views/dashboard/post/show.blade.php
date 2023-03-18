@extends('dashboard.master')
@section('contenido')
    @include('dashboard.partials.validation-error')

    @csrf

    <div class="form-group">
        <label for="title">Titulo</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="url clean">Url limpia</label>
        <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly class="form-control" name="content" id="content" rows="3">{{ $post->content }}</textarea>
    </div>

    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection
