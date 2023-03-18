@extends('dashboard.master')
@section('contenido')

@include('dashboard.partials.validation-error')

<form action="{{ route('user.store') }}" method="POST">
    @include('dashboard.user._form',['pasw' => true])
</form>

@endsection