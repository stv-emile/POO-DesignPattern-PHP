<?php

//syntaxe courte
$fruits[1] = "pomme";
$fruits[2] = "poire";
$legumes = ["pois", "chou", "aubergine"];
$tableau = array(12, 13, 15);

//syntaxe longue
$dimension_emballage["nike"] = 22;
$dimension_emballage["addidas"] = 34;
$taille_fruits = ["pomme"=>22, "orange"=>55];
$poids_fruits = array("pomme"=>54.4, "poire"=>45, );

//tableau multidimension
$voteurs =[
    "nike" => ["Mijole", "Magda", "Jovanie"],
    "addidas" => ["Vanessa", "Melissa", "Maella"]
];

//cration de suite en php
$suite1 = range(10,100,2);
print_r($suite1);

//decompte d'un tebleau
print(count($suite1))."\n";
print(sizeof($suite1))."\n";
//nombre de chaque valeur differentes
$tab = [1, 2, 4, 5, 6, 1, 1, 2, 4,5,7];
print_r(array_count_values($tab));


//lecture de tableau astuce 
$i = 0;
while(isset($tab[$i])){
    echo $tab[$i].", ";
    $i++;
}
//tableau avec des trou ou clé non numerique -> utilisation de each et foreach
$age = ["john"=>12, "christopher"=>34];
while($element = each($age)){
    echo "{$element[0]} = {$element[1]},  ";
} 