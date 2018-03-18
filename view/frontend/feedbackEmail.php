<?php $title = 'Eoxys E-Sport - Contact'; ?>

<?php ob_start(); ?>

<section style="margin: auto; width: 70%; font-size: 22px; padding: 50px;">
    <p>
        The email has been sent correctly. If you want to return to home page, click <a href="?here=home" style="color: #050226">here</a>
    </p>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
