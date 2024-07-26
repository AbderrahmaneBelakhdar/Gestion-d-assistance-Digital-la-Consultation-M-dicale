<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dzdoc.css">

    <title>AS-S3IFNI &middot; Trouver un médecin en Algerie et prenez rendez-vous en ligne</title>

    
  </head>
  <body>

    <!-- Header -->

  <?php
include '../conn.php';
session_start(); 

//$id=$_GET['id'];


 if(!isset($_SESSION['id'])){

?>

    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img class="navbar-brand" src='../images/LOGO as-s3ifni1.png'  href="index nouv.html">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 ">
              <li class="nav-item">
                <a class="nav-link active" href="accueilm.php">ACCUEIL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"href="#">&nbsp;S'inscrire</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="../inscriptionP.html">Patient</a>
                  <a class="dropdown-item" href="../inscriptionMed.php">Médecin</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">&nbsp;Se connecter</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="../connexionP.php">Patient</a>
                  <a class="dropdown-item" href="../connexionM.php">Médecin</a>
                </div>
              </li>
              
            </ul>

            <ul class="navbar-nav ">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="#">Contact Us</a>
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
          <img class="navbar-brand" src='../images/LOGO as-s3ifni1.png'  href="index nouv.html">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 ">
              <li class="nav-item">
                <a class="nav-link active" href="accueilm.php">ACCUEIL</a>
              </li>
 
              <li class="nav-item">
                <a class="nav-link active" href="#">Mon Compte</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="Mes RDV.php">Mes RDV</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="../deconnexion.php">&nbsp;Se Deconnecter</a>
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
      <form>
      <div class="form-group">
        <label >Choisir la spécialité</label>
        <select class="form-control" placeholder="Choisir la spécialité">
          <option value=""></option>
          <option value='98'>Acupuncteur</option><option value='57'>Algologue</option><option value='2'>Allergologue</option><option value='3'>Anatomopathologiste</option><option value='4'>Anesthésiste-réanimateur</option><option value='5'>Angiologue</option><option value='68'>Audioprothésiste</option><option value='8'>Cardiologue</option><option value='9'>Cardiologue pédiatrique</option><option value='89'>Centre d'imagerie médicale</option><option value='69'>Chiropracteur</option><option value='10'>Chirurgien cardiaque</option><option value='11'>Chirurgien cardiaque pédiatrique</option><option value='65'>Chirurgien dentiste</option><option value='12'>Chirurgien esthétique et plastique</option><option value='80'>Chirurgien généraliste</option><option value='81'>Chirurgien infantile </option><option value='13'>Chirurgien maxillo-facial</option><option value='90'>Chirurgien Pédiatrique </option><option value='14'>Chirurgien thoracique</option><option value='15'>Chirurgien vasculaire</option><option value='16'>Chirurgien viscérale</option><option value='17'>Chirurgien viscérale pédiatrique</option><option value='93'>Clinique chirurgicale</option><option value='96'>Clinique d’hémodialyse</option><option value='94'>Clinique médicale</option><option value='95'>Clinique médico-chirurgicale</option><option value='97'>Clinique spécialisée</option><option value='54'>Dermato-vénérologue</option><option value='70'>Diététicien</option><option value='19'>Endocrino-diabetologue</option><option value='20'>Gastro-entéro-hepatologue</option><option value='21'>Généticien</option><option value='22'>Gérontologue - gériatre</option><option value='58'>Gynéco-obstetricien</option><option value='23'>Hématologue</option><option value='56'>Hépatologue</option><option value='83'>Infectiologue</option><option value='72'>Kinésithérapeute</option><option value='92'>Maladies et Chirurgie CardioVasculaire</option><option value='7'>Médecin Biologiste Laboratoire</option><option value='24'>Médecin du sport</option><option value='25'>Médecin du travail</option><option value='1'>Médecin géneraliste</option><option value='26'>Médecin interniste</option><option value='27'>Médecin légiste</option><option value='28'>Médecin nucléaire</option><option value='29'>Médecin physique et de réadaptation</option><option value='91'>Médecine esthétique</option><option value='33'>Néphrologue</option><option value='34'>Néphrologue pédiatrique</option><option value='30'>Neuro-chirurgien</option><option value='100'>Neuro-physiologiste</option><option value='101'>Neuro-psychiatre</option><option value='31'>Neurologue</option><option value='73'>Nutritionniste</option><option value='35'>Onco-cancerologue</option><option value='36'>Oncologue médical</option><option value='53'>Ophtalmologue</option><option value='99'>Optométriste</option><option value='85'>ORL</option><option value='74'>Orthophoniste</option><option value='75'>Orthoptiste</option><option value='67'>Ostéopathe</option><option value='52'>Pédiatre</option><option value='51'>Phlébologue</option><option value='38'>Pneumo-phtysio-allergologue</option><option value='76'>Podologue</option><option value='55'>Proctologue</option><option value='39'>Psychiatre</option><option value='77'>Psychologue</option><option value='40'>Radiologue</option><option value='41'>Radiothérapeute</option><option value='43'>Réanimateur médical</option><option value='44'>Réanimateur pédiatrique</option><option value='87'>Rééducation fonctionnelle</option><option value='42'>Rhumatologue</option><option value='45'>Sexologue</option><option value='46'>Stomatologue</option><option value='48'>Traumato-orthopédiste</option><option value='47'>Traumato-orthopédiste pédiatrique</option><option value='49'>Urologue</option><option value='50'>Urologue pédiatrique</option>            </select>
      </div>
      <div class="form-group">
        <label >Choisir la région</label>
        <select  class="form-control" placeholder="Choisir la région">
          <option value=""></option>
          <option value='1'>Adrar</option><option value='2'>Chlef</option><option value='3'>Laghouat</option><option value='4'>Oum El Bouaghi</option><option value='5'>Batna</option><option value='6'>Béjaia</option><option value='7'>Biskra</option><option value='8'>Béchar</option><option value='9'>Blida</option><option value='10'>Bouira</option><option value='11'>Tamanrasset</option><option value='12'>Tebessa</option><option value='13'>Tlemcen</option><option value='14'>Tiaret</option><option value='15'>Tizi Ouzou</option><option value='16'>Alger</option><option value='17'>Djelfa</option><option value='18'>Jijel</option><option value='19'>Sétif</option><option value='20'>Saida</option><option value='21'>Skikda</option><option value='22'>Sdidi Bel Abbes</option><option value='23'>Annaba</option><option value='24'>Guelma</option><option value='25'>Constantine</option><option value='26'>Médéa</option><option value='27'>Mostaganem</option><option value='28'>M'Sila</option><option value='29'>Mascara</option><option value='30'>Ouargla</option><option value='31'>Oran</option><option value='32'>El Bayadh</option><option value='33'>Illizi</option><option value='34'>Bordj Bou Arreridj</option><option value='35'>Boumerdess</option><option value='36'>El Tarf</option><option value='37'>Tindouf</option><option value='38'>Tissemsilt</option><option value='39'>El Oued</option><option value='40'>Khenchela</option><option value='41'>Souk Ahras</option><option value='42'>Tipaza</option><option value='43'>Mila</option><option value='44'>Ain Defla</option><option value='45'>Nâama</option><option value='46'>Ain Temouchent</option><option value='47'>Ghardaia</option><option value='48'>Relizane</option>            </select>
      </div>
     <!-- <button type="submit" class="btn btn-block btn-info" href="affichageMedcins.phps" ><b>Chercher</b>&nbsp;&nbsp;<i class="fa fa-search"></i></button>



Rani habess Hnaaaaa
    -->
<a type="submit" class="btn btn-block btn-info" href="affichageMedcins.php" ><b>Chercher</b>&nbsp;&nbsp;<i class="fa fa-search"></i></a>
    
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
      <img src="../images/telemed.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../images/slide03.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../images/slide04.jpg" style="width:100%">
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
  





    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/main.js"></script>


  </body>
</html>