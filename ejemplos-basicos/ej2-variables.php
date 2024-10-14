<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $varaible = 5;
    $variable = "hola";

    echo "<p>El valor de variable es: $variable</p>";
    ?>

    <h2>Tipos de datos</h2>

    <?php

    $var1 = 42;
    echo "<p>Var1 es de tipo " . gettype($var1) . ".</p>";

    $var2 = 3.1416;
    echo "<p>Var2 es de tipo " . gettype($var2) . ".</p>";
    $var3 = "Hola";
    echo "<p>Var3 es de tipo " . gettype($var3) . ".</p>";
    $var4 = true;
    echo "<p>Var4 es de tipo " . gettype($var4) . ".</p>";

    $resultado = $var1 + (integer)$var2;
    echo $resultado;

    define ("NUMERO_PI", 3.1416);

    echo NUMERO_PI;
    ?>
</body>
</html>