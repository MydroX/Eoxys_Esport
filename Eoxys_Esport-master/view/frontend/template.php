<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Official Website of Eoxys E-Sport">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/images/icon_eoxys.png" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/<?= $css ?>">
        <title><?= $title ?></title>
    </head>

    <body>
        <header>
            <img src="public/images/logo-large.png" alt="Logo Eoxys E-Sport" id="logo"/>
            <nav class="normal-menu">
                <ul>
                    <li><a href="?here=home">Home</a></li>
                    <li><a href="?here=news&page=1">News</a></li>
                    <li><a href="?here=teams">Teams</a></li>
                    <li><a href="?here=recruitment">Recruitment</a></li>
                    <li><a href="?here=partners">Partners</a></li>
                    <li><a href="?here=contact">Contact</a></li>
                </ul>
            </nav>

            <nav class="dropdown-menu">
                <div class="dropdown">
                    <button class="dropdown-button">Menu</button>
                    <div class="dropdown-content">
                        <a href="?here=home">Home</a>
                        <a href="?here=news&page=1">News</a>
                        <a href="?here=teams">Teams</a>
                        <a href="?here=recruitment">Recruitment</a>
                        <a href="?here=partners">Partners</a>
                        <a href="?here=contact">Contact</a>
                    </div>
                </div>
            </nav>

        </header>

        <?= $content ?>

        <script src="public/js/navHeader.js"></script>
    </body>

</html>
