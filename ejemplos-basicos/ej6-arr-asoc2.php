<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$productos = array(
    array("id" => 1, "name" => "Ratón", "price" => 49.99),
    array("id" => 2, "name" => "Teclado", "price" => 89.99),
    array("id" => 3, "name" => "Disco Duro", "price" => 76));
?>

<table border = 1>
<tr><th>Nombre</th><th>Precio (€)</th></tr>

<?php
foreach($productos as $producto){
    echo "<tr>";
    echo "<td>" . $producto["name"] . "</td>"; 
    echo "<td>" . $producto["price"] . "</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>