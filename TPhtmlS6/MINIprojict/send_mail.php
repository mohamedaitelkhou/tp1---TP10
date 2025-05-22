<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "mohamedaitelkh266@gmail.com";
  $subject = "Message du site Murales Artistiques";
  $name = strip_tags($_POST["name"]);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $message = htmlspecialchars($_POST["message"]);

  $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message envoyé avec succès.";
  } else {
    echo "Erreur lors de l'envoi du message.";
  }
}
?>