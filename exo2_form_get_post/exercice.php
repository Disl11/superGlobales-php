<!-- http://localhost/superGlobales-php/exo2_form_get_post/exercice.php -->


<h3>Version POST</h3>
<form method="post">
    Nom : <input type="text" name="nom">
    <br>
    Email : <input type="email" name="email">
    <br>
    <button type="submit">Envoyer</button>
</form>
<?php
//version Post

if (!empty($_POST['nom'])) {
    echo "Bonjour " . htmlspecialchars($_POST['nom']) . "<br>";
}

if (!empty($_POST['email'])) {
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}

?>

<h3>Version GET</h3>

<form method="GET">
    Nom : <input type="text" name="nom">
    <br>
    Email : <input type="email" name="email">
    <br>
    <button type="submit">Envoyer</button>
</form>
<?php

//version get 
if (!empty($_GET['nom'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']) . "<br>";
}

if (!empty($_GET['email'])) {
    echo "Ton email est : " . htmlspecialchars($_GET['email']);
}


?>