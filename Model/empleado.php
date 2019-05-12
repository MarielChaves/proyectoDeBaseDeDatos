<?php

class Empleado{

    private $pdo;
    public $idEmpleado;
    public $nombre;
    public $apellidos;
    public $telefono;
    public $tipo;
    public $clave;


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
                    ->prepare("SELECT * FROM empleado WHERE idEmpleado = ?");


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
                                $data->nombre,
                                $data->apellidos,
                                $data->telefono,
                                $data->tipo,
                                $data->clave,
                                $data->idEmpleado
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Verificar($idEmpleado, $clave) {

        try {
            $sql = "SELECT  idEmpleado, clave FROM empleado WHERE idEmpleado = ? AND clave = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($idEmpleado, $clave));

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

    public function Registrar(Empleado $data) {
        try {
            $sql = "INSERT INTO empleado(idEmpleado, nombre, apellidos, telefono, tipo, clave)
		        VALUES (?, ?, ?, ?, ?, ?)";


            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->idEmpleado,
                                $data->nombre,
                                $data->apellidos,
                                $data->telefono,
                                $data->tipo,
                                $data->clave
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
