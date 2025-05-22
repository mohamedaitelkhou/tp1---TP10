<?php
$error = isset($_GET['error']) ? $_GET['error'] : null;
$message = '';

if ($error == 1) {
    $message = "Erreur 1 : Veuillez saisir un login et un mot de passe";
} elseif ($error == 2) {
    $message = "Erreur 2 : Erreur de login/mot de passe";
} elseif ($error == 3) {
    $message = "Vous avez été déconnecté du service";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if ($message): ?>
        <p style="color:red;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="validation.php" method="post">
        <label>Login:</label>
        <input type="text" name="login"><br><br>
        <label>Mot de passe:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
