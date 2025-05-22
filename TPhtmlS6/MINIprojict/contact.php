
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>Contact</h1>
    <nav>
      <a href="index.html">Accueil</a>
      <a href="gallery.html">Galerie</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="contact-form">
    <form action="send_mail.php" method="POST">
      <input type="text" name="name" placeholder="Votre nom" required>
      <input type="email" name="email" placeholder="Votre email" required>
      <textarea name="message" placeholder="Votre message..." required></textarea>
      <button type="submit">Envoyer</button>
    </form>
  </section>

  <footer>
    &copy; 2025 Murales Artistiques
  </footer>
</body>
</html>
