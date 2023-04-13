<?php

// boucle pour afficher les valeurs de 20 à 30
// (while)

$i = 20;  // 1. Initialisation
while ($i <= 30) {  // 2. Condition  
    print($i . "\n");
    $i++;  // 3. Changement des variables de la condition (incrémentation d'un compteur)
}

// $i = $i + 1; ------> $i++;
// $i = $i + 5; ------> $i+=5;

// 1. Initialisation ($i = 20)
// 2. Condition ($i <= 30)
// 3. Changement des variables de la condition (incrémentation d'un compteur) ($i++)
for ($i = 20; $i <= 30; $i+=2){
    print($i . "\n");
}


// $somme = 0;

// $somme = $somme + 1;
// $somme = $somme + 2;
// $somme = $somme + 3;
// $somme = $somme + 4;
// .
// .
// print ($somme)

// afficher la somme des valeurs entre 1 et 5;
$somme = 0;
for ($i = 1; $i < 5; $i++) {
    $somme = $somme + $i;
}
print ($somme);

