<?php
//regex

$presence_un_caracter_a = "/a/";
$presence_au_moins_xyz = "/[xyz]/";
$presence_lettre_minuscule = "/[a-z]/";
$presence_lettre_majuscule = "/[A-Z]/";
$presence_chiffre = "/[0-9]/";
$presence_symbole = "/\$/";

$class_predefinies = [
    "/[[:alnum:]]/",
    "/[[:alpha:]]/",
    "/[[:blank:]]/",
    "/[[:ctrl:]]/",
    "/[[:digit:]]/",
    "/[[:print:]]/",
    "/[[:punct:]]/",
    "/[[:spcace:]]/",
    "/[[upper]]/",
    "/[[:xdigit:]]/"
];

//recherche chaine precise 
$presence_mot_precis = "/Paris/";
$presence_alternatif = [".com ou .net" => "/\.com|\.net/"];

//restriction de caractere
$compos_uniquement_de_chaine = "/[^A-Z]/";
$commence_par_abc = "/^abc/";
$termine_par_abc = "/abc$/";

//creation de modele genraux
$chaine_contenant_abc_suivi_de_x_caracter = "/abc./";
$carter_h_present_0_ou_une_fois = "/math?/";
$carater_h_present_au_moins_une_fois = "/nat+/";
$carater_h_presnt_0_ou_x_fois_dans_patc = "/patch*/";
$suite_qq_de_carcter = "/mat.*/";
$regroupement = "/(ma)+/";

//recherche d'un nombre donné de caracter
$cor_suivi_de_3_carater_exactement = "/cor{3}/";
$cor_suivi_au_minimum_3_carater = "/cor{3,}/";
$cor_suivi_au_minimum_3_a_9 = "/cor{3,9}/";


//les fonctions de recherche
$maman = "manman";
if(preg_match("/(ma)+/", $maman)) echo $maman."\n";

$phrase = "le chien de {nom}";
$verifiant_motif_remplace = preg_replace("/{nom}/", "John", $phrase);
echo $verifiant_motif_remplace."\n";

//definition de motif complexe
$modele = "/([[:alpha:]]+) ([^0-9])/";










