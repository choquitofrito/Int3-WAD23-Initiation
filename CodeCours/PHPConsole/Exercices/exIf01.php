<?php

$longueur = readLine ("Tapez la longueur de la chambre (m): ");
$largeur = readLine ("Tapez la largeur de la chambre (m): ");
$surface = $longueur * $largeur;

print ("\nLa surface de la chambre est de : " . $surface . " m2");

if ($longueur == $largeur) {
    print ("\nLa chambre est carrée");
}