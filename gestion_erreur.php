<?php
try{
    echo "get probability";
    $px = 2;
    if( $px > 1 ){ throw new Exception();}
}
catch(Exception $except){
    echo "P(x) doit etre inferieu0r a 1";
}
finally{
    echo " fin";
}