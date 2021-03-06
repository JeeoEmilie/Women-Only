<?php
session_start();
include('includes/header.php');
?>
<div class="card mb-3">
	<img src="images/voyage.jpg" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title text-center">Women Only</h5>
		<p class="card-text text-center">Women Only est une application coopérative qui va vous permettre de vous déplacer sereinement entres femmes. L'application s'adresse aux femmes qui souhaitent voyager ou simplement être accompagnée par d'autres femmes. Vous découvrirez sur notre site des annonces d'autres membres qui proposent différents trajets, que ce soit en voiture, en bus, en tram, en train, en avion ou pourquoi pas juste pour quelques pas dans la rue. 
			<br>Venez partager cette nouvelle expérience avec nous !
		</p>
	</div>
</div>
<?php
if (!isset($_SESSION['id']))
{
?>
<div class="row">
	<div class="col-md-6 text-right"> 
		<button  type="button" class="btn-center">Connexion</button> 
	</div>
	<div class="col-md-6 text-left"> 
		<button  type="button" class="btn-center">Je créer mon compte</button> 
	</div>
</div>
<?php
}
?>

<?php
include('includes/footer.php');
?>