<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class NewsManager extends Manager {
    public function getNewsHome() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 3');

        return $req;
    }

    public function getNewsTicketsDisplay() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM news WHERE id = ?');
        $req->execute(array($idNews));

        return $req;
    }

    public function getNewsTickets() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM news ORDER BY id');

        return $req;
    }
}
