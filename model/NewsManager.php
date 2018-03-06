<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class NewsManager extends Manager {
    public function getFeaturedNewsHome() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 1');

        return $req;
    }

    public function getHomeNewsTickets() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT 1,9');

        return $req;
    }

    public function getNewsTicketsDisplay($idNews) {
        $db = $this->dbConnect();
        $db->query("SET lc_time_names = 'fr_FR'");
        $req = $db->prepare('SELECT id, title, newsText, imagePath, DATE_FORMAT(date_creation, \'%d %M %Y\') AS date_fr FROM news WHERE id = ?');
        $req->execute(array($idNews));

        return $req;
    }

    public function getNewsTickets() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM news ORDER BY id');

        return $req;
    }

    public function addNews() {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO news(title, newsText, imagePath, imagePathSmall, date_creation) VALUES(:title, :newsText, :imagePath, :imagePathSmall, NOW())');

        return $req;
    }

}
