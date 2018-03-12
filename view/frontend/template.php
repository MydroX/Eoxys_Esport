<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site officiel de la structure Eoxys Esport">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/images/icon_eoxys.png" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/<?= $css ?>">
        <title><?= $title ?></title>
    </head>

    <body>
        <header>
            <img src="public/images/logo-large.png" alt="Logo Eoxys Esport" id="logo"/>
            <nav class="normal-menu">
                <ul>
                    <li><a href="?here=home">Accueil</a></li>
                    <li><a href="?here=news&page=0">News</a></li>
                    <li><a href="?here=teams">Equipe</a></li>
                    <li><a href="?here=recruitment">Recrutement</a></li>
                    <li><a href="?here=partners">Partenaires</a></li>
                    <li><a href="?here=contact">Contact</a></li>
                </ul>
            </nav>

            <nav class="dropdown-menu">
                <div class="dropdown">
                    <button class="dropdown-button">Menu</button>
                    <div class="dropdown-content">
                        <a href="?here=home">Accueil</a>
                        <a href="?here=news&page=0">News</a>
                        <a href="?here=teams">Equipe</a>
                        <a href="?here=recruitment">Recrutement</a>
                        <a href="?here=partners">Partenaires</a>
                        <a href="?here=contact">Contact</a>
                    </div>
                </div>
            </nav>

        </header>

        <?= $content ?>

        <script src="public/js/navHeader.js"></script>
    </body>

</html>
