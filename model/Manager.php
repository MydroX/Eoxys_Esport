<?php

namespace Eoxys_Esport\model\;

class Manager {
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=eoxys-esport;charset=utf-8', 'root', '');
        return $db;
    }
}