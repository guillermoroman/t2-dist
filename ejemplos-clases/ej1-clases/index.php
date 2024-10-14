<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("Coche.php");

    $coche = new Coche("rojo", 6);

    $coche -> pitar();

    echo $coche -> getPosition();
    echo "<br>";

    $coche -> mover(5, 7);
    echo $coche -> getPosition();
   


    ?>
</body>
</html>