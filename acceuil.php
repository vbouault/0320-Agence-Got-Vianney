<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Game of throne</title>
        <meta name="author" content="Vianney Bouault">
        <meta name="description" content="Accueil">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">  
    </head>
    <body>
       <?php include('_header.html'); ?> 
            
            <section class="headAcceuil" id="headAcc">
                <section id="conteneurimgSlide">
                    <img  id="imgSlide"  src="https://images8.alphacoders.com/932/thumb-1920-932618.jpg"  alt="image slider" />
                </section>
                <section class="conteneurcolone">
                <h2 class=titreAcceuil>Voyagez dans l'univers de <span class="petit">GOT</span><span class="grand">Game of Thrones</span></h2>
                <section class="conteneurLigne">
                    
                        <input  class="btnSuivant" type="button" value="<" title="Photo précédente" onclick="slide('arriere')"/>
                    
                    <section class="conteneurFiltre">
                        <select name="destination" id="select" onchange="switchTheme()">
                            <option value="">Choisissez votre destination</option>
                            <option value="0">Winterfell</option>
                            <option value="1">Port Real</option>
                        </select>
                        
                        <button type="button" class=" boutonAcc btn btn-dark" onclick="go()">GO !</button>
                    </section>
                   
                   <input class="btnSuivant" type="button" value=">" title="Photo suivante" onclick="slide('avant')"/>
                </section>
                  
                </section>
                
            </section>
         
            <section class="phraseAcceuil">
                <article>Choisissez votre déstination, puis partez à la conquète de Westeros en quelques clics</article>
            </section>
            <section class="carte">
                <iframe src="https://www.google.com/maps/d/embed?mid=1rObkxhdJkIpo9Mcwu_f5Hy2hVvSL8XBa" width="640" height="480"></iframe>
            </section>

            <?php include('_footer.html'); ?> 
            
            <script src="img-deroulante.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>