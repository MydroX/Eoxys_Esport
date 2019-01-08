<?php $title = 'Eoxys Esport - ADMIN ACCESS'; ?>
<?php $css = 'resultsAdmin.css'; ?>

<?php ob_start(); ?>

<section>
    <div class="wrapper">
        <form method="post" action="?here=reception">
            <label>Selectionner un jeu : </label>
            <select name="game" class="float-left">
                <option>Course automobile</option>
                <option>CS:GO</option>
                <option>Hearthstone</option>
                <option>League of Legends</option>
                <option>Overwatch</option>
                <option>Paladins</option>
                <option>Rainbow Six Siege</option>
                <option>Rocket League</option>
                <option>Fortnite</option>
            </select><br />

            <label>Nom du tournoi : </label>
            <input type="text" name="tournament"/><br />

            <span>Eoxys Esport</span>
            <label>Nom de la line up : </label>
            <input type="text" name="lineup-name"/><br />

            <label>Score Eoxys : </label>
            <input type="text" name="eoxys-rounds"/><br />

            <label>Nom des adversaires : </label>
            <input type="text" name="opponent-name"/><br />

            <label>Score adversaires : </label>
            <input type="text" name="opponent-rounds"/><br />

            <button type="submit" value="Envoyer" id="submit-button">Envoyer</button>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
