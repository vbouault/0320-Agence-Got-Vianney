<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
<body>


  
  <?php include('_header.html'); ?>

 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
       <div class="modal-header">
       <h5 class="modal-title" id="exampleModalCenterTitle">Bonjour <span id="modalName" ></span>, merci de vérifier les informations suivante avant de validez votre réservation :</h5> 
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div> 
      <div class="modal-body">
      
        
        <div><article>Lieu : </article><span id="modalLieu" ></span></div>
        <div><article>Nombre de voyageurs : </article><span id="modalVoyageurs" ></span></div>
        <div><article>Date départ : </article><span id="modalDepart" ></span></div>
        <div><article>Date retour : </article><span id="modalRetour" ></span></div>
        <div><article>Prix : </article><span id="modalPrix" ></span><span>€</span></div>
      </div>
      <div class="modal-footer">
        <div class="spinner-border text-secondary" role="status" id="charge">
          <span class="sr-only">Loading...</span>
        </div>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-outline-success" id="validResa">Valider la reservation</button>
      </div>
    </div>
  </div>
</div>



  <h1 class="reservation">Formulaire de réservation</h1>

<section class="formulaire">
  <section class="destination">
    <label for="resaNom">Qui? <span id="errorName"></span></label>
    <input type="text" id="resaNom" >
  </section>
  <section class="destination">
    <label for="destination">Où? <span id="errorDestination"></span></label>
    <select class="select formClass" name="destination" id="destination" onclick = "changePrix()">
      <option value=""></option>
      <option value="Port Real">Port Real</option>
      <option value="Winterfell">Winterfell</option>
    </select>
</section>



<section class="date">
<section>
  <label for="start">Départ <span id="errorDepart"></span></label>
  <input   type="date" id="start" name="start" min="2020-06-01" max="2021-12-24">
</section>
<section>
  <label for="return">Retour <span id="errorRetour"></span></label>
  <input   type="date" id="return" name="return" min="2020-06-07" max="2021-12-31">
</section>
</section>

<section class="voyageur">
<label for="return">Nombre de voyageur <span id="errorVoyageur"></span></label>
  <input   id="voyageur" type="number"  min="1" max="15" required onclick = "changePrix()">
</section>

<section>
  <article id="po"><span id="spanPO">0</span> <img src="https://vignette.wikia.nocookie.net/paradisebay/images/1/10/Gold.png/revision/latest?cb=20170612200026&path-prefix=fr" alt="pièce d'or"></article>
</section>

<section class="button">
  <button id="boutonResa" type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Réservez</button>
</section>


</section>


<footer>
<?php include('_footer.html'); ?>
</footer>
<script src="resa.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>