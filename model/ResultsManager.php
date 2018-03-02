<?php

namespace Eoxys_Esport\model\;

require_once('model/Manager.php');

class ResultsManager extends Manager {
    public function getResultsHome() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM results ORDER BY id DESC LIMIT 0, 3');

        return $req;
    }
}
