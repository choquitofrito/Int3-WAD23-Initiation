<?php

// Array associatif (index "texte")

// Création
$eleve = [
    'prenom' => 'Laurence',
    'nom' => 'Dupont',
    'hobby' => 'lire',
];

print_r($eleve);

// Accéder à un élément
print($eleve['nom']);
// print($eleve[1]); // erreur, l'index 1 n'existe pas

// Effacer un élément
unset ($eleve['hobby']);
print_r($eleve);

// mode deprim
// $eleve['prenom'] = null;
// print_r($eleve);

// Rajouter un élément
$eleve['salaire'] = 90000000;
print_r($eleve);

print_r(array_keys($eleve));

print_r(array_values($eleve));


