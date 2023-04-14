<?php

// déclaration de la fonction
function afficheBonjour()
{
    print("\nBonjour");
}


function somme(float $val1, float $val2)
{
    $resultat = $val1 + $val2;
    return $resultat;
}

// appel
print(somme(4.8, 100.5));

$resultat = somme(100.5, 200);
print ($resultat);

// fonction qui renvoie un string renversé SANS modifier le string original
function renverse (string $nom){
    $resultat = ucfirst (strtolower (strrev($nom) ));
    return $resultat;
}
print ("\n");
$nom = "Yusra";
$nomRenverse = renverse ($nom);
print ($nomRenverse);


print ("\n");

// fonction qui modifie le string original
function renverseModif (string &$nom):void {
    $nom = ucfirst (strtolower (strrev($nom) ));
}

$nom2 = "Hsin I";
renverseModif ($nom2);
print($nom2);


// fonction qui modifie le string original et renvoie la taille du string
function renverseModifReturn (string &$nom):int {
    $nom = ucfirst (strtolower (strrev($nom) ));
    $laTaille = strlen ($nom);
    return $laTaille;
}
print ("\n");
$nom3 = "Dorine";
$taille = renverseModifReturn ($nom3);
print ("Le nom renversé: " . $nom3 . " a une longueur de : " . $taille);







