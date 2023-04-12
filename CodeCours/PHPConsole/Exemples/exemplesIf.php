<?php

$prix = readLine ("Tapez un prix: ");


// && || 
// AND OR

if ($prix < 150){
    print ("Le produit n'est pas cher");
}
else if ($prix == 150){
    print ("Le prix est tout juste");
}
else {
    print ("Le produit est cher");
}

