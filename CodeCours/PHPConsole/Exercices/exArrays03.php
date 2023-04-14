<?php

$villes = ['Rome', 'Bruxelles', 'Madrid', 'Rabat', 'Oslo'];

// print ($villes[0]);
// print ($villes[1]);
// print ($villes[2]);
// print ($villes[3]);
// print ($villes[4]);

for ($i = 0; $i < count($villes); $i = $i + 1){
    print ("\n" .$villes[$i]);
}
print ("\n");

foreach ($villes as $ville){
    print ("\n" . $ville);
}