@extends('tema.app')
@section('title', 'producto')
@section('contenido')

    {{-- solo se muestra el producto selecionado y un boton para eliminarlo --}}
    <h3>
        {{ $area->name }}</>
    </h3>

    {{-- formulario para llamar a la ruta destroy --}}
    <div class="row">
        <div class="col-sm-12" mb-2>
            <form action="{{ route('area.destroy', $area) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sn" type="submit"> eliminar</button>
            </form>
        </div>
    </div>
@endsection
