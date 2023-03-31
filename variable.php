<?php

use function PHPSTORM_META\map;

$var1 = 'value1';
$var2 = 'value2';

//affectation par valeur 
//val1 ajuste la meme valeur que var1
$val1 = $var1;

//affectation par reference
//on ne stocke pas la reference mais ref2 a la meme reference que var2
$ref2 = &$var2;

//controler l'etat d'une variable
//variable a valeur null ou non initialisé
$var_null = null;
$var_non_initialise;
if(!isset($var_null)) echo "val_null est null \n";
if(!isset($var_non_initialise)) echo "var_non_initialiser n'est pas initialiser\n";

$var_vide_array = [0, null, FALSE, "", "0", [], ];
for($i = 0; $i < count($var_vide_array); $i++){
    if(!empty($var_vide_array[$i])) echo "valeur non vide \n";
}


//Variabble prédéfinies

//le nom et la valeur de toutes les variable globales du scripte
//print_r($GLOBALS);

//le nom et la valeur des cookie enregistré sur le poste client
//print_r($_COOKIE);

//le nom et la valeur des variables d'environnement
//print_r($_ENV);

//le nom des fichiers téléchargés à parti du poste client
//print_r($_FILES);

//le nom et la valeur des données issues d'un formulaire envoyé par la methode GET
//print_r($_GET);

//le nom et la valuer des données issue d'un formulaire envoyé par la methode POST
//print_r($_POST);

//contient l'ensemble des variables superglobales $_GET, $_POST, $_COOKIE, $_FILES
//print_r($_REQUEST);

//contient les informations liées au serveur web
//print_r($_SERVER);

//contient l'ensembre des noms des variable de session
//print_r($_SESSION);