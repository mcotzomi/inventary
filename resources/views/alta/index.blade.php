@extends('tema.app')
@section('title', 'Listado de productos agregados de UDES')
@section('contenido')
    <h3>
        Listado de productos agregados
    </h3>
    {{-- En esta parte se muestra todo el listado de los productos en una tabla. --}}
    <table class="table table-striped table-hover" width="300">
        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    incremento
                </th>

                <th>
                    fecha de incremento al inventario
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($altas as $alta)
                <tr>
                    <td>
                        {{ $alta->id }}
                    </td>
                    <td>
                        {{ $alta->incremento }}
                    </td>
                    <td>
                        {{ $alta->created_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
