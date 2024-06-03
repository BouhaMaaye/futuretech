<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);

    $to = "votre-email@example.com";  // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact de $name";
    $body = "Vous avez reçu un nouveau message de contact.\n\n".
            "Nom: $name\n".
            "Email: $email\n".
            "Téléphone: $phone\n".
            "Entreprise: $company\n".
            "Message:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci! Votre message a été envoyé.";
    } else {
        echo "Désolé, il y a eu une erreur lors de l'envoi de votre message. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
