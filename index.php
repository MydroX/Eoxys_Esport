<?php
require('controller/frontend.php');
require('controller/adminSide.php');

try {
    if(isset($_GET['here'])) {
        if($_GET['here'] == 'home')
            home();

        else if($_GET['here'] == 'news') {
                if(isset($_GET['id']))
                    displayTicket($_GET['id']);

                else
                    news();
        }

        else if($_GET['here'] == 'teams')
            teams();

        else if($_GET['here'] == 'recruitment')
            recruitment();

        else if($_GET['here'] == 'partners')
            partners();

        else if($_GET['here'] == 'contact')
            contact();

        else if($_GET['here'] == 'adminSide') {
            if($_GET['here'] == 'adminSide' && isset($_POST['side']))
                if($_POST['side'] == 'results' && $_POST['username'] == 'eoxys' && $_POST['password'] == 'redacteur')
                    signInAddResults();

                else if($_POST['side'] == 'news' && $_POST['username'] == 'eoxys' && $_POST['password'] == 'redacteur')
                    signInAddNews();

                else
                    throw new Exception("Wrong username or password");

            else
                signIn();
        }

    else
        throw new Exception("Error Processing HttpRequest");

    }

    else
        home();

}

catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
