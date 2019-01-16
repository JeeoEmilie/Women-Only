<?php

$erreur = '';

if (isset($_POST['login'])) {

    // Connexion base données
    try{
        $strConnexion = 'mysql:host=localhost;dbname=womenonly';
        $pdo = new PDO($strConnexion,'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $message = 'ERREUR PDO dans' . $e->getFile() . ' L. ' .$e->getLine() . ' : ' .$e->getMessage();
        die($message);
    }

    // verfier si login existe deja
    $req = $pdo->prepare('SELECT COUNT(id) AS nb FROM user WHERE login = :login');
    $req->execute(array('login' => $_POST['login']));
    $resultat = $req->fetch();

    if ($resultat["nb"] == 0){

        // Verifier si email existe deja
        $req = $pdo->prepare('SELECT COUNT(id) AS nb FROM user WHERE email = :email');
        $req->execute(array('email' => $_POST['email']));
        $resultat = $req->fetch();

        if ($resultat["nb"] == 0){
            // Insertion de l'utilisateur en base
            $req = $pdo->prepare('INSERT INTO `user` (`id`, `login`, `prenom`, `birthdate`, `email`,`password`) VALUES (NULL, :login, :prenom, :birthdate, :email, :password);');
            $req->execute(array(
                'login' => $_POST['login'],
                'prenom' => $_POST['prenom'],
                'birthdate' => $_POST['birthdate'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ));

            // Recuperer l'id de l'utilisateur
            $req = $pdo->prepare('SELECT id FROM user WHERE login = :login');
            $req->execute(array('login' => $_POST['login']));
            $resultat = $req->fetch();

            // Mise en session des infos utilisateurs
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['login'] = $_POST['login'];

            header('location: /');
        } else {
            $erreur = 'L\'adresse email existe déjà';
        }     
    } else {
        $erreur = 'Le Pseudo existe déjà';
    } 
}

include('includes/header.php');
?>

<div class="row">
    <div class="col-12">

        <div class="card">

            <h5 class="card-header">
                Inscription 
            </h5>

            <div class="card-body">

                <?php
                if ($erreur != '')
                {
                    ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $erreur; ?>
                    </div>
                    <?php
                }
                ?>

                <form method="post" action="inscription.php" id="form-inscription">
                    <div class="form-group form-check">
                        <label for="login">Pseudo</label>
                        <input type="text" class="form-control" id="login" name="login" required placeholder="ex: Micky">

                    </div>
                   
                    <div class="form-group form-check">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="ex: Marie">

                    </div>
                    <div class="form-group form-check">
                        <label for="birthdate">Date de naissance</label>
                        <input type="Date" class="form-control" id="birthdate" name="birthdate" required>

                    </div>
                    <div class="form-group form-check">
                        <label for="email">Votre adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="ex: marie@gmail.com">

                    </div>
                    <div class="form-group form-check">
                        <label for="confirm-email">Confirmation Adresse Email</label>
                        <input type="email" class="form-control" id="confirm-email" name="confirm-email" required data-parsley-equalto="#email" placeholder="ex: marie@gmail.com">

                    </div>
                    <div class="form-group form-check">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                    <div class="form-group form-check">
                        <label for="confirm-password">Confirmation Mot de passe</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" required data-parsley-equalto="#password">

                    </div>
                    <div class="form-group form-check">
                        <label for="buttonfile">Selectionner votre photo (jpg, jpeg)</label>
                        <input type="file" class="form-control-file" id="buttonfile" required>

                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="cgu" name="cgu" required>
                        <label class="form-check-label" for="cgu" >En vous inscrivant vous acceptez nos CGU.</label>
                    </div>
                    <p><div class="col-md-12 text-center"> 
                        <button  type="submit" class="btn-center">Je créer mon compte</button> 
                    </div></p>
                    <!--<p><h7 class="card-subtitle mb-2 text-muted">Vous allez recevoir un mail de confirmation.</h7></p>-->
                </form>


            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>
