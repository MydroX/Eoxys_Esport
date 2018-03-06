<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');

function signIn() {
    require ('view/admin/signIn.php');
}

function signInAddResults() {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $resultsManager = new \Eoxys_Esport\model\ResultsManager();

    require ('view/admin/results.php');
}

function signInAddNews() {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $resultsManager = new \Eoxys_Esport\model\ResultsManager();

    require ('view/admin/news.php');
}
