@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Datos del Usuario</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Nombre: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Celular: {{ $user->cellphone }}
            </div>
            <div>
                Dirección: {{ $user->direction }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
