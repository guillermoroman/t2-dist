<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    saludar("Matías");
    saludar();

    function saludar($nombre = "invitado"){

        echo "Hola $nombre<br>";
    }

    ?>

</body>
</html>