<?php $title = 'Eoxys Esport - Contact'; ?>
<?php $css = 'contact.css'; ?>

<?php ob_start(); ?>

<section class="wrapper">
    <div class="left">
        <h1>Contactez nous</h1>
        <form method="post" action="?here=email-reception">
            <input type="email" name="email" placeholder="Email" required/><br />
            <input type="text" name="subject" placeholder="Objet" required/><br />
            <textarea placeholder="Message" name="message" cols="60" rows="10" required/></textarea><br />
            <button type="submit">Envoyer</button>
        </form>
    </div>
    <div class="right">
        <h1>Informations</h1>
        <p>Mail : contact@eoxys-esport.com</p>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
