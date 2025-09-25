<!-- http://localhost/superGlobales-php/exo4_sessions_cookies/demo.php -->

<?php

session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "Pedri";
}

setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

echo "Bonjour" . $_SESSION['user'] . "<br>";

if (isset($_COOKIE['last_visit'])) {
    echo "Derniére visite : " . $_COOKIE['last_visit'];
}
