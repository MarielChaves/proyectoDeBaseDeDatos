<?php

class HomeController {

    public function __CONSTRUCT() {
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/home/home.php';
        require_once 'view/footer.php';
    }

}

?>
