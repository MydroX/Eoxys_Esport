<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class ResultsManager extends Manager {

    public function getResultsHome() {
        $db = $this->dbConnect();
        $db->query("SET lc_time_names = 'fr_FR'");
        $req = $db->query('SELECT  id, game, tournament, opponent_name, opponent_rounds, lineup_name, eoxys_rounds, DATE_FORMAT(date_creation, \'%d %M %Y\') AS date_fr FROM results ORDER BY id DESC LIMIT 0, 5');

        return $req;
    }

    public function addResults() {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO results(game, tournament, opponent_name, opponent_rounds, lineup_name, eoxys_rounds, date_creation) VALUES(:game, :tournament, :opponent_name, :opponent_rounds, :eoxys_rounds, :date_creation)');

        return $req;
    }
}
