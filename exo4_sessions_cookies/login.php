<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);

    // condition si usernam est pas vide , sauvegarder dans la seesion l'utilisateur 
    if (!empty($username)) {
        $_SESSION['user'] = $username;

        //redirige
        header("Location: profil.php");
        exit;
    } else {
        $error = "Veuillez entrer un nom d'utilisateur";
    }
}
?>


<!-- http://localhost/superGlobales-php/exo4_sessions_cookies/login.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h2>Page Connexion</h2>
    <form method="post">
        Username : <input type="text" name="username">
        <button type="submit">Se connecter</button>
    </form>


</body>

</html>