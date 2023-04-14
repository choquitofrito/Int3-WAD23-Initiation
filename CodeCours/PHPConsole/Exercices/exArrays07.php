<?php

$chiffres = [];

// créer 
for ($i = 1; $i <= 200; $i++) {
    $chiffres[] = $i;
}


// modifier
for ($i = 1; $i < 200; $i++) {
    $chiffres[$i] = $chiffres[$i] * 2;
}

foreach ($chiffres as $chiffre){
    $chiffre = $chiffre * 2;
}

// afficher
foreach ($chiffres as $chiffre) {
    print("\n" . $chiffre);
}
// print_r ($chiffres);
