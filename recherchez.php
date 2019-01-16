<?php
include('includes/header.php');
?>

<div class="HomeBlock-inner">
    <!-- <div class="HomeBlock-media HomeBlock-media--primary">
         <div class="HomeBlock-image" style="background-image: url(image/pouce.jpg); aria-hidden="true">
         </div>
         <div class="HomeBlock-content HomeBlock-content--even">
             <h2 class="HomeBlock-title">Vous êtes une femme et vous souhaitez vous déplacer en toute confiance !</h2>
             <p class="u-marginNone u-space-4">
             Votre recherche :


         </div>
     </div>
 </div>-->

    <!--<div class="formulaire">
        <form action="formulaire recherche.php" method="post">

            <fieldset>
                <legend>
                    <p>Votre recherche</p></legend>
                <p>
                    <label> Lieu de départ</label> :

                    <input type="text" name="Lieu de départ" required placeholder="ex : Adresse lieu de départ"> <br/>

                    <label> Lieu d'arrivée</label> :
                    <input type="text" name="ville arrivée" required placeholder="ex : Adresse du lieu d'arrivée">
                    <br/>
                    <label> Date désirée </label>
                    <input type="date" name="Date de départ" required> <br/>
                    <label for="appt">Heure du rendez-vous</label>:
                    <input type="time" id="appt" name="Heure du rendez-vous"
                           min="1:00" max="23:55" required>
                </p>

                <p>

                    <label>Description</label> :<br/>
                    <textarea name="description" rows="8" cols="50"></textarea>
                </p>
            </fieldset>
            <p>
                <input type="submit" value="Vous inscrire">
                <input type="submit" value="Vous connecter">
            </p>
        </form>
    </div>

</div>-->
<div class="container"> 
    <div class="row">
        <div class="col-12">

            <div class="card">

              <h5 class="card-header">
                Recherche - Pour trouvez une annonce, veuillez remplir le formulaire
            </h5>

            <div class="card-body">
                <form method="post" action="contact.php">
                   <div class="form-group">
                    <label for="depart">Lieu de départ</label>
                    <input type="text" class="form-control" id="depart" name="depart" required placeholder="ex: Clermont-Ferrand">
                </div>
                <div class="form-group">
                    <label for="arriver">Lieu d'arrivé</label>
                    <input type="text" class="form-control" id="arriver" name="arriver" required placeholder="ex: Paris">
                </div>
                <div style="overflow:hidden;">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="datetimepicker13"></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker13').datetimepicker({
                                inline: true,
                                sideBySide: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea class="form-control" id="message" name="message" rows="8" cols="50"></textarea>
        </div>
        <div class="col-md-12 text-center"> 
            <button  type="button" class="btn-center">Rechercher</button> 
        </div>
    </div>
    

</div>
</div>

</div>
</div>
</div>

<?php
include('includes/footer.php');
?>