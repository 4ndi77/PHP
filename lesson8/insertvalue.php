<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

    $username="Andi";

    $password=password_hash("mypassword", PASSWORD_DEFAULT);

    $sql="INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $pdo->exec($sql);

    echo "New record was created succesfully";

}catch(Exception $e){
    echo $e->getMessage();
}





?>