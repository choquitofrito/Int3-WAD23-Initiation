<?php

// // 51, 53, .........., 99
// for ($i = 51; $i < 100; $i+=2){
//     print ("\n" .$i);
// }


// Concept de MODULO: reste de la division entière
// 6 / 3 -> 2 . Reste: 0
// 6 / 2 -> 3 . Reste: 0
// 7 / 2 -> 3 . Reste: 1
// 8 / 3 -> 2 . Reste: 2
// 2 / 8 -> 0 . Reste: 2
// 3 / 2 -> 1 . Reste: 1 (impaire)
// 5 / 2 -> 2 . Reste: 1 (impaire)


// print (6 % 3);
// print (2 % 8);

for ($i = 50; $i <= 100; $i++){
    if ($i % 2 == 1){
        print ("\n" .$i);
    }
}




?>