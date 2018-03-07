<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');
require_once ('model/NewsReceptionManager.php');

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

function receptionNews($uploadedImageSmall, $uploadedImageLarge, $title, $text) {
        $receptionManager = new \Eoxys_Esport\model\receptionManager();
        $reception = $receptionManager->addNews($uploadedImageSmall, $uploadedImageLarge, $title, $text);

    require ('view/admin/addNews.php');
}
