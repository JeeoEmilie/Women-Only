<?php

if (!empty($_POST['pseudo'])) {
	echo 'Envoi du message de : ' . $_POST['pseudo'];
}

?>

<?php
include('includes/header.php');
?>


<div class="container"> 
    <div class="row">
        <div class="col-12">

            <div class="card">
                
              <h5 class="card-header">
                 Contact - Pour nous contacter, veuillez remplir le formulaire
             </h5>
             
             <div class="card-body">
                <!--<h6 class="card-subtitle mb-2 text-muted">Merci de remplir le formulaire pour nous contacter</h6>-->
                <form method="post" action="contact.php">
                  <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required placeholder="ex: Micky">
                </div>
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="ex: marie@gmail.com">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea class="form-control" id="message" name="message" rows="8" cols="50"></textarea>
                </div>

                <p><h7 <a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Envoyer</h7></p>


                </div>
            </div>
            
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>