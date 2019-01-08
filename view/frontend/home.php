<?php $title = 'Eoxys E-Sport - Home'; ?>
<?php $css = 'home.css'; ?>

<?php ob_start(); ?>

<section>
    <?php
    while ($data = $featureNewsHome->fetch()) {
        ?>
        <a href="?here=news&id=<?= $data['id'] ?>">
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
            <h2>Latest results</h2>
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
                            <span class="score">Eoxys E-Sport <?= $data['eoxys_rounds']; ?>-<?= $data['opponent_rounds'] ?> <?= $data['opponent_name'] ?></span>
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
        <h2>Lastest news</h2>
        <ul>
            <?php
            while ($data = $homeNewsTickets->fetch()) {
                ?>
                <li class="ticket">
                    <div class="background" style="background: linear-gradient(to top, transparent, #08043a),  url(public/uploads/<?= $data['imagePathSmall'] ?>)"></div>
                    <div class="tickets-title">
                        <span><?= $data['title'] ?></span>
                    </div>
                    <a href="?here=news&id=<?= $data['id'] ?>">
                        <div class="arrow">
                            <i class="right-arrow"></i>
                        </div>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul><
    </div>
</section>

<section>
    <div id="presentation">
        <div class="wrapper">
            <h2>Presentation</h2>
            <div class="text">
                <p>
                    Eoxys Esport is an multigaming association, soon under the french 1901 law. Our objectives are clear : To have players and teams, so that the association integrates among the structures representing the french and international esport in being present on several games, like League of Legends, Hearthstone, Trackmania, Rocket League, Fortnite, Counter Strike and Rainbow Six Siege.
                </p>
                <p>
                    The association trains and welcomes players of all levels even internationaly. We will ensure Eoxys Esport correspond the players as best as possible, thanks to organisation and a solid structure, so that they can train and perform in the best conditions.
                </p>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
