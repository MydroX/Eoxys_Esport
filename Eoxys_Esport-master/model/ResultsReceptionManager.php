<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class AddResultsManager extends Manager {
    public function addResults($game, $tournament, $oppenent_name, $opponent_rounds, $lineup_name, $eoxys_rounds) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO results(game, tournament, opponent_name, opponent_rounds, lineup_name, eoxys_rounds, date_creation) VALUES(:game, :tournament, :opponent_name, :opponent_rounds, :lineup_name, :eoxys_rounds, NOW())');

        $req->execute(array(
            'game'=> $game,
            'tournament'=> $tournament,
            'opponent_name'=> $oppenent_name,
            'opponent_rounds'=> $opponent_rounds,
            'lineup_name'=> $lineup_name,
            'eoxys_rounds'=> $eoxys_rounds
        ));
    }
}
