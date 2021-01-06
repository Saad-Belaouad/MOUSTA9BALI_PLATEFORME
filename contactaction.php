<?php
session_start();
include("connexiondb.php");
if(isset($_POST['submit'])){
  
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $sujet=$_POST['sujet'];
    $message=$_POST['message'];
    $tel=$_POST['tel'];
    $sql="INSERT INTO  formulaire_info(nom,prenom,sujet,email,message,tel) VALUES(?,?,?,?,?,?)";
    $stm=$conn->prepare($sql);
    $stm->bind_param('sssssi',$nom,$prenom,$sujet,$email,$message,$tel);
    $stm->execute();
    $_SESSION["response"]="Message Envoyé";
    header("location:contact.php");

}

?>