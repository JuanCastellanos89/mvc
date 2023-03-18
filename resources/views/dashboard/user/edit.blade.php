@extends('dashboard.master')
@section('contenido')

@include('dashboard.partials.validation-error')

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.user._form',['pasw' =>false])

</form>

@endsection