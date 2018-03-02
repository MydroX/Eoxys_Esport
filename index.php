<?php
require('controller/frontend.php');

try {
    home();
}

catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
