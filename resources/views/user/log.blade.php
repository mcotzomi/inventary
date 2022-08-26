<form action="{{ route('user.store') }}" method="POST">

    <div>
        <h1>
            Por favor digite su nombre y contraseña para poder ingresar 
        </h1>
        @csrf

        <p>
        </p>
        <label>
            nombre
        </label>
        <input type="text" name="name">

        <p>
        </p>
        <label>
            contraseña
        </label>
        <input type="text" name="password">
        <p>
        </p>

        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                ingresar
            </button>
        </div>
 </div>
</form>
