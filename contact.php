<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact us</title>
  </head>
  <body>
  <?php include('_header.html'); ?> 
    <main>
      <section class="coordonnées">
        <div class="adresse">
            <h2>Adresse</h2>
            <p>17 Rue Delandine, <br>69002 Lyon, France</p>
        </div>
        <div class="contact">
            <i id="phone" class="fa fa-phone" style="font-size:36px"></i>
            <h2>Contactez-nous</h2>
            <p>tèl: 04 78 58 46 15</p>
            <p>
  <a href="mailto:agence-got@mail.com" data-to-copy="agence-got@mail.com" class="copyable">
    Cliquez pour copier notre email
  </a>
</p>
        </div>
      </section>
      <article class="texte">
        <div>
          <p>
            Un rêve, une detination, une activité... <br> Nous sommes la pour répondre a vos questions. Un doute sur votre prochain voyage? parlez nous en. Nous répondrons 
            au mieux à toutes vos intérrogations.
          </p>
        </div>
        <div>
          <p>
            N'hésitez pas à nous contactez par mail, téléphone ou de vous déplacez dans nos bureaux. nos conseiller serons la pour vous aiguillez dans vos projets.
          </p>
         
        </div>
      </article>
        <form>
            <h2>Contactez-nous</h2>
            <div id="fields-container">
              <div class="nom">
                <input type="text" placeholder="Nom" required>
                <input type="text" placeholder="Prenom" required>
              </div>
              <input type="email" placeholder="Email" required>
              <textarea placeholder="Message" rows="5"></textarea>
              <div class="button-container">
                <button type="Envoyer">ENVOYER</button>
              </div>
            </div>
          </form>
        <div class="horaires">
            <p>Retrouvez nous dans nos bureau: <br> Du Lundi au Vendredi de 8h30 à 19h et Samedi 9h30 – 12h30 </p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2421506637907!2d4.824980115869721!3d45.7462911791052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ac9e1fd2f%3A0xabc36e768b27c9a0!2sWild%20Code%20School%20-%20Formation%20d%C3%A9veloppeur%20web%20%26%20data%20analyst!5e0!3m2!1sfr!2sfr!4v1584010498999!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </main>
    <hr class="hr-footer">
    <?php include('_footer.html') ?>
     <script src="img-deroulante.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
