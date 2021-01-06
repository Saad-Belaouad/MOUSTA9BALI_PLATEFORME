<html>
<head>
    <meta charset="utf-8" >
    <meta lang="ar">
    <meta lang="fr">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.css">
    
   <link  rel="stylesheet" href="assets/css/style1.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

</head>
<body>
    <!--Start navbar------>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="Acceuil.php">
    <img src="assets/images/logo.png" width="200px" height="70px" class="d-inline-block align-top" alt="" loading="lazy">
        <div class="container">
  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
            </a>
        </nav>
        <?php 
require_once("loginaction.php");
?>


    <!-----------------end navbar---------------------------->
<h2 class="text-dark text-center mt-3">Bienvenue au Espace Admin</h2>
<div class="card  mt-3 container  bg-primary h-50 w-50" id="cardadmin">
<h3 class=" text-dark text-center mt-5">Connexion </h3>
<form mt-3 method="POST" action="">
<div class="container"> 
<div class="form-group col-lg-6 container mt-5">
<label for="emailadmin" class="text-dark" >Email :</label>
<input required  id="emailadmin" class="form-control " type="email" name="email" placeholder="Saisir votre email">
    </div>
<div class="form-group col-lg-6 container">
<label for="emailadmin" class="text-dark" >Mot de passe : </label>
<input required  id="emailadmin" class="form-control" type="password" name="password" placeholder="Saisir votre code">
</div>
   <div class="form-group col-lg-6 container">
<input  type="submit" class="btn btn-success mt-1 "  name="submit" value="CONNEXION"  >
</div> 
</div>
</form>
</div>

        
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
</html>



