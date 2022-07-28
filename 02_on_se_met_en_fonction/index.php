<?php

// L’objectif de cet exercice sera de créer une fonction générant des nombres aléatoires situés entre 0 et 99 dans une chaine de caractères.
// - Elle doit contenir un paramètres indiquant le nombre d’éléments à générer
// - Si le paramètre est vide, alors 5 nombres devront être générés

function myFunction(int $nb = 5): string
{
    $arrayNb = [];
    for ($i = 0; $i < $nb; $i++) {
        $arrayNb[] = rand(0, 99);
    }
    $stringNb = implode(", ", $arrayNb);
    return "[ " . $stringNb . " ]";
}

// Ecrivez ici la déclaration de la fonction

echo myFunction(8); // "[ 34, 73, 56, 88, 45, 74, 2, 78 ]"
echo "<br>";
echo myFunction(3); // "[ 99, 56, 47 ]"
echo "<br>";
echo myFunction(6); // "[ 12, 2, 58, 63, 27, 14 ]"
echo "<br>";
echo myFunction(2); // "[ 12, 2, 58, 63, 27, 14 ]"
echo "<br>";
echo myFunction(); // "[ 14, 23, 24, 74, 12 ]"