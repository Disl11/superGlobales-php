<?php
// http://localhost/superGlobales-php/exo1_get_server/exercice.php?ville=Montpellier&pays=FRANCE

print_r($_GET);

echo "<br>";
echo "Methode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Nom Scripte : " . $_SERVER['PHP_SELF'] . "<br>";
