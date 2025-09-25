<!-- http://localhost/superGlobales-php/exo3_validation/demo.php -->

<form method="post">
    Email : <input type="text" name="email">
    <button type="submit">OK</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    if (empty($email)) {
        echo "Erreur : email vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : email invalide.";
    } else {
        echo "Email Valide : " . htmlspecialchars($email);
    }
}
