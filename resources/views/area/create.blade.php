@extends('tema.app')
@section('title', 'Nuevo Producto')
@section('contenido')
    <h3>
        registrar producto
    </h3>

    <h3>Altas</h3>
    </dev>

    <form action="{{ route('area.store') }}" method="POST">
        @csrf


        <select id="select1" name="areas">
            <option value="value1">Area 1</option>
            <option value="value2">Area 2</option>
            <option value="value3">Area 3</option>
        </select>


        <p>
        </p>

        <label>
            nombre del producto
        </label>
        <input type="text" name="name">

        <p>
        </p>
        <label>
            cantidad del producto
            <input type="number" name="cantidad">
        </label>
        </input>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                guardar
            </button>
        </div>


    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



@endsection
