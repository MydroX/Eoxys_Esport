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

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
