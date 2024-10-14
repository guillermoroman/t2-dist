<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function duplicar (&$numero){
        $numero = $numero * 2;
    }


    $num = 5;
    echo $num . "<br>";

    duplicar($num);
    echo $num . "<br>";
    duplicar($num);
    echo $num . "<br>";
    duplicar($num);
    echo $num . "<br>";
    duplicar($num);
    echo $num . "<br>";

 
    ?>

</body>
</html>