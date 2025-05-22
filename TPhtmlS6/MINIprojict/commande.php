
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commande personnalisée</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Commande personnalisée</h1>
    <nav>
      <a href="index.html">Accueil</a>
      <a href="gallery.html">Galerie</a>
      <a href="contact.php">Contact</a>
      <a href="commande.php">Commande</a>
    </nav>
  </header>

  <section class="contact-form">
    <form action="envoyer_commande.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Votre nom" required>
      <input type="email" name="email" placeholder="Votre email" required>
      <input type="text" name="dimensions" placeholder="Dimensions du mur (ex: 2m x 3m)" required>
      <textarea name="description" placeholder="Description du projet artistique..." required></textarea>
      <label>Photo du mur (optionnel)</label>
      <input type="file" name="photo">
      <button type="submit">Envoyer la commande</button>
    </form>
  </section>

  <footer>
    &copy; 2025 Murales Artistiques
  </footer>
</body>
</html>