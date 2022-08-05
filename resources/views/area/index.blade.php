@extends('tema.app')
@section('title', 'Listado de productos de UDES')
@section('contenido')


    <h3>
        Listado de productos
    </h3>
    {{-- En esta parte se muestra todo el listado de los productos en una tabla. --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    id
                </th>
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
                        {{ $area->id }}
                    </td>
                    <td>
                        {{ $area->name }}
                    </td>
                    <td>
                        {{ $area->cantidad }}
                    </td>
                    <td>
                        <a href="{{ route('area.edit', $area) }}">editar</a>
                        <a href="{{ route('area.show', $area) }}">ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
