<?php

//les types supportés
//types sclaire
$entier = (integer) 3;
if (is_integer($entier)) echo $entier."\n";

$decimal_flottant = (float) 3.5e3;
if(is_float($decimal_flottant)) echo $decimal_flottant."\n";

$decimal = (double) 3.10;
if(is_double($decimal)) echo $decimal."\n";

$chaine = (string) "my string";
if(is_string($chaine)) echo $chaine."\n";

$booleen = (boolean) true;
if(is_bool($booleen)) echo $booleen."\n";

if(is_scalar($string)) echo "\$string est type sclaire";
if(is_numeric($decimal)) echo "\$decimal est de type scalaire";

//types composé
$tableau = array(2,4,5);
if(is_array($tableau)) print_r($tableau);

$objet = new ArrayObject([2, 4]);
if(is_object($objet)) print_r($objet);

//types spéciaux
$null = null;
if(is_null(null)) echo "is null \n";

$resource = fopen("README.md", "r");
if(is_resource($resource)) print_r($resource); echo "\n"; 


//trouver le type et changer de type
$variable = 33;
echo "avant ".gettype($variable)."\n";

settype($variable,"double");
echo "apres ".gettype($variable)."\n";