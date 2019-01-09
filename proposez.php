<?php
include('includes/header.php');
?>


<div class="row">
  <div class="col-12">

    <div class="card">

      <h5 class="card-header">
        Pour des déplacements conviviaux proposez vos annonces à tous les autres membres!
      </h5>

      <div class="card-body">

        <form action="formulaire annonce.php" method="post">

          <div class="form-group">
            <label for="pseudo">Ville de départ</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" required placeholder="Ex : Clermont-Ferrand">

          </div>


          <div class="form-group">
            <label for="pseudo">Ville d'arrivée</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" required placeholder="Ex : Paris">

            <div class="form-group">
              <label for="arriver">Date et heure de départ:</label>

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

            <div class="form-group">
              <label for="Informations complémentaires sur votre proposition">Votre message</label>
              <textarea class="form-control" id="message" name="message" rows="3" cols="50">
              </textarea>
            </div>

            <div class="form-group">
              <label>Votre mode de transport </label><br/>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Tramway
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Bus
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Avion
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Train
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Voiture
                </label>
              </div>
              <label>Nombre de places restantes dans votre voiture :</label>
              <br/>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">3</label>
              </div>
            </div>
            <br/>
            <p>
              <button type="button" class="btn btn-primary btn-lg">Vous inscrire</button>
              <button type="button" class="btn btn-primary btn-lg">Vous connecter</button>
            </p>

          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('includes/footer.php');
  ?>