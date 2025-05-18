<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ton adresse e-mail
    $to = "lantonirina1912909@gmail.com";

    // Sujet du mail
    $subject = "Nouveau message depuis ton site web";

    // Contenu du mail
    $body = "Nom: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // En-têtes
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci ! Votre message a été envoyé.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
}
?>