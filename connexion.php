<?php
session_start();

if (isset($_POST['login'])) {

try{
    $strConnexion = 'mysql:host=localhost;dbname=womenonly';
    $pdo = new PDO($strConnexion,'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
    $message = 'ERREUR PDO dans' . $e->getFile() . ' L. ' .$e->getLine() . ' : ' .$e->getMessage();
    die($message);
    }

//  Récupération de l'utilisateur et de son pass hashé
$req = $pdo->prepare('SELECT id, password FROM user WHERE login = :login');
$req->execute(array(
    'login' => $_POST['login']));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['login'] = $_POST['login'];
        header('location: /');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
}


include('includes/header.php');
?>

<div class="row">
    <div class="col-12">

        <div class="card">
            <img src="images/connexion2.jpg" class="card-img-top" alt="...">
            <h5 class="card-header">
                Connexion à votre compte
            </h5>
            <div class="card-body">
                <form method="post" action="connexion.php" id="form-connexion">
                    <div class="form-group form-check">
                        <label for="login">Pseudo</label>
                        <input type="text" class="form-control" id="login" name="login" required placeholder="ex: Micky">
                    </div>
                    <div class="form-group form-check">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" name="remember"> Se souvenir de moi </label>
                        </div>

                        <div class="form-group">
                            <a href="/sendpassword.htm?modal=true">Mot de passe oublié ?</a>
                        </div>


                        <div class="col-md-12 text-center"> 
                            <button  type="submit" class="btn-center">Connexion</button> 
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
include('includes/footer.php');
?>