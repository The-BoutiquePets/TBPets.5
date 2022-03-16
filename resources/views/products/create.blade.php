@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Agregar Producto</h1>
        <div class="lead">
            Crear nuevo producto.
        </div>

        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="name_product" class="form-label">Nombre Producto</label>
                    <input value="{{ old('name_product') }}"
                        type="text"
                        class="form-control"
                        name="name_product"
                        placeholder="Nombre Producto" required>

                    @if ($errors->has('name_product'))
                        <span class="text-danger text-left">{{ $errors->first('name_product') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input value="{{ old('description') }}"
                        type="text"
                        class="form-control"
                        name="description"
                        placeholder="Descripción" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="img_product" class="form-label">Imagen URL</label>
                    <input value="{{ old('img_product') }}"
                        type="text"
                        class="form-control"
                        name="img_product"
                        placeholder="Imagen URL" required>

                    @if ($errors->has('img_product'))
                        <span class="text-danger text-left">{{ $errors->first('img_product') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio Unidad</label>
                    <input value="{{ old('price') }}"
                        type="text"
                        class="form-control"
                        name="price"
                        placeholder="Precio" required>
                    @if ($errors->has('price'))
                        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Cantidad Disponible</label>
                    <input value="{{ old('stock') }}"
                        type="text"
                        class="form-control"
                        name="stock"
                        placeholder="Cantidad Disponible" required>
                    @if ($errors->has('stock'))
                        <span class="text-danger text-left">{{ $errors->first('stock') }}</span>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="fk_category" class="form-label">Categoria</label>
                    <select name="fk_category" class="form-control" id="select2-dropdown">
                      <option value="" disabled="disabled">Select Option</option>
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Guardar Producto</button>
                  <a href="{{ route('users.index') }}" class="btn btn-default">Atrás</a>
                </div>
            </form>
        </div>

    </div>
@endsection
