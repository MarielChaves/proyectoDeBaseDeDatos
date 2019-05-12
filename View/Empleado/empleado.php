<div class="contTitleService">
    <div class="subContTitleService">
        <div id="titleService" class="container">
            <h1 class="page-header">Empleado</h1>
        </div>
    </div>
</div>

<form action="?c=Empleado" method="post">

    <div class="well well-sm text-right">

        <div class="contLabelBuscar">
            <label class="labelBuscar">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar"/>
        </div>

        <div id="margenCont">
            <a id="botonRegistrar" class="btn btn-primary" href="?c=Empleado&a=Registrar">Registrar</a>
            <input id="botonEditar" type="submit" value="Editar" name="a" class="btn btn-primary"/>
            <input id="botonEliminar" type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
        </div>
    </div>

    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th class="spaceCol"></th>
                <th class="spaceCol">Identificacion</th>
                <th class="spaceCol">Nombre</th>
                <th class="spaceCol">Apellidos</th>
                <th class="spaceCol">Telefono</th>
                <th class="spaceCol">Tipo de Empleado</th>
                <th class="spaceCol">Clave</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->model->Listar() as $emple): ?>
                <?php $valor = $emple->idEmpleado; ?>
                <tr>
                    <td><input id="marginRadio" type=radio name=id value=<?php echo $emple->idEmpleado; ?> ></td>
                    <td><?php echo $emple->idEmpleado; ?></td>
                    <td><?php echo $emple->nombre; ?></td>
                    <td><?php echo $emple->apellidos; ?></td>
                    <td><?php echo $emple->telefono; ?></td>
                    <td><?php echo $emple->tipo; ?></td>
                    <td><?php echo $emple->clave; ?></td>
                </tr>
            <?php endforeach; ?>
        <script src="assets/js/buscador.js"></script>
        </tbody>
    </table>
</form>
