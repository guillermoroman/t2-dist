<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $divisas = array (  "Estados Unidos" => "USD",
                            "España" => "EUR",
                            "Reino Unido" =>"GBP",
                            "Emiratos Árabes Unidos" => "AED");
            
        
        echo $divisas["Reino Unido"];

        echo "<ul>";
        foreach($divisas as $pais => $divisa){
            echo "<li>Moneda de $pais: $divisa</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>