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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.css">
    
   <link  rel="stylesheet" href="assets/css/style2.css" >
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
    
    
    
    <!-------------START CONTENT ---------------------->
   <form   action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="card container mt-5 ">
                            
                            <div class="card-body p-3 ">
          <h3 class="text-center">Ajouter un councours au platefrome mousta9bali</h3>
          <hr>
          <?php
           if(isset($_SESSION['response'])) { ?>
               <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Bien ! </strong> <?php echo $_SESSION['response']; ?> 
</div>

      <?php    } unset($_SESSION['response']); ?>
      <?php
           if(isset($_SESSION['response1'])) { ?>
               <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>OPPS! </strong> <?php echo $_SESSION['response1']; ?> 
</div>

      <?php    } unset($_SESSION['response1']); ?>
      <?php

      if(isset($_SESSION['response2'])) { ?>
    <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Bien ! </strong> <?php echo $_SESSION['response2']; ?> 
</div>

      <?php    } unset($_SESSION['response2']); ?>
      <?php if(isset($_SESSION['response3'])) { ?>
        <div class="alert alert-primary alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Bien ! </strong> <?php echo $_SESSION['response3']; ?> 
</div>   
      <?php } unset($_SESSION['response3']); ?>

                                <!--Body-->
                                <div class="form-group w-50 container">
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                        <i class="fa fa-school text-info"></i></div>
<input type="hidden" value="<?= $id ; ?>" name="id">
                                        </div>
                                        <input  value="<?= $ecole; ?>" type="text" class="form-control"  name="nomecole" placeholder="Saisir le nom de l'ecole" required>
                                    </div>
                                                                                                                   <small class="text-secondary">Ex:Ensa/Ensam/Ehtp</small>

                                       <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="far fa-calendar-alt text-info"></i></div>

                                        </div>
                                        <input value="<?= $datecon; ?>" type="text" class="form-control"  name="datecon" placeholder="Date concours  " required>
                                    </div>
                                                                               <small class ="text-secondary">Ex:2020/12/31</small>

                                       <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-sign-in-alt text-info"></i></div>

                                        </div>
                                        <input  value="<?= $precon; ?>"type="text" class="form-control"  name="precon" placeholder="Pré-inscription" required>
                                    </div>
                                                                                                                                                       <small class="text-secondary">Ex:Enligne/Depot de dossier</small>

                                       <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-file-alt text-info"></i></div>

                                        </div>
                                        <input value="<?= $typecon; ?>" type="text" class="form-control"  name="typecon" placeholder="Type de councours " required>
                                    </div>
                                                                                                                                                       <small class="text-secondary">Ex:Epruve ecrite / orale</small>

                                       <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-book-open text-info"></i></div>

                                        </div>
                                        <input value="<?= $matiercon; ?>"  type="text" class="form-control"  name="matiereconc" placeholder=" Les matieres " required>
                                    </div>
                                     <small class="text-secondary">Ex:Math / Physique</small>

                                     <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-user-graduate text-info"></i></div>

                                        </div>
                                        <input  value="<?= $diplomecon; ?>"  type="text" class="form-control"  name="diplomeconc" placeholder="Type de diplome " required >
                                    </div>
                                     <small class="text-secondary">Ex:DUT/DEUG/DEUST/DTS</small>

                                     <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-image text-info"></i></div>

                                        </div>
                                        <input type="hidden" name="oldimage" value="<?= $imagecon; ?>">
            <input type="file" name="imagecon" class="custom-file form-control">
                                    </div>
                                     <small class="text-secondary">.png ou jpg </small>

                                    <img src="<?= $imagecon; ?>" width="120" >

                                    <div class="container" >
                                   
<?php if($update == true){?>
                                        <input type="submit" class="btn btn-success container mt-3 " name="update" value="modifier">                                     
<?php } else{  ?>
    <input type="submit" class="btn btn-primary container mt-3 " name="add" value="ajouter"> 
     


                                    <?php } ?>                                    
                                    
                                    </div>
        
        

                                
</div>
</div>
</div>
</form>
<?php 
   $query="SELECT *FROM concours_table ;";
   $stmt=$conn->prepare($query);
   $stmt->execute();
   $results=$stmt->get_result();


?>
    <div class="container">
    <div class="card bg-light mt-5">

        <h2 class="text-center text-danger">LISTES DES CONCOURS </h2>
        <p class="text-center text-danger">listes des concours pour acceder au grands ecole au maroc</p>
        </div>
<table class="table   bg-light table-striped" id="data-table">
    <thead>
      <tr>
        <th>Id</th>
          <th>Image</th>
        <th>Ecole</th>
        <th>Date de concours</th>
        <th>Type de diplome </th>


      </tr>
    </thead>
    <tbody>
    <?php while($row=$results->fetch_assoc()){ ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><img src="<?= $row['image']; ?>" width="100px" heigth="100px"></td>
          <td><?= $row['ecole'];?></td>
          <td><?=$row['date_concour'];?></td>
          <td> <?=$row['type_diplome']; ?> </td>
          <td>
            <a href="details.php?details=<?= $row['id'] ; ?>" class="badge badge-info"> Detaille</a>
            <a href="concourscrud.php?edit=<?= $row['id'] ; ?>"  class="badge badge-success">Modifier</a>
            <a  href="action.php?delete=<?= $row['id'] ; ?>" onclick="return confirm('êtes-vous sûr de vouloir supprimer ce concours')" class="badge badge-danger"> Supprimer</a>

          
          </td>
      </tr>
      <?php } ?>
    
    </tbody>
  </table>
</div>
    
    
    
    
    
    
    
    <!---FOOTER----------------------->
    <footer class="page-footer font-small blue-grey lighten-5 container mt-5">
          <div class="card mb-3  bg-danger col-lg-12 ">
              <div class="text-center text-light ">
                  &copy; 2020 Created by : saad belaouad
              
              </div>
              
           
             
         </div> 
        </footer>
        </body>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
<script>$(document).ready(function() {
    $('#data-table').DataTable();
} );
</script>
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
</html>