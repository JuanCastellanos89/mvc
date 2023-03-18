@include('dashboard.partials.validation-error')
@csrf

<div class="form-group">
    <label for="title">Titulo</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>

<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean"
        value="{{ old('url_clean', $post->url_clean) }}">
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', $post->content) }}</textarea>
</div>

<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opcion</option>
        @foreach ($categories as $category => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                {{ $category }}</option>
        @endforeach
    </select>
</div>



<button type="submit" class="btn btn-success btn-sm">Guardar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>

