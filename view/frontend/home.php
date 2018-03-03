<?php $title = 'Eoxys Esport - Accueil'; ?>
<?php $css = 'home.css'; ?>

<?php ob_start(); ?>

    <?php
    while ($data = $newsHome->fetch()) {
        ?>
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

        <?php
        }
        ?>

<div id="results" class="wrapper">
    <div class="text">
        <h2>Résultat</h2>
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

                    </div>
                </div><?php
            }
            ?>
        </div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
