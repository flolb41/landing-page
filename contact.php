 
<?php
if (isset($_POST['message'])) {
    $message = "Message envoyé via la page contact du site elagage.com
    Nom: " . $_POST['name'] . "
    Email: " . $_POST['email'] . "
    Ville: " . $_POST['city'] . "
    Message: " . $_POST['message'];

    $retour = mail("leblanc.florian41@gmail.com", $_POST["sujet"], $message,
        "From:contact@monsite.fr" . "\r\n" . "Reply-To: " . $_POST["email"]);
    if ($retour) {
        echo "<p>Votre message a bien été envoyé !</p>";
    } else {
        echo "<p>Une erreur est survenue, veuillez réessayer plus tard.</p>";
    }
} 
?>