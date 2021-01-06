<?php 

require_once("connexiondb.php");

require_once("action.php");



?>
<html>
<head>
    <meta charset="utf-8" >
    <meta lang="ar">
    <meta lang="fr">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.css">
    
   <link  rel="stylesheet" href="assets/css/style.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

</head>
<body>
    <!--Start navbar------>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger ">
        <a class="navbar-brand" href="concourscrud.php">
    <img src="assets/images/logo.png" width="200px" height="70px" class="d-inline-block align-top" alt="" loading="lazy">
        <div class="container">
  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  </div>
</nav>
<div class="container">
    <div class="jumbotron mt-5 ">
    <div class="card w-50 container mt-3" >
  <img class="card-img-top" src="<?= $dimagecon ?>" alt="Card image cap">
  <div class="card-body bg-info">
    <div class="card-text">
    <div class="text-light text-center " >Ecole : <?= $decole ?><div> 
    <div class="text-light text-center " > Date de concours : <?= $ddatecon ?><div> 
    <div class="text-light text-center " > Les matieres : <?= $dmatiercon ?><div> 
    <div class="text-light text-center  " > Type de Diplome demandé : <?= $ddiplomecon?><div> 
    <div class="text-light text-center " >Type De concours : <?= $dtypecon ?><div> 
    <div class="text-light text-center " ><div> 
    <div class="text-light text-center " ><div> 




    </div>
  </div>
</div>

    <img src="assets/images/logo.png" width="200px" heigth="100px "> 
    </div>

      </div>
    </div>
  </div>
  
        </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
</html>