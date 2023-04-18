<?php

$int1 = 1;
$int2 = 2;
$string = "wxyz";

//Exercici 2
if (strlen($string)>1) {
    echo $string[strlen($string)-1];
for ($i = 1; $i <strlen($string)-1 ; $i++) {
    echo $string[$i];
}
    echo $string[0];
    echo '<br>';
}
else {
    echo $string;
    echo '<br>';
}

//Exercici 1
    if ($int1==$int2) {
        $suma=($int1+$int2)*2;
        echo $suma;
        return $suma;
    } 
    else {
        $suma=($int1+$int2);
        echo $suma;
        return $suma;
    }

    








?>