<?php

$books = [
    [
        'name' => "L'Archipel des oubliés",
        'author' => "Nicolas Beuglet",
        'price' => 18.90,
        'parution_year' => "2022",
    ],
    [
        'name' => "Les cinq blessures qui empêchent d'être soi-même",
        'author' => "Lise Bourbeau",
        'price' => 7.95,
        'parution_year' => "2013",
    ],
    [
        'name' => "Kilomètre Zéro",
        'author' => "Maud Ankaoua",
        'price' => 7.50,
        'parution_year' => "2019",
    ],
    [
        'name' => "Les quatre accords toltèques",
        'author' => "Miguel Ruiz",
        'price' => 8.90,
        'parution_year' => "2016",
    ],
    [
        'name' => "1991",
        'author' => "Franck Thilliez",
        'price' => 8.50,
        'parution_year' => "2022",
    ],
    [
        'name' => "Les possibles",
        'author' => "Virginie Grimaldi",
        'price' => 7.79,
        'parution_year' => "2022",
    ],
    [
        'name' => "Changer l'eau des fleurs",
        'author' => "Valérie Perrin",
        'price' => 9.20,
        'parution_year' => "2019",
    ],
    [
        'name' => "Le premier jour du reste de ma vie",
        'author' => "Virginie Grimaldi",
        'price' => 7.90,
        'parution_year' => "2016",
    ],
];

// Après avoir créé un fichier index.php contenant le tableau ci-dessus, vous devrez grâce au langage PHP :
// 1 - Calculer la moyenne des prix de ventes des livres ci-dessus
$nbBooks = count($books);
$totalPrices = 0;
foreach ($books as $book) {
    $totalPrices += $book["price"];
}
$averagePrice = $totalPrices / $nbBooks;
var_dump("Le prix moyen est de : $averagePrice");

// 2 - Déterminer le nombre de livres écrits par Virginie Grimaldi
$nbBooksVG = 0;
foreach ($books as $book) {
    if ($book["author"] === "Virginie Grimaldi") {
        $nbBooksVG++;
    }
}
var_dump("Le nombre de livre de VG est de $nbBooksVG");

// 3 - Créer un nouveau tableau comprenant les livres parus depuis 2019
$nbBooksSince2019 = 0;
foreach ($books as $book) {
    if ($book["parution_year"] >= "2019") {
        $nbBooksSince2019++;
    }
}
var_dump("Le nombre de livre parus après 2019 est de $nbBooksSince2019");

// 4 - Ordonner le tableau en affichant par ordre de prix croissant
$column = array_column($books, "price");
array_multisort($column, SORT_ASC, $books);
var_dump($books);

// 5 - Appliquer 20% de réduction à chacun des livres parus avant 2021
for ($i = 0; $i < count($books); $i++) {
    ($books[$i]["parution_year"] < 2021) ? $books[$i]["price"] = $books[$i]["price"] * 0.8 : $books[$i]["price"] = $books[$i]["price"];
}
var_dump($books);
