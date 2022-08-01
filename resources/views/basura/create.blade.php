<form action="{{ route('basura.store') }}" method="POST">

    <div>
        @csrf

        {{-- cueropo de body html que es reutlizable --}}
        <select id="select1" name="areas">
            <option value="value1">Area 1</option>
            <option value="value2">Area 2</option>
            <option value="value3">Area 3</option>
        </select>


        <p>
        </p>

        <label>
            Id del producto a eliminar
        </label>
        <input type="text" name="id_area">

        <p>
        </p>
        <label>
            decremento
            <input type="number" name="decremento">
        </label>
        </input>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                quitar
            </button>
        </div>


    </div>
</form>
