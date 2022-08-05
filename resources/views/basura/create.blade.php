@extends('tema.app')
@section('title', 'Eliminar cantidad')
@section('contenido')

    <form action="{{ route('basura.store') }}" method="POST">

        <div>
            @csrf

            {{-- cuerpo de body html que es reutlizable --}}
            <select id="select1" name="areas">
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
                decremento
            </label>
                <input type="number" name="decremento" max="-1">
            
            <p>
            </p>
            <label>
             Por qué desea quitar alguna cantidad?
            </label>
             <p>
            </p>
            <textarea name="description" rows="10" cols="40"> </textarea>
            
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    quitar
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
