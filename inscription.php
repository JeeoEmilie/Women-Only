<?php
include('includes/header.php');
?>

<div class="row">
    <div class="col-12">

        <div class="card">

            <h5 class="card-header">
                Inscription 
            </h5>

            <div class="card-body">
                <form method="post" action="inscription.php" id="form-inscription">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" required placeholder="ex: Micky">

                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="ex: Marie">

                    </div>
                    <div class="form-group">
                        <label for="email">Votre adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="ex: marie@gmail.com">

                    </div>
                    <div class="form-group">
                        <label for="confirm-email">Confirmation Adresse Email</label>
                        <input type="email" class="form-control" id="confirm-email" name="confirm-email" required data-parsley-equalto="#password" placeholder="ex: marie@gmail.com">

                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmation Mot de passe</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" required data-parsley-equalto="#password">

                    </div>
                    <div class="form-group">
                        <label for="buttonfile">Selectionner votre photo (jpg, jpeg)</label>
                        <input type="file" class="form-control-file" id="buttonfile" required>

                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="cgu" name="cgu" required>
                        <label class="form-check-label" for="cgu" >En vous inscrivant vous acceptez nos CGU.</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="button-inscription" class="btn btn-primary btn-lg">Inscription</button>
                    </div>
                    <!--<p><h7 class="card-subtitle mb-2 text-muted">Vous allez recevoir un mail de confirmation.</h7></p>-->
                </form>


            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>