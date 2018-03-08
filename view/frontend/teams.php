<?php $title = 'Eoxys Esport - Equipes'; ?>
<?php $css = 'teams.css'; ?>

<?php ob_start(); ?>

<section>
    <div class="game-box hidePlayers" id="Fortnite">
        <h2 class="game-name">Fortnite</h2>
        <img src="public/images/arrow_down.png" alt="fleche vers le bas" class="arrow-down"/>
        <div class="team-box hide-box one-team">
            <div class="lineup">
                <h3>Eoxys Esport</h3>
                <ul class="players">
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="game-box hidePlayers" id="RL">
        <h2 class="game-name">Rocket League</h2>
        <img src="public/images/arrow_down.png" alt="fleche vers le bas" class="arrow-down"/>
        <div class="team-box hide-box one-team">
            <div class="lineup">
                <h3>Eoxys Esport</h3>
                <ul class="players">
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="game-box hidePlayers" id="LOL">
        <h2 class="game-name">League of Legends</h2>
        <img src="public/images/arrow_down.png" alt="fleche vers le bas" class="arrow-down"/>
        <div class="team-box hide-box one-team">
            <div class="lineup">
                <h3>Eoxys Esport</h3>
                <ul class="players">
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="game-box hidePlayers" id="SC2">
        <h2 class="game-name">StarCraft 2</h2>
        <img src="public/images/arrow_down.png" alt="fleche vers le bas" class="arrow-down"/>
        <div class="team-box hide-box one-team">
            <div class="lineup">
                <h3>Eoxys Esport Orangesucree</h3>
                <ul class="players">
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                    <li>
                        <img src="public/images/question-mark.png" alt="Photo joueur" class="player-image"/>
                        <p class="player-name">player name</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="public/js/teams.js"></script>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
