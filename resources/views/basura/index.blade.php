@extends('tema.app')
@section('title', 'Listado de productos eliminados de UDES')
@section('contenido')
    <h3>
        Listado de productos eliminados
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
                <th>
                    causa por la que se eliminó
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($basuras as $basura)
                <tr>
                    <td>
                        {{ $basura->id }}
                    </td>

                    <td>
                        {{ $basura->name }}
                    </td>
                    <td>
                        {{ $basura->cantidad }}
                    </td>
                    <td>
                        {{ $basura->description }}
                    </td>
                    <td>

                        <a href="">ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
