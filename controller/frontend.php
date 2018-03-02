<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');

function home() {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $resultsManager = new \Eoxys_Esport\model\ResultsManager();

    require ('view/frontend/home.php');
}
