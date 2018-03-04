<?php $title = 'Eoxys Esport - Accueil'; ?>
<?php $css = 'home.css'; ?>

<?php ob_start(); ?>

<section>
    <?php
    while ($data = $featureNewsHome->fetch()) {
        ?>
        <a href="?here=news">
            <div id="slideshow">
                <div class="featured-img" style="background-image: url(public/uploads/<?= $data['imagePath'] ?>)"></div>
                <div class="content">
                    <div class="con">
                        <div class="article-title">
                            <h1><?php echo $data['title']?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <?php
        }
    ?>
</section>

<section>
    <div id="results" class="wrapper">
        <div class="text">
            <h2>Derniers résultats</h2>
        </div>
        <div class="scoreboard">
            <div class="matches-box">
                <?php
                while ($data = $resultsHome->fetch()) {
                    ?>
                    <div class="match">
                        <div class="left">
                            <span class="game"><?= $data['game'] ?></span><br />
                            <span class="tournament"><?= $data['tournament'] ?></span><br />
                            <span class="date"><?= $data['date_fr'] ?></span><br />
                        </div>
                        <div class="right">
                            <span class="score">Eoxys Esport <?= $data['eoxys_rounds']; ?>-<?= $data['opponent_rounds'] ?> <?= $data['opponent_name'] ?></span>
                        </div>
                    </div><?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Partners soon -->

<section>
    <div id="news" class="wrapper">
        <h2>Dernières actualités</h2>
        <ul>
            <?php
            while ($data = $homeNewsTickets->fetch()) {
                ?>
                <li class="ticket">
                    <div class="background" style="background: linear-gradient(to top, transparent, #08043a),  url(public/uploads/<?= $data['imagePathSmall'] ?>)"></div>
                    <div class="tickets-title">
                        <span><?= $data['title'] ?></span>
                    </div>
                    <a href="?here=news?id=<?= $data['id'] ?>">
                        <div class="arrow">
                            <i class="right-arrow"></i>
                        </div>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>

<section>
    <div id="presentation">
        <div class="wrapper">
            <h2>Présentation</h2>
            <div class="text">
                <p>
                    Eoxys Esport est une association multigaming, prochainement sous loi 1901, nos objectif sont d' avoir, dans un futur proche, des équipes et des joueurs compétitifs pour que l'association puisse faire partis des structures représentative de l'e-sport francophone sur plusieurs jeux, tels que League of Legends, Hearthstone, Overwatch, Rocket League, Fortnite et Rainbow Six Siege.
                </p>
                <p>
                    L'association forme et accueil, des joueurs de tout niveau et à l'international et faisons en sorte qu' Eoxys Esport corresponde le mieux possible à eux, grâce à notre organisation et notre structure, afin qu'ils puissent travailler et performer dans les meileures conditions qu'ils soient.
                </p>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
