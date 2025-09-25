<?php

    session_start();

    $nomErr = "";
    $emailErr = "";
    $passwordErr = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

  
    if (empty($nom)) {
        $nomErr = "Erreur, nom vide <br>";
    }


    if (empty($email)) {
        $emailErr = "Erreur : email vide. <br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email invalide <br> ";
    }


    if (empty($password)) {
        $passwordErr = "Erreur rentre un mot de passe <br>";
    } elseif (strlen($password) < 8) {
        $passwordErr = "Erreur : Le mot de passe doit contenir au moins 8 caracteres <br>";
    } 

    if ( !empty($nom) && !empty($email) ){
        $_SESSION['user'] = $nom;
        $_SESSION['email'] = $email;

        header("Location: profil.php");
        exit;
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
    <form method="post">
        <label for="nom"> Votre nom :</label>
        <br>
        <input type="text" name="nom" >
        <p><?= $nomErr ?></p>
     
        <label for="email"> Email :</label> 
        <br>
        <input type="email" name="email" >
        <p><?= $emailErr ?></p>
     
        <label for="password"> Mot de passe :</label> 
        <br>
        <input type="password" name="password" >
        <p><?= $passwordErr ?></p>
        
        <button type="submit">Inscription</button>
    </form>
</body>

</html>