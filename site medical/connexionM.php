<?php
session_start(); 
include('conn.php');



?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tavgs -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>AS-S3IFNI</title>
  </head>
  <body>
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
                <a class="nav-link active" href="accueil.html">ACCUEIL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"href="#">&nbsp;S'inscrire</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="inscriptionP.html">Patient</a>
                  <a class="dropdown-item" href="inscriptionM.html">Médecin</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">&nbsp;Se connecter</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="connexionP.html">Patient</a>
                  <a class="dropdown-item" href="connexionM.html">Médecin</a>
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
      <!-- END header -->
    <!-- form-->
    
    <div class="container-fluid ps-md-0">
      <div class="row g-0">
        <div class="d-none d-md-flex col-md-5 col-lg-6 bg-image" style="background-image: url('images/hero-bg.jpg');"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">

                  <h3 class="login-heading mb-4">Espace médecin   </h3>


                  <?php 
                              
      if(isset($_POST['login'])){
        
        $login=$_POST['login'];
        $emailM=$_POST['emailM'];
        $passwordM=$_POST['passwordM'];

      if(empty($emailM) || empty($passwordM)){
       echo "<div class='alert alert-danger'>"."Veuillez entrer une adresse email et un mot de passe valide." . "</div>" ;
      }      
    else 
    {  //
$query ="SELECT * FROM informationsm WHERE Email='$emailM' and  Password='$passwordM'";
$resutl= mysqli_query($db,$query);
$row= mysqli_fetch_assoc($resutl);

$count = mysqli_num_rows($resutl);

// If result matched $myusername and $mypassword, table row must be 1 row
  
if($count == 1) { 
  echo "<div class='alert alert-success'>" . "Email et Mot de passe Correct"  . "</div>" ;
  $_SESSION['id'] =$row['id'];
  header('REFRESH:1;URL=admin/accueilm.php');    

}else {
echo "<div class='alert alert-danger'>"."Veuillez entrer une adresse email et un mot de passe valide." . "</div>" ;
}
}
  
    }
                    



          ?>



                  <!-- Sign In Form -->
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"    >
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="emailM">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passwordM">
                      <label for="floatingPassword">Password</label>
                    </div>
    
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                      <label class="form-check-label" for="rememberPasswordCheck">
                        Remember password
                      </label>
                    </div>
    
                    <div class="d-grid">
                      <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="login">Sign in</button>
                      <div class="text-center">
                        <a class="small" href="inscriptionM.html"> <h5>Êtes-vous nouveau sur le service?      </h5>  </a>
                      </div>
                    </div>
      
  
                  </form>
                </div>
              </div>
            </div>
          </div>
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