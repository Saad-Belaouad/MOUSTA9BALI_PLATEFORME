<?php 
require_once("inc/header.php");
require_once("connexiondb.php");
require_once("contactaction.php");
?>

<div class="container">
    <div class="jumbotron mt-3 bg-light">
    <h2 class="text-center">Contactez-nous</h2>
	<div class="row justify-content-center">
		<div class="col-lg-9">


                    <!--Form with header-->

                    <form   action="contactaction.php" method="post">
                        <div class="card  ">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact</h3>
                                    <p class="m-0">Nous sommes là pour vous orienter</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                            <?php
           if(isset($_SESSION['response'])) { ?>
               <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Bien ! </strong> <?php echo $_SESSION['response']; ?> 
</div>

      <?php    } unset($_SESSION['response']); ?>
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="nom" placeholder="Saisir votre nom " required>
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="prenom" placeholder="Saisir votre prénom " required>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-clipboard text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="sujet" placeholder="Sujet" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-phone-square-alt text-info"></i></div>
                                        </div>
                                        <input type="tel" class="form-control"  name="tel" placeholder="Ex:0624576789"  required>
                                    </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control"  name="email" placeholder="Ex:saad@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea name="message" class="form-control" placeholder="Votre message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input name="submit" type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
        </div>
</div>



<?php

require_once("inc/footer.php");

?>