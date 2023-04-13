<?php

// Array indexé (index numérique)

// Création 
$tab = [4, 5, 6, 10]; // prémier index est 0
$tab2 = array(10, 20, 30); // ancienne façon

// Accéder à un élément (ex: afficher)
print($tab[1]);

// Ajouter un élément
// 1. Ajouter à la fin
$tab[] = 99;

print("\n");
print_r($tab);

// 2. Ajouter en spécifiant l'index
$tab[5] = 100;
print_r($tab);

$tab[9] = 2000;
print_r($tab);

// Effacer un élément
unset($tab[9]);
print_r($tab);

// Modifier/remplacer un élément
$tab[3] = 20000;
print_r($tab);


