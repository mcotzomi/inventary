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
        nombre del producto
    </label>
    <input type="text" name="name" value="">

    <p>
    </p>
    <label>
        cantidad del producto
    </label>
    <input type="number" name="cantidad">
    
    
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">
            guardar
        </button>
    </div>


</div>
