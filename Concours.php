<?php
require_once('inc/header.php');
require_once("connexiondb.php");
require_once("action.php");
?>
<?php 
   $query="SELECT *FROM concours_table ;";
   $stmt=$conn->prepare($query);
   $stmt->execute();
   $results=$stmt->get_result();


?>
    <div class="container">
    <div class="card bg-light mt-5">
        <h2 class="text-center text-dark">LISTES DES CONCOURS </h2>
        <p class="text-center text-dark">listes des concours pour acceder au grands ecole au maroc</p>
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





<?php

require_once('inc/footer.php');
?>