<?php
include('includes/header.php');
?>

<!--<div class="HomeBlock-inner">

    <div class="connexion">
        <form action="connexion.php" method="post">
            <fieldset>
                <legend> CONNEXION</legend>

                <p>

                Pour récupérer votre mot de passe</p>
                <p>
                    <a href="mentions-legales.html"><br/>
                    "ICI"</a>? </p>

                    <p>


                        <label for="pseudo">Votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" required/>

                        <br/>

                        <label for="pass">Votre mot de passe </label> : <input type="password" name="pass" id="pass" required/>

                    </p>
                    <p> Mot de passe oublié ? (ici mettre un lien qui retourne vers une page ou il faudra rentrer son mail pour récup mot de passe)</p>

                    <p>
                        <input type="submit" value="Connexion par email">

                    </p>

                </fieldset>
            </form>


            <fieldset>
                <legend> Pas encore de compte ?</legend>

                <form>
                    <p>
                        <input type="submit" value="Inscription par email">

                    </p>
                </form>
            </fieldset>

        </div>
    </div> -->

    <div class="container"> 
        <div class="row">
            <div class="col-12">

                <div class="card">

                  <h5 class="card-header">
                   Connexion à votre compte
               </h5>

               <div class="card-body">
                <form method="post" action="contact.php">
                  <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required placeholder="ex: Micky">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="mdp" class="form-control" id="mdp" name="mdp" required placeholder="ex: 1234">
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember"> Se souvenir de moi </label>
                        
                        <div class="form-group"><a href="/sendpassword.htm?modal=true">Mot de passe oublié ?</a></div>
               <!-- <p><h7 <a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Envoyer</h7></p>
                <div class="form-group"><a href="/inscription.htm?modal=true">Je crée mon compte !</a></div>-->
                
                <p>
                    <button type="button" class="btn btn-primary btn-lg">Connexion</button>
                    <button type="button" class="btn btn-primary btn-lg">Je créer mon compte</button>
                </p>

                
            </form>
        </div>
    </div>

                <!--<div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="mdp" class="form-control" id="mdp" name="mdp" required placeholder="ex: 1234">
                </div>
                <div class="form-group"><a href="/sendpassword.htm?modal=true">Mot de passe oublié ?</a></div>
                <p><h7 <a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Envoyer</h7></p>
                    <div class="form-group"><a href="/inscription.htm?modal=true">Je crée mon compte !</a></div>
                </div>
            </div>
            
        </div>-->
    </div>
</div>

<?php
include('includes/footer.php');
?>