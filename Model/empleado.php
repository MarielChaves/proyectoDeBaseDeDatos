<?php

class Empleado{

    private $pdo;
    public $idEmpleado;
    public $Nombre;
    public $Apellidos;
    public $Telefono;
    public $Tipo;
    public $Clave;


    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT idEmpleado, nombre, apellidos, telefono, tipo, clave FROM empleado");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idEmpleado) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM usuario WHERE Identificacion = ?");


            $stm->execute(array($idEmpleado));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE empleado SET
                nombre = ?,
                apellidos  = ?,
                telefono = ?,
                clave  = ?,
                tipo  = ?
                WHERE idEmpleado = ?";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->Nombre,
                                $data->Apellidos,
                                $data->Sexo,
                                $data->telefono,
                                $data->Tipo,
                                $data->Clave,
                                $data->idEmpleado
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Verificar($idEmpleado, $Clave) {

        try {
            $sql = "SELECT  idEmpleado, clave FROM empleado WHERE idEmpleado = ? AND clave = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($idEmpleado, $Clave));

            $empleadoDatos = $stm->fetch(PDO::FETCH_OBJ);
            if ($empleadoDatos == NULL) {
                return FALSE;
            } else {
                return TRUE;
            }
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function Registrar(Usuario $data) {
        try {
            $sql = "INSERT INTO empleado(idEmpleado, nombre, apellidos, telefono, tipo, clave)
		        VALUES (?, ?, ?, ?, ?, ?)";


            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->idEmpleado,
                                $data->Nombre,
                                $data->Apellidos,
                                $data->telefono,
                                $data->Tipo,
                                $data->Clave
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM empleado WHERE idEmpleado = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
