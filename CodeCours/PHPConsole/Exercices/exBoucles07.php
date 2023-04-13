<?php


$nombreValeurs = readline("Tapez le nombre de valeurs à multiplier: ");

$multip = 1;

for ($i = 0; $i < $nombreValeurs; $i++){
    $val = readline("Tapez une valeur: ");
    $multip = $multip * $val;

}
print ("\nLe résultat est: " . $multip);
