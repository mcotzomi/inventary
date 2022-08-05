@extends('tema.app')
@section('title', 'agregar cantidad')
@section('contenido')


    <form action="{{ route('alta.store') }}" method="POST">

        <div>
            @csrf

            {{-- cuerpo de body html que es reutlizable --}}
            <select id="select1" name="ar">
                <option value="value1">Area 1</option>
                <option value="value2">Area 2</option>
                <option value="value3">Area 3</option>
            </select>


            <p>
            </p>

            <select id="select" name="id_area">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">id:{{ $area->id }}</option>
                @endforeach
            </select>

            <p>
            </p>
            <label>
                incremento
            </label>
            <input type="number" name="incremento" min="1">


            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    agregar
                </button>
            </div>
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
