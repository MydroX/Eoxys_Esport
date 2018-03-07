<?php $title = 'Eoxys Esport - ADMIN ACCESS'; ?>
<?php $css = 'newsAdmin.css'; ?>

<?php ob_start(); ?>

<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

<section>
    <div class="wrapper">
        <form method="post" action="?here=reception" enctype="multipart/form-data">
            <div class="title">
                <span>Titre : </span><input type="text" name="title" placeholder="Insérer un titre"/>
            </div>
            <div class="editor">
                <textarea name="newsText"></textarea>
                <script>
                    CKEDITOR.replace( 'newsText' );
                </script>
            </div>
            <div class="bottom">
                <label for="image">Image (1920x1080| .jpg .png .gif | max. 5 Mo) :</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
                <input type="file" name="image" /><br />
                <label for="image">Image (300x300 | .jpg .png .gif | max. 5 Mo) :</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
                <input type="file" name="small-image" /><br />
                <input type="submit" value="Envoyer" id="submit-button">
            </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
