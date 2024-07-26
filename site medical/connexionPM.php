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
                  <a class="dropdown-item" href="inscriptionMed.html">Médecin</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">&nbsp;Se connecter</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="connexionP.html">Patient</a>
                  <a class="dropdown-item" href="connexionM.php">Médecin</a>
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
          <img class="navbar-brand" src='images/LOGO as-s3ifni1.png'  href="index nouv.html">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 ">
              <li class="nav-item">
                <a class="nav-link active" href="accueilo.html">ACCUEIL</a>
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

    <div class="container body-content">
        



<div class="container">


                    <div class="row justify-content-start" style="padding-top:10px;">

                <div class="col" style="padding-top:10px;">

<a href="connexionM.php">
<div  style=" padding-left: 200px; color: black; font-size: 20px; " >MEDECIN</div>
<img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px; " src="images/medecin icon 2.jpg" /><br><br>


                </div>
                <div class="col" style="padding-top:10px;">
</a>
<a href="connexionP.php"> 
<div  style="color: black; padding-left: 160px;font-size: 20px; ">PATIENT</div> 
<img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px; " src="images/pateint icon.png" /><br><br>

</a>

                </div>
                </div>
                


</div>



    </div>


  </body>
</html>