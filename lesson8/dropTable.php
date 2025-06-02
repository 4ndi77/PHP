<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");

    $sql = "DROP TABLE products";

    $pdo->exec($sql);

    echo "Table has been dropped";
}catch(PDOException $e){
    echo $e->getMessage();
}







?>