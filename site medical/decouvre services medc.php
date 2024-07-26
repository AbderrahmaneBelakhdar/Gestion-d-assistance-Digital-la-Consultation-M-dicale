<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS-S3IFNI &middot; Découvrez nos services pour professionnel de la santé</title>

    <!-- external css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >


<style>


/* Header */
header {
 /* position: absolute; */
  top: 0;
  left: 0;
  width: 110%;
  z-index: 5;
  padding: 0px 0; }
  @media (min-width: 768px) {
    header {
      padding: 10px 0; } }
  header .navbar-brand {
    margin: -80px;
    width: 250px;
    height: 80px; 
  }

    header .navbar {
    background: rgb(0, 124, 17) !important;
    padding-top: .5rem;
    padding-bottom: .5rem; }
    @media (min-width: 768px) {
      header .navbar {
        padding-top: 0;
        padding-bottom: 0;
        background: none !important;
        position: relative; } }
    header .navbar .nav-link {
      padding: 1.7rem 1rem;
      outline: none !important;
      font-size: 1rem;
      color: #4BAE51 !important; }
      @media (max-width: 1199.98px) {
        header .navbar .nav-link {
          padding: .5rem 0rem; } }
      header .navbar .nav-link.active {
        color: #4BAE51 !important; }
    header .navbar .dropdown-menu {
      font-size: 14px;
      border-radius: 4px;
      border: none;
      -webkit-box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
      box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
      min-width: 13em;
      margin-top: -10px; }
      header .navbar .dropdown-menu:before {
        bottom: 100%;
        left: 10%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: rgb(22, 22, 22);
        border-width: 7px; }
        @media (max-width: 991.98px) {
          header .navbar .dropdown-menu:before {
            display: none; } }
      header .navbar .dropdown-menu .dropdown-item:hover {
        background: #4BAE51;
        color: rgba(40, 90, 25, 0.795) }
      header .navbar .dropdown-menu .dropdown-item.active {
        background: #4BAE51;
        color: rgb(167, 106, 106); }
      header .navbar .dropdown-menu a {
        padding-top: 7px;
        padding-bottom: 7px; }
    header .navbar .cta-btn a {
      background: #4BAE51;
      color: rgb(84, 66, 66) !important;
      text-transform: uppercase;
      font-size: .8rem;
      padding: 15px 20px !important;
      line-height: 1;
      font-weight: bold;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
      header .navbar .cta-btn a:hover {
        background: rgba(40, 90, 25, 0.795);
        color:#4BAE51;
        -webkit-box-shadow: 2px 0 30px -5px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 0 30px -5px rgba(0, 0, 0, 0.2); }

  body{padding-top:70px;padding-bottom:30px;}
.theme-dropdown .dropdown-menu{display:block;position:static;margin-bottom:20px;}
.theme-showcase > p > .btn{margin:5px 0;}

body{color:#797979;font-family:'Lato', sans-serif;padding:0px !important;font-size:14px;}

a{color:#444e67}
a:hover{color:#4BAE51}
p{line-height:22px}
.breadcrumbs{background:#00AAC6;color:#fff;padding:30px 0;margin-bottom:40px;}
.breadcrumb{margin-bottom:0;background:none;}
.breadcrumb li a{color:#4BAE51}
.breadcrumb li.active{color:#fff}
.breadcrumbs h1{font-size:24px;font-weight:600;margin:3px 0 0;text-transform:uppercase;}
.mar-b-50{margin-bottom:50px}


html{position:relative;min-height:100%;}
body{margin-bottom:auto;}
.footer{position:absolute;bottom:0;width:100%;height:auto;}
body{font-family:'Quicksand', sans-serif;font-size:16px;}
h1, h2, h3, h4, h5, h6{font-family:'Quicksand', sans-serif;}

.bg-fafafa{background-color:#fafafa;}
.pad-t-50{padding-top:50px;}
.pad-t-30{padding-top:30px;}
.pad-b-35{padding-bottom:35px;}
.pad-30{padding:30px;}

</style>  
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
    <div class="container pad-t-50">
        <div class="row mar-b-50">

            <h1 class="lh">  
              Avec AS-S3IFNI &middot; vous êtes visible et joignable pour vos patients de n’importe quel endroit en Algérie.
              <!--Avec DZDOC, vous êtes présent pour vos patients lorsqu’ils ont besoin de vous, n’importe quand, n’importe où en Algérie.-->
            </h1 >
          </div>
        </div>
      </div>
   

    <div class="push">
        <div class="breadcrumbs">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <h4>Découvrez notre offre de service spécialement conçue pour les professionnel de la santé.</h4>
              </div>
            <!--  <div class="col-sm-6">
                <a href="#" class="btn btn-lg white-btn pull-right">Télécharger</a>
              </div>-->
            </div>
          </div>
        </div>
    
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-offset-1 col-md-4 pdt8">
                <h2>  <pre>

                </pre>
                 Présence web</h2>
                <p class="description">Avec l’interface professionnelle de DZDOC, construire et renforcer votre présence et votre référencement sur internet est maintenant devenu à portée de main.</p>
              </div>
              <div class="col-md-offset-1 col-md-6 no-padding-left">
                <img src="images/presence2.jpg" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="bg-fafafa">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 no-padding-right">
                <img src="images/map.jpg" class="img-responsive">
              </div>
              <div class="col-md-offset-1 col-md-4 pdt8">
                <h2> <pre>

                </pre>    Coordonnées</h2>
                <p class="description">Toutes les informations nécessaires pour votre mise en relation avec vos patients sont facilement accessibles. Contacter et trouver votre cabinet ou votre établissement médical n’a jamais été aussi simple.</p>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-md-offset-1 pdt8">
                <h2> <pre>

                </pre>Disponibilités</h2>
                <p class="description">Libérez-vous de toute contrainte horaire et soyez disponible pour vos patients 24 heures sur 24 et 7 jours sur 7 même en dehors de vos heures d’ouverture.</p>
              </div>
              <div class="col-md-offset-1 col-md-6 no-padding-left">
                <img src="images/247.jpg" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="bg-fafafa">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 no-padding-right">
                <img src="images/stat.jpg" class="img-responsive">
              </div>
              <div class="col-md-offset-1 col-md-4 pdt8">
                <h2> <pre>

                </pre>Analytiques</h2>
                <p class="description">Bénéficiez des chiffres clefs et des statistiques pratiques pour vous aider dans la bonne gestion de votre activité.</p>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-md-offset-1 pdt8">
                <h2> <pre>

                </pre>Planification</h2>
                <p class="description">Gérez efficacement vos créneaux horaires en quelques clics grâce à un agenda en ligne intuitif, ergonomique et paramétrable.</p>
              </div>
              <div class="col-md-offset-1 col-md-6 no-padding-left">
                <img src="images/agenda.jpg" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="bg-fafafa">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 no-padding-right">
                <img src="images/notif.jpg" class="img-responsive">
              </div>
              <div class="col-md-offset-1 col-md-4 pdt8">
                <h2> <pre>
                  
                </pre>Notifications</h2>
                <p class="description">Afin de réduire le nombre de rendez-vous non honorés, vos patients recevront un message de rappel automatique la veille de leurs consultation.</p>
              </div>
            </div>
          </div>
          </div>
        

          <script src="js/jquery-3.3.1.min.js"></script>
          <!--    <div class="hero" style="background-image: url('images/bg1.jpg');"></div> -->
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.sticky.js"></script>
          <script src="js/main.js"></script>         
</body>
</html>