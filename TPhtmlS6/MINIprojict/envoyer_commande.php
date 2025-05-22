
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "votre-email@exemple.com";
  $subject = "Nouvelle commande personnalisée";

  $name = strip_tags($_POST["name"]);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $dimensions = htmlspecialchars($_POST["dimensions"]);
  $description = htmlspecialchars($_POST["description"]);

  $body = "Nom: $name\nEmail: $email\nDimensions: $dimensions\n\nDescription:\n$description\n";

  $headers = "From: $email";

 
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    $tmp_name = $_FILES['photo']['tmp_name'];
    $filename = basename($_FILES['photo']['name']);
    $destination = "uploads/$filename";
    move_uploaded_file($tmp_name, $destination);
    $body .= "\nPhoto envoyée: $filename";
  }

  mail($to, $subject, $body, $headers);
  echo "Commande envoyée avec succès. Merci";
}
?>