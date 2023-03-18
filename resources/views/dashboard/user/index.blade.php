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
                                {{ __('Usuarios') }}
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>E-mail</th>
                                        <th>Rol</th>
                                        <th>Creacion</th>
                                        <th>Actualizacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td scope="row">{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->rol->key }}</td>
                                            <td>{{ $user->posted }}</td>
                                            <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $user->updated_at->format('d-m-Y') }}</td>
                                            <td>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('user.show', $user->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('user.edit', $user->id) }}"><i
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
