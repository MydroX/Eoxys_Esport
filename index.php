<?php
require('controller/frontend.php');

try {
    if(isset($_GET['here'])) {
        if($_GET['here'] == 'home')
            home();

        else if($_GET['here'] == 'news')
            news();

        else if($_GET['here'] == 'teams')
            teams();

        else if($_GET['here'] == 'recruitment')
            recruitment();

        else if($_GET['here'] == 'partners')
            partners();

        else if($_GET['here'] == 'contact')
            contact();

        else
            throw new Exception("Error Processing HttpRequest");

    }

    else
        home();

}

catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
