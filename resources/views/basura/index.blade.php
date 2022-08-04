@extends('tema.app')
@section('title', 'Listado de productos eliminados de UDES')
@section('contenido')
    <h3>
        Listado de productos eliminados
    </h3>
    {{-- En esta parte se muestra todo el listado de los productos en una tabla. --}}
    <table class="table table-striped table-hover" width="500">
        <thead>
            <tr>
                <th>
                    id
                </th>
               
                <th>
                    decremento
                </th>
                <th>
                    causa por la que se eliminó
                </th>
                <th>
                    fecha de eliminación
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
                        {{ $basura->decremento }}
                    </td>
                    <td>
                        {{ $basura->description }}
                    </td>
                    <td>
                        {{ $basura->created_at }}
                    </td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
