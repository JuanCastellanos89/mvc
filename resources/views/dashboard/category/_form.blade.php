@include('dashboard.partials.validation-error')
@csrf

<div class="form-group">
    <label for="category">Nombre de la categoria</label>
    <input class="form-control" type="text" name="category" id="category" value="{{ old('category', $category->category) }}">
</div>

<div class="form-group">
    <label for="description_c">Descripcion</label>
    <textarea class="form-control" name="description_c" id="description_c" rows="3">{{ old('description_c', $category->description_c) }}</textarea>
</div>


<button type="submit" class="btn btn-success btn-sm">Guardar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>