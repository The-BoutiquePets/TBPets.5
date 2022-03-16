@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-4 rounded">
        <h1>Productos</h1>
        <div class="lead">
            Gestor de productos.
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Agregar producto</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Nombre Producto</th>
                <th scope="col" width="15%">Categoria</th>
                <th scope="col" width="15%">Description</th>
                <th scope="col" width="15%">Imagen</th>
                <th scope="col" width="15%">Precio</th>
                <th scope="col" width="15%">Cant. Disponible</th>
                <th scope="col" width="1%" colspan="3"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->name_category }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->img_product }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
        </div>

    </div>
@endsection
