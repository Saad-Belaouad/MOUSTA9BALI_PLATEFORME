<?php

include('connexion.php');
session_start();
if(isset($_POST["submit"])){
 $email=$_POST["email"];
 $password=$_POST["password"];

 if(($email=="admin@gmail.com") && ($password=="@@@ADMIN")){

     header("Location:concourscrud.php");
     

 }
 else{
    header("Location:loginadmin.php");
 }
 




}

?>