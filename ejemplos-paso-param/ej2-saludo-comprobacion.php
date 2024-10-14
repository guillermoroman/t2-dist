<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (empty ($_GET["nombre"])){
        echo "<p>No se ha recibido nombre</p>";
    } else {
        echo "Hola ". $_GET["nombre"];
    }
    

    var_dump($_GET);
    ?>

    
</body>
</html>