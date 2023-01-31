<?php

include("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "INSERT INTO pizzas 
                (`id`,
                `size`,
                `sauce`,
                `topping`,
                `spices`) 
VALUES 
                (NULL,
                :size,
                :sauce, 
                :toppings,
                :spices);";

$statement = $pdo->prepare($sql);

$statement->bindValue(":size", $_POST["size"]);
$statement->bindValue(":sauce", $_POST["sauce"]);
$statement->bindValue(":toppings", $_POST["topping"]);

$allSpices = "";