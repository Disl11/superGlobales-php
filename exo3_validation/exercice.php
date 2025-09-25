<!-- http://localhost/superGlobales-php/exo3_validation/exercice.php -->

<form method="post">
    Nom : <input type="text" name="nom">
    <br>
    Email : <input type="text" name="email">
    <br>
    Votre age : <input type="age" name="age">
    <br>
    <button type="submit">Envoyer</button>
</form>

<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = trim($_POST['nom']);
    if (empty($nom)) {
        echo "Erreur, entre votre nom <br>";
    } else {
        echo "Bonjour " . htmlspecialchars($nom) . "<br>";
    }

    $email = trim($_POST['email']);
    if (empty($email)) {
        echo "Erreur : email vide. <br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : email invalide. <br>";
    } else {
        echo "Email Valide : " . htmlspecialchars($email) . "<br>";
    }

    $age = trim($_POST['age']);
    if (empty($age)) {
        echo "Erreur : age vide <br>";
    } elseif (!ctype_digit($age)) {
        echo "Erreur : veuillez entre un age ! <br>";
    } else {
        echo "Votre age est : " . $age . "<br>";
    }
}
