@include('layouts.header')

<body>
@include('layouts.menu')
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaProyectos as $proyecto) {
                    echo "<tr>";
                    echo "<td><a href='" .  route('proyectos.show', $proyecto->id) . "'>" .  $proyecto->nombre . "</a></td>";
                    echo "<td>" .  $proyecto->descripcion . "</td>";
                    echo "<td>" .  $proyecto->categoria . "</td>";
                    echo "
                    <td>
                    <a href=" . route('proyectos.edit', $proyecto) . "><button class='btn btn-primary' type='submit'>Editar</button></a>
                    </td>

                    <td>";
                        $csrf = csrf_field();
                        $methodDelete = method_field('DELETE');
                    echo "
                        <form action='" . route('proyectos.destroy', $proyecto) . "' method='POST'>
                            $csrf
                            $methodDelete
                            <button class='btn btn-danger' type='submit'>Eliminar</button>
                        </form>
                    </td>
                    </tr>";
                }
                ?>
                </ul>
            </tbody>
        </table>
