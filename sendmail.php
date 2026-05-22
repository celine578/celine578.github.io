<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $bericht = htmlspecialchars($_POST['subject']);

    $ontvanger = "keetceline@gmail.com";
    $onderwerp = "Nieuw bericht via website van: $naam";

    $inhoud = "Naam: $naam\n";
    $inhoud .= "E-mail: $email\n\n";
    $inhoud .= "Bericht:\n$bericht";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($ontvanger, $onderwerp, $inhoud, $headers)) {
        echo "Bericht is verzonden!";
    } else {
        echo "Er ging iets mis.";
    }
}
?>