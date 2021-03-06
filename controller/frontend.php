<?php

require_once ('model/NewsManager.php');
require_once ('model/ResultsManager.php');

function home() {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $resultsManager = new \Eoxys_Esport\model\ResultsManager();

    $featureNewsHome = $newsManager->getFeaturedNewsHome();
    $homeNewsTickets = $newsManager->getHomeNewsTickets();
    $resultsHome = $resultsManager->getResultsHome();

    require ('view/frontend/home.php');
}

function news($page) {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $newsNewsTickets = $newsManager->getNewsNewsTickets($page);
    $numberOfPages = $newsManager->getNumberOfPages();

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

function displayTicket($idNews) {
    $newsManager = new \Eoxys_Esport\model\NewsManager();
    $newsTicketsDisplay = $newsManager->getNewsTicketsDisplay($idNews);

    require ('view/frontend/displayTicket.php');
}
