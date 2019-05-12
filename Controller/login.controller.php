<?php

include_once 'model/empleado.php';

class LoginController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new Empleado();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $emple = new empleado();

        $emple->idEmpleado = $_POST['idEmpleado'];
        $emple->Nombre = $_POST['nombre'];
        $emple->Apellidos = $_POST['Apellidos'];
        $emple->Tipoemplerio = $_POST['Tipo'];
        $emple->Clave = $_POST['Clave'];
        $this->model->Obtener($_POST['idEmpleado']) ?
        $this->model->Actualizar($emple) :
        $this->model->Registrar($emple);

        header('Location: index.php?c=empleado');
    }

    public function Autenticar() {
        $Identificacion = $_POST['idEmpleado'];
        $Clave = $_POST[('Clave')];
        $validar = $this->model->Verificar($idEmpleado, $Clave);

        if (isset($_SESSION['Iniciada'])){
            session_destroy();
            header('Location: index.php?c=Login');
        } else {
            if ($validar) {
                session_start();

                $_SESSION['Iniciada'] = true;
                $_SESSION['idEmpleado'] = $idEmpleado;

                header('Location: index.php?c=Home');
            } else {
                header('Location: index.php?c=Login&error=true');
            }
        }
    }
}
