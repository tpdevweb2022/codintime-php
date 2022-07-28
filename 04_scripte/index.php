<?php

// php -S localhost:8001

// 1. Créer une boucle allant de 1 à 20 avec la méthode de votre choix
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 21);


// 2. En accédant à l’URL [http://localhost:8001/index.php?name=John&age=25](http://localhost:8001/index.php?name=John&age=25)
//     Faites en sorte de rendre dans un h2 le message “John est âgé de 25 ans”
$age = htmlspecialchars($_GET["age"]);
$name = htmlspecialchars($_GET["name"]);
echo "$name est âgé de $age ans";


// 3. Créer une fonction verifyNumberPhone() permettant de vérifier si un numéro de téléphone est bien au format FR, c’est à dire 10 chiffres avec pour les 2 premiers numéros faisant partie de la liste suivante:

//     01, 02, 03, 04, 05, 06, 07, 08, 09

function verifyNumberPhone($phone)
{
    $validFR = strlen($phone) === 10 ? true : false;
    if ($validFR) {
        $arrayIndicatifs = ["01", "02", "03", "04", "05", "06", "07", "08", "09"];
        $debutNumero = substr($phone, 0, 2); // 2 premiers caractères
        return (in_array($debutNumero, $arrayIndicatifs)) ?  "Ok" :  "Mauvais numéro";
    } else {
        return "Il faut 10 chiffres";
    }
}
echo "<br>" . verifyNumberPhone("0120203040545454");
