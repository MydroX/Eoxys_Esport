<?php
require('controller/frontend.php');
require('controller/adminSide.php');
require('controller/backend.php');

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

        else if($_GET['here'] == 'reception') {
            if(isset($_FILES['image']) && isset($_POST['title']) && isset($_POST['newsText']))
                receptionNews($_FILES['image'], $_FILES['small-image'], $_POST['title'], $_POST['newsText']);

            else if(isset($_POST['game']) && isset($_POST['tournament']) && isset($_POST['opponent-name']) && isset($_POST['opponent-rounds']) && isset($_POST['lineup-name']) && isset($_POST['eoxys-rounds']))
                receptionResults($_POST['game'], $_POST['tournament'], $_POST['opponent-name'], $_POST['opponent-rounds'], $_POST['lineup-name'], $_POST['eoxys-rounds']);

            else {
                throw new Exception("Transfer Failed");
            }
        }

        else if($_GET['here'] == 'email-reception') {
            if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                sendEmail($_POST['email'], $_POST['subject'], $_POST['message']);
            }
            else
                throw new Exception("Error with the Email");
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
