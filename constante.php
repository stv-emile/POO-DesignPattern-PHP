<?php
//definition d'une constante 
if (define("CONSTANT", 2000)){
    echo CONSTANT."\n";
}

//verifier si une constante existe
if (defined("CONSTANT")){
    echo "CONSTANT defined and equal to ".CONSTANT."\n";
}

//autre facon de definir une constante
const PI = [20, 7, 1997 ];
print_r(PI);

//toutes les constantes prédéfinies
print_r(get_defined_constants());


