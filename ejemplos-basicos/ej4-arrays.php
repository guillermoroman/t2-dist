<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$a0 = 0;
$a1 = 5;
$a2 = 6;
$a3 = 9;
$a4 = 3;

$suma = $a0 + $a1 + $a2 + $a3 + $a4;

echo "Suma = " . $suma . "<br>";

$numeros = array(0, 5, 6, 9, 3);
$suma = $numeros[0] +$numeros[1] +$numeros[2] +$numeros[3] +$numeros[4];

echo "Suma = " . $suma . "<br>";

$suma = 0;
for($i =0; $i < count($numeros); $i++){
    $suma += $numeros[$i];
}
echo "Suma = " . $suma . "<br>";

$suma = 0;
foreach($numeros as $numero){
    $suma += $numero;
}
echo "Suma = " . $suma . "<br>";

var_dump($numeros);

$numeros[2] = "hola";

echo "<br>";

var_dump($numeros);
?>


    
</body>
</html>