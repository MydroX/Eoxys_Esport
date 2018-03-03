<?php $title = 'Eoxys Esport - Accueil'; ?>
<?php $css = 'home.css'; ?>

<?php ob_start(); ?>

<div id="featured-news">
    <?php
    while ($data = $newsHome->fetch()) {
        ?>
            <h1><?php echo $data['title']?></h1>
        <?php
    }
     ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
