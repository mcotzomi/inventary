@extends('tema.app')
@section('title', 'Listado de productos de UDES')
@section('contenido')
    <h3>
        Listado de productos
    </h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    cantidad
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>
                        {{ $area->name }}
                    </td>
                    <td>
                        {{ $area->cantidad }}
                    </td>
                    <td>
                        <a href="{{ route('area.edit', $area) }}">editar</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>


@endsection
