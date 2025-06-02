<?php

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");

    $sql="ALTER TABLE products DROP COLUMN name";

    $pdo->exec($sql);
    echo"Column deleted succesfully";
}catch(PDOException $e){
    echo $e->getMessage();
}



?>