<?php
$update=false;
$id="";
$ecole="";
$datecon="";
$precon="";
$typecon="";
$matiercon="";
$diplomecon="";
$imagecon="";
session_start();
include('connexiondb.php');
if(isset($_POST['add'])){
  $ecole=$_POST['nomecole'];
    $datecon=$_POST['datecon'];
    $precon=$_POST['precon'];
    $typecon=$_POST['typecon'];
    $matiercon=$_POST['matiereconc'];
    $diplomecon=$_POST['diplomeconc'];
    $photo=$_FILES['imagecon']['name'];  
    $upload="assets/images/".$photo;

    $sql="INSERT INTO concours_table(ecole,date_concour,pre_ins,type_concours,matiers,type_diplome,image)
    
    values (?,?,?,?,?,?,?)";
    $stm=$conn->prepare($sql);
    $stm->bind_param('sssssss',$ecole,$datecon,$precon,$typecon,$matiercon,$diplomecon,$upload);
    $stm->execute();
    move_uploaded_file($_FILES['imagecon']['tmp_name'],$upload);
    
    header("Location:concourscrud.php");
    $_SESSION['response']="Concours bien ajouté";
    
}
if(isset($_GET['delete'])){

    $id=$_GET['delete'];
    $sql="SELECT image FROM concours_table WHERE id=?";
    $stmt2=$conn->prepare($sql);
    $stmt2->bind_param("i",$id);
    $stmt2->execute();
    $result2=$stmt2->get_result();
    $row=$result2->fetch_assoc();

    $imagepath=$row['image'];
    unlink($imagepath);
    $query="DELETE  FROM concours_table where id=?";
    $stm=$conn->prepare($query);
    $stm->bind_param('i',$id);
    $stm->execute();
    $_SESSION['response1']="Concours est supprimé";

    header("Location:concourscrud.php");
    
}
if(isset($_GET['edit'])){
    $id=$_GET['edit'];

    $query="SELECT * FROM concours_table WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $ecole=$row['ecole'];
    $datecon=$row['date_concour'];
    $precon=$row['pre_ins'];
    $matiercon=$row['matiers'];
    $diplomecon=$row['type_diplome'];
    $imagecon=$row['image'];
    $typecon=$row['type_concours'];

    $update=true;
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $ecole=$_POST['nomecole'];
    $datecon=$_POST['datecon'];
    $precon=$_POST['precon'];
    $typecon=$_POST['typecon'];
    $matiercon=$_POST['matiereconc'];
    $diplomecon=$_POST['diplomeconc'];
    $oldimage=$_POST['oldimage'];  


    if(isset($_FILES['imagecon']['name'])&&($_FILES['imagecon']['name']!="")){
        $newimage="assets/images/".$_FILES['imagecon']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['imagecon']['tmp_name'], $newimage);
    }
    else{
        $newimage=$oldimage;
    }
    

    $query="UPDATE concours_table SET ecole=?,date_concour=?,pre_ins=?,type_concours=?,matiers=?,type_diplome=?,image=? WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sssssssi",$ecole,$datecon,$precon,$typecon,$matiercon,$diplomecon,$newimage,$id);
    $stmt->execute();

    $_SESSION['response3']="Concours est modifié!";
    header('location:concourscrud.php');
}

if(isset($_GET['details'])){
    $id=$_GET['details'];
    $query="SELECT * FROM concours_table WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $did=$row['id'];
    $decole=$row['ecole'];
    $ddatecon=$row['date_concour'];
    $dprecon=$row['pre_ins'];
    $dmatiercon=$row['matiers'];
    $ddiplomecon=$row['type_diplome'];
    $dimagecon=$row['image'];
    $dtypecon=$row['type_concours'];
    
}
?>




