<div class="contTitleService">
    <div class="subContTitleService">
        <div id="titleService" class="container">
            <h1 class="page-header"><?php echo $emple->idEmpleado != null ? 'Editar Registro' : 'Nuevo Registro'; ?></h1>
        </div>
    </div>
</div>

<div class="container">
    <div>
        <ol class="breadcrumb">
            <li><a class="moduloTitle" href="?c=Empleado">Modulo de Empleados</a></li>
            <li id="NewEdit" class="active"><?php echo $emple->idEmpleado != null ? 'Editar Registro' : 'Nuevo Registro'; ?></li>
        </ol>
    </div>
    <form id="frm-empleado" action="?c=Empleado&a=Guardar" method="post" enctype="multipart/form-data" onsubmit="miFuncion()">
        <div class="form-group">
            <label>Identificacion</label>
            <input name="Identificacion" value="<?php echo $emple->idEmpleado; ?>" class="form-control" placeholder="Numero de identificacion" data-validacion-tipo="requerido|min:3"/>
        </div>

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" value="<?php echo $emple->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
            <label>Apellidos</label>
            <input type="text" name="Apellidos" value="<?php echo $emple->Apellidos; ?>" class="form-control" placeholder="Ingrese su apellidos" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="Telefono" value="<?php echo $emple->Telefono; ?>" class="form-control" placeholder="Ingrese su numero de telefono" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
            <label>Tipo de empleado:</label>
            <select name="Tipo" class="form-control">
                <option value="">No seleccionado</option>
                <option <?php echo $emple->Tipo == 'Tecnico(a)' ? 'selected' : ''; ?> value="Tecnico(a)">Tecnico(a)</option>
                <option <?php echo $emple->Tipo == 'Dependiente' ? 'selected' : ''; ?> value="Dependiente">Dependiente</option>
                <option <?php echo $emple->Tipo == 'Miselaneo(a)' ? 'selected' : ''; ?> value="Miselaneo(a)">Miselaneo(a)</option>
            </select>
        </div>

        <div class="form-group">
            <label>Clave</label>
            <input type="text" name="Clave" value="<?php echo $emple->Clave; ?>" class="form-control" placeholder="Ingrese su clave" data-validacion-tipo="requerido|min:4" minlength="6" />
        </div>

        <div class="text-right">
            <button id="botonGuardar" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $("#frm-empleado").submit(function () {
            return $(this).validate();

        });
    })

</script>
