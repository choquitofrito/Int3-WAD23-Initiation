<?php

// Demander 5 noms 
// à chaque fois que l'utilisateur saisit un nom, on doit afficher 3 fois le message
// "Bonjour, <nom>" 

for ($i = 0; $i < 5; $i++){
    $nom = readline("Tapez un nom: ");
    for ($j = 0; $j < 3; $j++){
        print ("\nBonjour " . $nom);
    }
    print ("\n");
}



$i = 0;
while ($i < 5){
    $i++;
    $nom = readLine("tapez un nom: ");

    $j = 0 ;
    while ($j < 3 ){
        $j++;
        print ("\nBonjour " . $nom);
    }
}









