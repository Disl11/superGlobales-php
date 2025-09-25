<?php
session_start();

if(!isset($_SESSION['user']) && !esset($_SESSION['email'])){
    header("Location: inscription.php");
    exit;
}

if(isset($_POST['logout'])){
    $_SESSION = [];
    session_destroy();
    
    header("Location: index.php");
    exit;
}

setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

$last_visit = "";
if (isset($_COOKIE["last_visit"])) {
    $last_visit = $_COOKIE['last_visit'];
}

$nom = htmlspecialchars($_SESSION['user']);
$email = htmlspecialchars($_SESSION['email']);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
</head>

<body>
<h2>Profil</h2>
<p>Votre nom : <?= $nom ?></p>
<p>Email : <?= $email ?>  </p>
<p>Dernier visite : <?= $last_visit ?></p>
<form method="post">
    <button type="submit" name="logout">Deconnexion</button>
</form>

</body>

</html>