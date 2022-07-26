@extends('tema.app')
@section('title', 'Editar producto')
@section('contenido')
    <h3>
        Editar producto <i>{{ $area->name }}</i>
    </h3>

    <h3>Altas</h3>
    </dev>

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
