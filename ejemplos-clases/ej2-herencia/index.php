<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("Employee.php");
    include_once("Salesman.php");

    $juan = new Employee("Juan Rodriguez", 2000, "22/03/2023");
    $ana = new Salesman("Ana Blanco", 2300, "13/06/2021", 20);

    $salaryJuan = $juan->calculateSalary();
    echo "<p>El salario de Juan es $salaryJuan</p>";

    $ana->sell(10000);
    $salaryAna = $ana->calculateSalary();
    echo "<p>El salario de Ana es $salaryAna</p>";

    ?>
</body>
</html>