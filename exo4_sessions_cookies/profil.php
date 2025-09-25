<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

$last_visit = "";
if (isset($_COOKIE["last_visit"])) {
    $last_visit = $_COOKIE['last_visit'];
}

$username = htmlspecialchars($_SESSION['user']);

?>

<!-- http://localhost/superGlobales-php/exo4_sessions_cookies/profil.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <h2>Page Profil</h2>

    <p>Bonjour <?= $username ?> </p>
    <p>Dernier visite : <?= $last_visit ?></p>
</body>

</html>