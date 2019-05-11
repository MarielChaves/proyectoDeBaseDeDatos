<?php

class Database {

    public static function StartUp() {
        $pdo = new PDO('mysql:host=localhost;dbname=sistemadecompras;charset=utf8', 'root', '123456');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    /*huevqwuhrbw*/

}
