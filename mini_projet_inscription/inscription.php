<?php


session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    if (empty($nom)) {
        echo "Erreur, nom vide <br>";
    } else {
        echo "Nom valide" . htmlspecialchars($nom) . "<br>";
    }

    if (empty($email)) {
        echo "Erreur : email vide. <br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide <br> ";
    } else {
        echo "Email valide : " . htmlspecialchars($email) . "<br>";
    }


    if (empty($password)) {
        echo "Erreur rentre un mot de passe <br>";
    } elseif (strlen($password) < 8) {

        echo "Erreur : Le mot de passe doit contenir au moins 8 caracteres";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo "mot de passe ok <br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page inscription</title>
</head>

<body>
    <h2>Page inscription</h2>

    <?php
    if (isset($_GET['event'])) {
        $event = htmlspecialchars($_GET['event']);
        echo "Vous aller vous inscrir à : " . $_GET['event'];
    }
    ?>
    <form methode="post">
        Votre nom : <input type="text" name="nom" required>
        <br>
        Email : <input type="email" name="email" required>
        <br>
        Mot de passe : <input type="password" name="password" required>
        <br>
        <button type="submit">Inscription</button>
    </form>
</body>

</html>