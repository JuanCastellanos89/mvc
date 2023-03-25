@extends('dashboard.master')
@section('contenido')
    <h6>Lista de Posts</h6>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Publicaciones') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Post') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Url</th>
                                        <th>Contenido del Post</th>
                                        <th>Posteado</th>
                                        <th>Categoria</th>
                                        <th>Creacion</th>
                                        <th>Actualizacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td scope="row">{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->url_clean }}</td>
                                            <td>{{ $post->content }}</td>
                                            <td>{{ $post->posted }}</td>
                                            <td>{{ $post->category->category }}</td>
                                            <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $post->updated_at->format('d-m-Y') }}</td>
                                            <td>
                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('post.show', $post->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('post.edit', $post->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
