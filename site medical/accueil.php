<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dzdoc.css">

    <title>AS-S3IFNI &middot; Trouver un médecin en Algerie et prenez rendez-vous en ligne</title>

    
  </head>
  <body>

    <!-- Header -->

  <?php
include './conn.php';
session_start(); 

//$id=$_GET['id'];


 if(!isset($_SESSION['id'])){

?>

    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img class="navbar-brand" src='images/LOGO as-s3ifni1.png'  href="index nouv.html">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 ">
              <li class="nav-item">
                <a class="nav-link active" href="accueil.php">ACCUEIL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"href="#">&nbsp;S'inscrire</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="inscriptionP.html">Patient</a>
                  <a class="dropdown-item" href="inscriptionMed.php">Médecin</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">&nbsp;Se connecter</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="connexionP.php">Patient</a>
                  <a class="dropdown-item" href="connexionM.php">Médecin</a>
                </div>
              </li>
              
            </ul>

            
          </div>
        </div>
      </nav>
    </header>




<?php

  }

else{

?>


<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img class="navbar-brand" src='images/LOGO as-s3ifni1.png'  href="index nouv.html">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 ">
              <li class="nav-item">
                <a class="nav-link active" href="accueil.php">ACCUEIL</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="deconnexion.php">&nbsp;Se Deconnecter</a>
              </li>
              
            </ul>

          </div>
        </div>
      </nav>
    </header>










<?php

}
?>
    <!-- END header -->
    &nbsp;&nbsp;
    &nbsp;&nbsp;

<!-- trouvez votre medecin  -->
<div class="container">
  <div class="row mar-b-20">
    <div class="col-md-6 pad-b-35 box-shadow">
      <h1 class="dzdoc-green">
        Trouvez votre médecin
      </h1>
      <form name="form" action="" method="post" >

      <div class="form-group"> 
       <label >Choisir la spécialité</label>
        <select class="form-control" placeholder="Choisir la spécialité" name="specialite"> 
       <option value=""disabled selected></option>
        <option value='Acupuncteur'>Acupuncteur</option><option value='Algologue'>Algologue</option><option value='Allergologue'>Allergologue</option><option value='Anatomopathologiste'>Anatomopathologiste</option><option value='Anesthésiste-réanimateur'>Anesthésiste-réanimateur</option><option value='Angiologue'>Angiologue</option><option value='Audioprothésiste'>Audioprothésiste</option><option value='Cardiologue'>Cardiologue</option><option value='Cardiologue pédiatrique'>Cardiologue pédiatrique</option><option value='Centre d imagerie médicale'>Centre d'imagerie médicale</option><option value='Chiropracteur'>Chiropracteur</option><option value='Chirurgien cardiaque'>Chirurgien cardiaque</option><option value='Chirurgien cardiaque pédiatrique'>Chirurgien cardiaque pédiatrique</option><option value='Chirurgien dentiste'>Chirurgien dentiste</option><option value='Chirurgien esthétique et plastique'>Chirurgien esthétique et plastique</option><option value='Chirurgien généraliste'>Chirurgien généraliste</option><option value='Chirurgien infantile '>Chirurgien infantile </option><option value='Chirurgien maxillo-facial'>Chirurgien maxillo-facial</option><option value='Chirurgien Pédiatrique'>Chirurgien Pédiatrique </option><option value='Chirurgien thoracique'>Chirurgien thoracique</option><option value='Chirurgien vasculaire'>Chirurgien vasculaire</option><option value='Chirurgien viscérale'>Chirurgien viscérale</option><option value='Chirurgien viscérale pédiatrique'>Chirurgien viscérale pédiatrique</option>odialyse</option><option value='Dermato-vénérologue'>Dermato-vénérologue</option><option value='Diététicien'>Diététicien</option><option value='Endocrino-diabetologue'>Endocrino-diabetologue</option><option value='Gastro-entéro-hepatologue'>Gastro-entéro-hepatologue</option><option value='Généticien'>Généticien</option><option value='Gérontologue - gériatre'>Gérontologue - gériatre</option><option value='Gynéco-obstetricien'>Gynéco-obstetricien</option><option value='Hématologue'>Hématologue</option><option value='Hépatologue'>Hépatologue</option><option value='Infectiologue'>Infectiologue</option><option value='Kinésithérapeute'>Kinésithérapeute</option><option value='Maladies et Chirurgie CardioVasculaire'>Maladies et Chirurgie CardioVasculaire</option><option value='Médecin Biologiste Laboratoire'>Médecin Biologiste Laboratoire</option><option value='Médecin du sport'>Médecin du sport</option><option value='Médecin du travail'>Médecin du travail</option><option value='Médecin géneraliste'>Médecin géneraliste</option><option value='Médecin interniste'>Médecin interniste</option><option value='Médecin légiste'>Médecin légiste</option><option value='Médecin nucléaire'>Médecin nucléaire</option><option value='Médecin physique et de réadaptation'>Médecin physique et de réadaptation</option><option value='Médecine esthétique'>Médecine esthétique</option><option value='Néphrologue'>Néphrologue</option><option value='Néphrologue pédiatrique'>Néphrologue pédiatrique</option><option value='Neuro-chirurgien'>Neuro-chirurgien</option><option value='Neuro-physiologiste'>Neuro-physiologiste</option><option value='Neuro-psychiatre'>Neuro-psychiatre</option><option value='Neurologue'>Neurologue</option><option value='Nutritionniste'>Nutritionniste</option><option value='Onco-cancerologue'>Onco-cancerologue</option><option value='Oncologue médical'>Oncologue médical</option><option value='Ophtalmologue'>Ophtalmologue</option><option value='Optométriste'>Optométriste</option><option value='ORL'>ORL</option><option value='Orthophoniste'>Orthophoniste</option><option value='Orthoptiste'>Orthoptiste</option><option value='Ostéopathe'>Ostéopathe</option><option value='Pédiatre'>Pédiatre</option><option value='Phlébologue'>Phlébologue</option><option value='Pneumo-phtysio-allergologue'>Pneumo-phtysio-allergologue</option><option value='Podologue'>Podologue</option><option value='Proctologue'>Proctologue</option><option value='Psychiatre'>Psychiatre</option><option value='Psychologue'>Psychologue</option><option value='Radiologue'>Radiologue</option><option value='Radiothérapeute'>Radiothérapeute</option><option value='Réanimateur médical'>Réanimateur médical</option><option value='Réanimateur pédiatrique'>Réanimateur pédiatrique</option><option value='Rééducation fonctionnelle'>Rééducation fonctionnelle</option><option value='Rhumatologue'>Rhumatologue</option><option value='Sexologue'>Sexologue</option><option value='Stomatologue'>Stomatologue</option><option value='Traumato-orthopédiste'>Traumato-orthopédiste</option><option value='Traumato-orthopédiste pédiatrique'>Traumato-orthopédiste pédiatrique</option><option value='Urologue'>Urologue</option><option value='Urologue pédiatrique'>Urologue pédiatrique</option>            </select>
        </div>
      <div class="form-group">
        <label >Choisir la région</label>
        <select  class="form-control" placeholder="Choisir la région" name="wilaya">
                            <option value="" disabled selected></option>
                            <option value="Adrar" >Adrar</option>
                            <option value="Chlef" >Chlef</option>
                            <option value="Laghouat" >Laghouat</option>
                            <option value="Oum El Bouaghi" >Oum El Bouaghi</option>
                            <option value="Batna" >Batna</option>
                            <option value="Béjaia" >Béjaia</option>
                            <option value="Biskra" >Biskra</option>
                            <option value="Béchar" >Béchar</option>
                            <option value="Blida" >Blida</option>
                            <option value="Bouira" >Bouira</option>
                            <option value="Tamanrasset" >Tamanrasset</option>
                            <option value="Tebessa" >Tebessa</option>
                            <option value="Tlemcen" >Tlemcen</option>
                            <option value="Tiaret" >Tiaret</option>
                            <option value="Tizi Ouzou" >Tizi Ouzou</option>
                            <option value="Alger" >Alger</option>
                            <option value="Djelfa" >Djelfa</option>
                            <option value="Jijel" >Jijel</option>
                            <option value="Sétif" >Sétif</option>
                            <option value="Saida" >Saida</option>
                            <option value="Skikda" >Skikda</option>
                            <option value="Sidi Bel Abbes" >Sidi Bel Abbes</option>
                            <option value="Annaba" >Annaba</option>
                            <option value="Guelma" >Guelma</option>
                            <option value="Constantine" >Constantine</option>
                            <option value="Médéa" >Médéa</option>
                            <option value="Mostaganem" >Mostaganem</option>
                            <option value="M'Sila" >M'Sila</option>
                            <option value="Mascara" >Mascara</option>
                            <option value="Ouargla" >Ouargla</option>
                            <option value="Oran" >Oran</option>
                            <option value="El Bayadh" >El Bayadh</option>
                            <option value="Illizi" >Illizi</option>
                            <option value="Bordj Bou Arreridj" >Bordj Bou Arreridj</option>
                            <option value="Boumerdess" >Boumerdess</option>
                            <option value="El Tarf" >El Tarf</option>
                            <option value="Tindouf" >Tindouf</option>
                            <option value="Tissemsilt" >Tissemsilt</option>
                            <option value="El Oued" >El Oued</option>
                            <option value="Khenchela" >Khenchela</option>
                            <option value="Souk Ahras" >Souk Ahras</option>
                            <option value="Tipaza" >Tipaza</option>
                            <option value="Mila" >Mila</option>
                            <option value="Ain Defla" >Ain Defla</option>
                            <option value="Nâama" >Nâama</option>
                            <option value="Ain Temouchent" >Ain Temouchent</option>
                            <option value="Ghardaia" >Ghardaia</option>
                            <option value="Relizane" >Relizane</option>
                            <option value="Timimoun" >Timimoun</option>
                            <option value="Bordj Badji Mokhtar" >Bordj Badji Mokhtar</option>
                            <option value="Ouled Djellal" >Ouled Djellal </option>
                            <option value="Béni Abbès" >Béni Abbès</option>
                            <option value="Ain Salah" >Ain Salah </option>
                            <option value="Ain Guezzam" >Ain Guezzam</option>
                            <option value="Touggourt" >Touggourt </option>
                            <option value="Djanet" >Djanet</option>
                            <option value="El M'Ghair" >El M'Ghair</option>
                            <option value="El Meniaa" >El Meniaa</option>
                          </select>
                            </div>
             

     <!-- <button type="submit" class="btn btn-block btn-info" href="affichageMedcins.phps" ><b>Chercher</b>&nbsp;&nbsp;<i class="fa fa-search"></i></button>
-->  
<a type="submit" name="submit" class="btn btn-block btn-info"  href="affichageMedcins.php"  > <b>Chercher</b>&nbsp;&nbsp;<i class="fa fa-search"></i></a>

  
</form>




</div>
    <div class="col-md-6">
      <div class="h-service">
        <div class="icon-wrap ico-bg round-fifty">
        </div>
   
       <div class="h-service-content">
          <h3 class="dzdoc-green">Vous êtes médecin ?</h3>
          <p>Vous êtes un professionnel de la santé ? Vous souhaitez développer votre activité ? Nous sommes là pour vous y aider.</p>
          <a href="decouvre services medc.php" class="btn">Découvrez nos services</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- FIN -->   

<div>
  <pre>
    
  </pre>
</div>
 <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/telemed.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/slide03.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/slide04.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <!-- FIN -->
  

<!-- Ecriture -->
<pre> 

  
</pre>
<div class="container pad-t-50">
  <div class="row mar-b-20">
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty pull-left">
        <i class="fa fa-search">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Rechercher
        </h3>
        <p>
          Sélectionnez la spécialité souhaitée et trouvez un médecin, un dentiste ou une clinique près de chez vous.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty">
        <i class="fa fa-hand-pointer-o">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Choisir
        </h3>
        <p>
          Accédez à toutes les informations nécessaires pour vous aider à choisir votre médecin en toute simplicité.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty">
        <i class="fa fa-calendar">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Réserver
        </h3>
        <p>
          Consultez la disponibilité de votre médecin et réservez le rendez-vous qui vous convient le plus.
        </p>
      </div>
    </div>
  </div>
  <div class="row mar-b-50">
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty">
        <i class="fa fa-gift">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Gratuit
        </h3>
        <p>
          Prenez un rendez-vous chez votre médecin sans aucun frais. Notre service est gratuit, simple et sécurisé.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty">
        <i class="fa fa-bell-o">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Notification (Rappel SMS)
        </h3>
        <p>
          Recevez un rappel de rendez-vous par email ou SMS contenant toutes les informations nécessaires la veille de votre rendez-vous.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="icon-wrap-left ico-bg round-fifty">
        <i class="fa fa-heart-o">
        </i>
      </div>
      <div class="content">
        <h3 class="title">
          Favoris
        </h3>
        <p>
          Gagnez plus de temps et retrouvez rapidement vos médecins préférés en utilisant votre liste de favoris.
        </p>
      </div>
    </div>
  </div>
</div>
  





    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>