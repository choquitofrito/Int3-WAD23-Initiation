<?php

$fruits = ['citron', 'orange', 'fraise', 'mango'];

// print ($fruits[0]);
// print ($fruits[1]);
// print ($fruits[2]);
// print ($fruits[3]);
// etc...

for ($i = 0; $i < 4; $i++) {
    print("\n" . $fruits[$i]);
}

$voiture = [
    'marque' => 'Renault',
    'modele' => '5 copa',
    'vitesse' => 120,
    'nouvelle' => 'non'
];

// ce ne fonctionnera pas car les indexes numériques n'existent pas
// for ($i = 0; $i < 4; $i++) {
//     print("\n" . $voiture[$i]);
// }

print ("\n\n".$valeur);
foreach ($voiture as $cle => $valeur){
    print ("\n". $cle . " ----> " . $valeur);
}

// seulement les valeurs, peu importe le nom de la variable 
foreach ($voiture as $coucou){
    print ("\n". $coucou);
}

// seulement les clés 
foreach ($voiture as $cle => $valeur){
    print ("\n". $cle);
}
