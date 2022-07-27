@extends('tema.app')
@section('title', 'Editar producto')
@section('contenido')
    <h3>
        Editar producto <i>{{ $area->name }}</i>
    </h3>

    <h3>Altas</h3>
    </dev>
    {{-- formulario para llamar a la ruta update --}}
    <form action="{{ route('area.update', $area) }}" method="POST">
        @method('put')
        {{-- manda a traer al componente el cual contiene el cuerpo del html que es reutilizable --}}
        <x-area-form-body :area="$area" />
    </form>
    {{-- alerta por si no encuntra valores en los campos --}}
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
