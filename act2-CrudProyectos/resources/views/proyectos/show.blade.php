@include('layouts.header')

<body>
    <h1>Usuario: <?php echo $usuario->nombre; ?></h1>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $proyecto->nombre; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $proyecto->categoria; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $proyecto->categoria; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $proyecto->precio; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $proyecto->rol; ?>" readonly>
        </div>
        <br>
        <a href="<?php echo route('usuarios.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
