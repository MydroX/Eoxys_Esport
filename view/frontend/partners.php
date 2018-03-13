<?php $title = 'Eoxys Esport - Partenaires'; ?>
<?php $css = 'partners.css'; ?>

<?php ob_start(); ?>

<section>
    <div class="wrapper">
        <div class="head-partners">
            <h1>Partenaires</h1>
            <a href="?here=contact">Devenez partenaire</a>
        </div>

        <div>
            <div class="company">
                <div class="left">
                    <h2>Votre nom de société</h2>
                    <p>
                        Description de votre société
                    </p>
                    <a href="?here=partners">Visitez le site</a>
                </div>
                <div class="right">
                    <div style="border: 1px solid blue; height: 128px; width: 128px; margin-top: 46px;">
                        Votre logo
                    </div>
                    <!--<img alt="logo société"/>-->
                </div>
            </div>

            <!-- Insert other companies -->
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
