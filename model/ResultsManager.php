<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class ResultsManager extends Manager {
    public function getResultsHome() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT  id, game, tournament, opponent_name, opponent_rounds, lineup_name, eoxys_rounds, DATE_FORMAT(date_creation, \'%d %M %Y\') AS date_fr FROM results ORDER BY id DESC LIMIT 0, 3');

        return $req;
    }
}
