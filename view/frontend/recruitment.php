<?php $title = 'Eoxys Esport - Recrutement'; ?>
<?php $css = 'recruitment.css'; ?>

<?php ob_start(); ?>

<section id="form">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe5AzyuBaG2asP8uz3YZJeJ7otHEN_ffQje2hk5oviHawkp2A/viewform?embedded=true" width="760" height="850" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
