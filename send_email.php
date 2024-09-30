<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suggestion = $_POST['suggestion'];

    $to = 'szkolny.samorzad24@gmail.com'; // Twój adres e-mail
    $subject = 'Nowa anonimowa sugestia';
    $message = "Sugestia: $suggestion";
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com';

    mail($to, $subject, $message, $headers);
    echo "Dziękujemy za Twoją sugestię!";
}
?>
