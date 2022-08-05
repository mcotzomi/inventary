@extends('tema.app')
@section('title', 'Nuevo Producto')
@section('contenido')
    <h3>
        registrar producto
    </h3>

    <h3>
        Altas
    </h3>
    

    <form action="{{ route('area.store') }}" method="POST">
        <x-area-form-body />
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
