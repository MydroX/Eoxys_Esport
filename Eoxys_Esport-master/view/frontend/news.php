<?php $title = 'Eoxys E-Sport - News'; ?>
<?php $css = 'news.css' ?>

<?php ob_start(); ?>

<section id="news" class="wrapper">
    <ul>
        <?php
        while($data = mysqli_fetch_array($newsNewsTickets)) {
            ?>
                <li class="ticket">
                    <div class="background" style="background: linear-gradient(to top, transparent, #08043a),  url(public/uploads/<?= $data['imagePathSmall'] ?>)"></div>
                    <div class="tickets-title">
                        <span><?= $data['title'] ?></span>
                    </div>
                    <a href="?here=news&id=<?= $data['id'] ?>">
                        <div class="arrow">
                            <i class="right-arrow"></i>
                        </div>
                    </a>
                </li>
            <?php
        }
        ?>
    </ul>

    <div class="page-number">
        <?php
            for($page = 1 ; $page <= $numberOfPages ; $page++) {
                if($page == 1)
                    echo '<a href="?here=news&page=' . $page . '">' . $page . '</a>';

                else
                    echo '<span> - </span><a href="?here=news&page=' . $page . '">' . $page . '</a>';
            }
        ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
