<?php $title = 'Eoxys Esport - ADMIN ACCESS'; ?>
<?php $css = 'signIn.css'; ?>

<?php ob_start(); ?>

<section>
    <div id="form">
        <h1>Connexion admin</h1>
        <form action="?here=adminSide" method="post">
            <span>Choisir l' ajout (obligatoire) :</span>
            <select required name="side">
                <option value="results" >Ajout d' un résultat</option>
                <option value="news" >Ajout d' une news</option>
            </select><br />
            <div class="toFill">
                <span>Nom d'utilisateur : </span><input type="text" name="username" /><br />
                <span>Mot de passe : </span><input type="password" name="password" />
            </div>
            <div class="button"><input type="submit" value="Valider" class="submitButton"/></div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
