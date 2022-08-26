<form action="{{ route('user.store') }}" method="POST">

    <div>
        <h1>
            Registro de usuarios
        </h1>
        @csrf

        <p>
        </p>
        <label>
            Nombre
        </label>
        <input type="text" name="name">

        <p>
        </p>
        <label>
            correo
        </label>
        <input type="email" name="email">

        <p>
        </p>
        <label>
            genere una contraseña
        </label>
        <input type="text" name="password">
        <p>
        </p>

        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                agregar
            </button>
        </div>
    </div>
</form>
