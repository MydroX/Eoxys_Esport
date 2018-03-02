<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');

function home() {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $resultsManager = new \Eoxys_Esport\model\ResultsManager();

    require ('view/frontend/home.php');
}

function news() {

    require ('view/frontend/news.php');
}

function teams() {

    require ('view/frontend/teams.php');
}

function recruitment() {

    require ('view/frontend/recruitment.php');
}

function partners() {

    require ('view/frontend/partners.php');
}

function contact() {

    require ('view/frontend/contact.php');
}
