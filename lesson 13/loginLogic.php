<?php
include_once('config.php');

    if(isset($_POST['submite'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
         if(empty($username) || empty($password)){
        echo"fill all the fields"
        header("refresh:2; url=login.php");
    }else{
        $sql="SELECT username FROM users Where username=:username";
        $insertSql=$conn->prepare($sql);
        $insertSql->bindParam(':username', $username);
        $insertSql->execute();
        if($insertSql->rowCount()>0){
            $data=$insertSql->fetch();
            if(password_verify($password,$data['password'])){
                $_SESSION['USERNAME']=$data['username'];
                header("Location: dashboard.php");
            }else{
                echo"Password incorrect";
                header("refresh:2; url=login.php");
            }else{
                echo"User not found";
            }
        }
      }
    }
    

?>

