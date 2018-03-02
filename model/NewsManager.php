<?php

namespace Eoxys_Esport\model\;

require_once('model/Manager.php');

class NewsManager extends Manager {
    public function getNews() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * ORDER BY id DESC LIMIT 0, 3');
        
        return $req;
    }
}