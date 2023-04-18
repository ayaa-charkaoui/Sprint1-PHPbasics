<?php
//Exercici 1
$int1 = 1;
$int2 = 2;
$int3 = 3;

if ($int)
echo $int;
echo "<br>";
echo $double;
echo "<br>";
echo $string;
echo "<br>";
echo $boolean;

//Exercici 2
$hello = "Hello, World!";
echo $hello;
echo "<br>";
$HELLO = strtoupper($hello);
echo $HELLO;
echo "<br>";
echo "La mida de la variable 'hello' és de ", strlen($hello), " caràcters";
echo "<br>";
for ($i = (strlen($hello)-1); $i >=0 ; $i--) {
    echo $hello[$i];
}
echo "<br>";

$cursPHP = "Aquest és el curs de PHP";
echo $hello, " ", $cursPHP;
echo "<br>";

//Exercici 3
$nom = "Ayaa";
echo "<h1><b> $nom </b></h1>";
echo "<br>";


//Exercici 4
$X = 4;
$Y = 2;
$N = 10.5;
$M = 3.5;

echo "Valor de la variable X: ", $X, "<br>", "Valor de la variable Y: ", $Y, "<br>";
echo "Suma de les variables X i Y: ", $X+$Y, "<br>";
echo "Resta de les variables X i Y: ", $X-$Y, "<br>";
echo "Producte de les variables X i Y: ", $X*$Y, "<br>";
echo "Mòdul de les variables X i Y: ", $X%$Y, "<br>";

echo "Valor de la variable N: ", $N, "<br>", "Valor de la variable M: ", $M, "<br>";
echo "Suma de les variables N i M: ", $N+$M, "<br>";
echo "Resta de les variables N i M: ", $N-$M, "<br>";
echo "Producte de les variables N i M: ", $N*$M, "<br>";
echo "Mòdul de les variables N i M: ", $N%$M, "<br>";

echo "Doble de X: ", 2*$X, "<br>", "Doble de Y: ", 2*$Y, "<br>", "Doble de N: ", 2*$N, "<br>", "Doble de M: ", 2*$M, "<br>";
echo "Suma de totes les variables: ", $X+$Y+$N+$M, "<br>";
echo "Producte de totes les variables: ", $X*$Y*$N*$M, "<br>";

//Exercici 5
$array1    = array(2, 4, 6, 8, 10);
$array2    = array(3, 5, 7);
array_push($array2, 9);
$arrayTotal = array_merge($array1, $array2);
echo "<br>";
echo "La mida de l'array resultant és de ", sizeof($arrayTotal), " elements"; 
echo "<br>";
print_r($arrayTotal);
?>