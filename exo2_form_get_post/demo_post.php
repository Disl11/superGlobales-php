<!-- http://localhost/superGlobales-php/exo2_form_get_post/demo_post.php -->

<form method="post">
    Email : <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_POST['email'])) {
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}
?>