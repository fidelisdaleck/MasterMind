<?php

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$Adresse = htmlspecialchars($_POST["Adresse"]);
$Ville = htmlspecialchars($_POST["Ville"]);
$code = htmlspecialchars($_POST["Code"]);

echo "<h1>Adresse Client</h1>";
echo "<table>";

echo "<tr><td>Nom</td><td>".$nom. "</td></tr>";
echo "<tr><td>Prenom</td><td>".$prenom. "</td></tr>";
echo "<tr><td>Adresse</td><td>".$Adresse. "</td></tr>";
echo "<tr><td>Ville</td><td>".$Ville. "</td></tr>";
echo "<tr><td>Code</td><td>".$code. "</td></tr>";
echo "</table>";

?>