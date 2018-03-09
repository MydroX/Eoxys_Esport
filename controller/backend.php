<?php

function sendEmail($userEmail, $subjectToSend, $textToSend) {
    $to = 'contact@eoxys-esport.com';
    $subject = htmlspecialchars($subjectToSend);
    $from = htmlspecialchars($userEmail);

    $hearders = 'MINE-Version 1.0' . "\r\n";
    $hearders .= 'Content-type: text/html; charset=ISO-8859-1' . "\r\n";
    $hearders .= 'To:'.$to."\r\n";
    $hearders .= 'From:'.$from."\r\n";
    $hearders .= 'Object:'.$subject."\r\n";

    $message = htmlspecialchars($textToSend);

    mail($to, $subject, $message, $hearders);

    require('view/frontend/feedbackEmail.php');
}
