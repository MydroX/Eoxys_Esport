<?php $title = 'Eoxys E-Sport - Partners'; ?>
<?php $css = 'partners.css'; ?>

<?php ob_start(); ?>

<section>
    <div class="wrapper">
        <div class="head-partners">
            <h1>Partners</h1>
            <a href="?here=contact">Become a partner</a>
        </div>

        <div>
            <div class="company">
                <div class="left">
                    <h2>Your company name</h2>
                    <p>
                        Your company description
                    </p>
                    <a href="?here=partners">Visit website</a>
                </div>
                <div class="right">
                    <div style="border: 1px solid blue; height: 128px; width: 128px; margin-top: 46px;">
                        Your company logo
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
