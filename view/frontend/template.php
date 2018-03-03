<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site officiel de la structure Eoxys Esport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/<?= $css ?>">
        <title><?= $title ?></title>
    </head>

    <body>
        <header>
            <img src="public/images/logo-large.png" alt="Logo Eoxys Esport" id="logo"/>
            <nav>
                <ul>
                    <li><a href="?here=home">Accueil</a></li>
                    <li><a href="?here=news">News</a></li>
                    <li><a href="?here=teams">Equipe</a></li>
                    <li><a href="?here=recruitment">Recrutement</a></li>
                    <li><a href="?here=partners">Partenaires</a></li>
                    <li><a href="?here=contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <?= $content ?>

        <script src="public/js/navHeader.js"></script>
    </body>

</html>
