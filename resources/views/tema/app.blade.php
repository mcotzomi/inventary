<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <div style="text-align: center">
        <h1>Inventary</h1>
    </div>


    <p>
    </p>

    <a href="{{ route('area.create') }}" class="btn btn-link">
        Crear nuevo producto (solo para administradores)
    </a>
    <p>
    </p>

    <a href="{{ route('area.index') }}" class="btn btn-link">
        Modificación directa de la tabla del inventario.(solo para usper usuarios)
    </a>
    <p>
    </p>





    <a href="">
        agregar cantidad a algún producto
    </a>
    <p>
    </p>


    <a href="">
        eliminar cantidad a algún producto
    </a>
    <p>
    </p>


    <a href="{{ route('basura.index') }}" class="btn btn-link">
        Listar productos elimindos
    </a>
    <p>
    </p>

    <a href="">
        Listar productos añadidos recientemente
    </a>
    <p>
    </p>






    <div class="col-sm-12"></div>
    @yield('contenido')

    @yield('scripts')


</html>
