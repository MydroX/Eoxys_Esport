<?php $title = 'Eoxys E-Sport - News'; ?>
<?php $css = 'displayTicket.css'; ?>

<?php ob_start(); ?>

<section>
    <?php
        while($data = $newsTicketsDisplay->fetch()) {
            ?>
            <div id="news" class="image" style="background-image: url(public/uploads/<?= $data['imagePath'] ?>)">
                <div class="wrapper">
                    <h2><?= $data['title'] ?></h2>
                    <div class="text">
                        <?= $data['newsText'] ?>
                    </div>
                    <span class="date"><?= $data['date_fr'] ?></span>
                </div>
            </div>
            <?php
        }
    ?>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
