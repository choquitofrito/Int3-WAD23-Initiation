<?php

$chiffres = [];

// $chiffres[] = 1;
// $chiffres[] = 2;
// $chiffres[] = 3;
// $chiffres[] = 4;
// .
// .
// $tab = range(1,200);

// foreach (range(1,200) as $chiffre){
//     print ("\n".$chiffre);
// }
// die();

for ($i = 1; $i <= 200; $i++){
    $chiffres[] = $i;
}

// for ($i = 0; $i < 200; $i++){
//     $chiffres[$i] = $i + 1;
// }


foreach ($chiffres as $chiffre){
    print ("\n". $chiffre);
}
// print_r ($chiffres);
