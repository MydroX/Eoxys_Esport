<?php

namespace Eoxys_Esport\model\;

class Manager {
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=eoxys-esport;charset=utf-8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
