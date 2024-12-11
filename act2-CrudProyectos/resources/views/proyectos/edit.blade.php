@include('layouts.header')

<body>
    <h1>Editar Usuario: <?php echo $usuario->nombre; ?></h1>
    <?php
    echo "<form action='" . route('usuarios.update', $usuario->id) . "' method='POST'>";

    $csrf = csrf_field();
    $method = method_field('PUT');
    echo $csrf;
    echo $method;

    ?>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $proyecto->nombre; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $proyecto->descripcion; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $proyecto->categoria; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $proyecto->precio; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="rol">Rol de Usuario:</label>
            <select class="form-control" id="rol" name="rol">
                <option value="Parado">Parado</option>
                <option value="Iniciado">Iniciado</option>
                <option value="Terminado">Terminado</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo route('proyectos.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
