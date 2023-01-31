<?php

function retInfo(){
    include('config.php');

    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    if($customQuerry != null){
        $sql = $customQuerry;
    }else{
        $sql = "SELECT * FROM pizzas";
    }

    $statement = $pdo->prepare($sql);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    return $result;
}