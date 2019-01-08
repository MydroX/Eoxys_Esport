<?php $title = 'Eoxys Esport - ADMIN ACCESS'; ?>
<?php $css = ''; ?>

<?php ob_start(); ?>
<section style="margin: auto; width: 70%; font-size: 22px; padding: 50px;">
    <p>
        La news ou le résultat a correctement été envoyer. Pour retourner au home cliquez <a href="?here=home" style="color: #050226">ici</a>
    </p>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
