@include('layouts.header')

<body>
@include('layouts.menu')

<?php
    echo "<form action='" . route('proyectos.store') . "' method='POST'>";

    $csrf = csrf_field();
    $method = method_field('POST');
    echo $csrf;
    echo $method;

    ?>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="">

            <!-- mensajes de error con plantillas BLADE -->
            @error('nombre')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="">

            @error('descripcion')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="">

            @error('categoria')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="">

            @error('precio')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="estado">Estado de Proyectp:</label>
            <select class="form-control" id="rol" name="rol">
                <option value="Parado">Parado</option>
                <option value="Iniciado">Iniciado</option>
                <option value="Terminado">Terminado</option>
            </select>

            @error('estado')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="<?php echo route('proyectos.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
