<?php

session_start();
// put your code here
require_once 'Model/database.php';

$sesionInit = false;
$controller = 'login';

if (isset($_SESSION['iniciada'])) {
    $sesionInit = true;
}

if ($sesionInit || strcmp($controller, "login") === 0) {
// Todo esta lógica hara el papel de un FrontController
    if (!isset($_REQUEST['c'])) {
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();
    } else {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

        // Instanciamos el controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;

        // Llama la accion
        call_user_func(array($controller, $accion));
    }
}else{
    $controller = "login";
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
}
?>
