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
  <header>
  <?php include('_header.html'); ?>
  </header>

  <h1 class="reservation">Formulaire de réservation</h1>

<section class="formulaire">

<section class="destination">
  <label for="destination">Où?</label>
  <select class="select" name="destination" id="destination" onclick = "changePrix()">
    <option value=""></option>
    <option value="port_real">Port Real</option>
    <option value="winterfell">Winterfell</option>
  </select>
</section>



<section class="date">
<section>
  <label for="start">Départ</label>
  <input type="date" id="start" name="start" min="2020-06-01" max="2021-12-24">
</section>
<section>
  <label for="return">Retour</label>
  <input type="date" id="return" name="return" min="2020-06-07" max="2021-12-31">
</section>
</section>

<section class="voyageur">
  <input id="voyageur" type="number" placeholder="Nombre de personnes" min="1" max="15" required onclick = "changePrix()">
</section>

<section>
  <article id="po"><span id="spanPO">0</span> <img src="https://vignette.wikia.nocookie.net/paradisebay/images/1/10/Gold.png/revision/latest?cb=20170612200026&path-prefix=fr" alt="pièce d'or"></article>
</section>

<section class="button">
  <button type="button" class="btn btn-secondary btn-lg btn-block ">Réservez</button>
</section>


</section>


<footer>
<?php include('_footer.html'); ?>
</footer>
<script src="img-deroulante.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>