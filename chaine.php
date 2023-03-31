<?php

//chaine de caracteres
$chaine = "ma chaine \n";

//affichage
echo $chaine;
print($chaine);
echo "voici $chaine";

//affichage formaté - les code important : %s=string, %d=integer, %f=double   
$name = "Doriane";
$age = 28;
$taille = 1.50;
printf("printf: %s a %d et mesure %f m \n", $name, $age, $taille);
//recomposé
$formatted = sprintf("sprintf: %s a %d et mesure %f m \n", $name, $age, $taille);
print($formatted);

//affichage et chaine en tableau
$tab_chaine = ["Doriane", 28, 1.50];
vprintf("vprintf : %s a %d et mesure %f m \n", $tab_chaine);
//recomposéet chaine en tableau
$formatted_from_array = vsprintf("vsprintf : %s a %d et mesure %f m \n", $tab_chaine);
printf($formatted_from_array);

//longueur d'une chaine
$myString = "je suis le monde.";
echo "strlen(\$myString) = ".strlen($myString)."\n";

//mise en forme des chaine

//modification de la casse
$phrase = "mon Dieu est le créateur de l'univers.";
echo strtolower($phrase)."\n";
echo strtoupper($phrase)."\n";
echo ucwords($phrase)."\n";
echo ucfirst($phrase);

//gestion des espaces
$phrase2 = "  et si    tu a dit ceci.    ";
printf("ltrim : %s \n", ltrim($phrase2));
printf("rtrim : %s \n", rtrim($phrase2));
printf("trim : %s \n", trim($phrase2));

//entité html et parametre speciaux
$chaine_html = "<h1 class=\"Googla\">Je suis le titre \\ (19, 10)</h1>";
printf("%s \n", $chaine_html);
printf("%s \n", addslashes($chaine_html));
printf("%s \n", quotemeta($chaine_html));
printf("%s \n", htmlspecialchars($chaine_html));
printf("%s \n", htmlentities($chaine_html));

printf("%s \n", stripslashes($chaine_html));
printf("%s \n", html_entity_decode("&lt;h1 class=&quot;Googla&quot;&gt;Je suis le titre \ (19, 10)&lt;/h1&gt;"));

// "\n" vers <br/>
printf("%s \n", nl2br("bonjour \n"));
//enlever les balise html
printf("%s \n", strip_tags("<p>une paragraphe</p>"));


//recherche de sous chaine
$ch = "Il etait une fois, à Paris dans une maison du 20e ";
$sub_reste1 = strstr($ch, "une"); echo $sub_reste1."\n";
$sub_reste2 = stristr($ch, "une"); echo $sub_reste2."\n";
$sub_exact = strrchr($ch, "une"); echo $sub_exact;
$sub3 = substr($ch, 6);
$sub4 = substr_count($ch, "une");
$sub5 = str_replace($ch, "une", "des");
$sub6 = strpos($ch, "une"); //premiere occurence
$sub7 = strrpos($ch, "une"); //derniere occurence

//extractin information
$age = "j'ai 18 ans et toi";
print_r(sscanf($age, "%d"));

//comparaison de chaine
$ch1 = "Le masque";
$ch2 = "Le masque";
$ch3 = "Le masque du grimas";
if (strcmp($ch1,$ch2) == 0) echo "same\n";
if (strcasecmp($ch1, $ch2) == 0) "same even not case\n";
if (strncmp($ch1, $ch3, 10)) echo "same not over 9\n";
if (strncasecmp($ch1, $ch3, 10)) echo "same not over 9\n";
//comparaison dans l'ordre naturelle
$page2 = "page2";
$page12 = "page12";
if(strnatcmp($page2, $page12)) echo "well compared.\n";
if(strnatcasecmp($page2, $page12)) echo "well compared wihtout case.\n";


//tranformation de chaine
$string = "Voici le string a exploser";
$string_array = ["je", "suis", "moi"];
$string_exploded = explode(" ",$string);
print_r($string_exploded);
$string_imploded = implode(" ",$string_array);
print($string_imploded)."\n";