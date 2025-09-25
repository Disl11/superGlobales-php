<!-- http://localhost/superGlobales-php/exo2_form_get_post/demo_get.php -->

<form method="get">
    Nom : <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_GET['nom'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']);
}
?>