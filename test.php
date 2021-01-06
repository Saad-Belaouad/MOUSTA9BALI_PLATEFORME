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
<table class="table  table-hover bg-light">
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
            <a href="details.php?details=<?= $row['id'] ; ?>" class="badge badge-info"> Detailles</a>
            

          
          </td>
      </tr>
      <?php } ?>
    
    </tbody>
  </table>
</div>
    
    
    
    
    
    
    
    <!---FOOTER----------------------->
   
        </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
</html>