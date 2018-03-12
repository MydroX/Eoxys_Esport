<?php

namespace Eoxys_Esport\model;

class Manager {
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=eoxys-esport;charset=utf8', 'root', '');
        return $db;
    }

    protected function dbSqliConnect() {
        $db = mysqli_connect('localhost', 'root', '', 'eoxys-esport');
        return $db;
    }
}
