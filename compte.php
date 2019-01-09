<?php
include('includes/header.php');
?>

    <div class="container"> 
        <div class="row">
            <div class="col-12">

                <div class="card">

                  <h5 class="card-header">
                     Mon compte
                 </h5>

                 <div class="card-body">
                    <form method="post" action="compte.php">
                      <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mesannonces">Mes annonces</label>
                        <input type="text" class="form-control" id="mesannonces" name="mesannonces" required>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="mdp" class="form-control" id="mdp" name="mdp" required placeholder="ex: 1234">
                    </div>
                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" name="remember"> Se souvenir de moi </label>
                            
                            <div class="form-group"><a href="/sendpassword.htm?modal=true">Mot de passe oublié ?</a></div>
                <p>
                    <button type="button" class="btn btn-primary btn-lg">Je modifie mon profil</button>
                    <button type="button" class="btn btn-primary btn-lg">Enregistrer</button>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>