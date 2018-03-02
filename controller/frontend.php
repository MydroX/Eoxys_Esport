<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');

function home() {
    $newsManager = new \Eoxys_Esport\model\getNewsHome();
    $resultsManager = new \Eoxys_Esport\model\getResultsHome();

    require ('view/frontend/home.php');
}
