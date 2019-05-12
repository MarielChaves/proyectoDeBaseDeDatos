<?php
include_once 'model/empleado.php';

class EmpleadoController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new Empleado();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/empleado/empleado.php';
        require_once 'view/footer.php';
    }

    public function Editar() {
        $emple = new Empleado();

        if (isset($_POST['id'])) {
            $emple = $this->model->Obtener($_POST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/empleado/empleado-editar.php';
        require_once 'view/footer.php';
    }

    public function Registrar() {
        $emple = new Empleado();

        if (isset($_POST['idEmpleado'])) {
            $emple = $this->model->Obtener($_POST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/empleado/empleado-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $emple = new empleado();

        $emple->idEmpleado = $_POST['Identificacion'];
        $emple->nombre = $_POST['Nombre'];
        $emple->telefono = $_POST['Telefono'];
        $emple->apellidos = $_POST['Apellidos'];
        $emple->tipo = $_POST['Tipo'];
        $emple->clave = $_POST['Clave'];
        $this->model->Obtener($_POST['Identificacion']) ?
                        $this->model->Actualizar($emple) :
                        $this->model->Registrar($emple);

        header('Location: index.php?c=Empleado');
    }

    public function Eliminar() {
        $this->model->Eliminar($_POST['id']);
        header('Location: index.php?c=Empleado');
    }

}




?>
