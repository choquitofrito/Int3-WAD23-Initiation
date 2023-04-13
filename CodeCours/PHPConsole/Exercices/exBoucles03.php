<?php

$age = (int)readline ("vous avez quel age? ");
$tentatives = 1;

while ( ($age < 0 || $age > 130) AND $tentatives < 3) {
    $age = readline ("vous avez quel age? ");
    $tentatives ++;  
}

if ( $age > 0 AND $age < 130 ){
    print ("Bienvenue");
}
else {
    print ("C'est la fin!");
}

?>