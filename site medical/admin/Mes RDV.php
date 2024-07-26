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
          <img class="navbar-brand" src='images/LOGO as-s3ifni1.png'  href="index nouv.html">  
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
                <a class="nav-link active" href="#">Mes RDV</a>
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

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-default">
            Tous les rdv !
        </nav>
        <table id="table-rdv" class="table table-bordered text-center">
<thead>
<tr >
<th  class="text-center" scope="col">Num</th>
<th  class="text-center" scope="col">ID Rdv</th>
<th  class="text-center" scope="col">date</th>
<th  class="text-center" scope="col">time</th>

<th  class="text-center" scope="col">ID patient</th>
<th  class="text-center" scope="col">Nom patient</th>
<th  class="text-center" scope="col">Prenom patient</th>
<th  class="text-center" scope="col">Email patient</th>
 <!-- <th  class="text-center" scope="col">Options</th>  -->
<th  class="text-center" scope="col">Supprimer</th>




</tr>
</thead>
<tbody>
<div >

<?php 
include '../conn.php';

$idm=$_SESSION['id'];
/*$sql = "SELECT * FROM rdv patient WHERE  'rdv.id_patient'='patient.id_patient'";*/


//$sql = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id_patient and rdv.accept=0 ";
 // $sql = "SELECT * from informationsp INNER JOIN rdv ON rdv.idm=$idm AND rdv.idp=informationsp.idP ";
$result = mysqli_query($db,"SELECT * from informationsp INNER JOIN rdv ON rdv.idm=$idm AND rdv.idp=informationsp.idP"); // select query

// $resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;
while( $row= mysqli_fetch_array($result) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $row["id_rdv"]; ?></td>
<td ><?php echo $row["date"];?></td>
<td ><?php echo $row["time"];?></td>

<td><?php echo $row["idP"]?></td>
<td><?php echo $row["NomP"]?></td>
<td><?php echo $row["PrenomP"]?></td>
<td><?php echo $row["EmailP"]?></td>
<td><a href="delete.php?id=<?php echo $row['id_rdv']; ?>">Supprimer</a></td>

</td>
<!-- Button trigger modal -->
<!-- Modal -->
</tr>
<!-------------------------------------------modal ordonnance--------------->
<div id="myModal<?php echo $row['id_rdv'];?>" class="modal fade" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details</h4>
      </div>
    
  </div>
</div>
</div>
<!-------------------------------------------modal ordonnance--------------->

<?php

}

?>


</div>
</tbody>
</table>




















    




    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/main.js"></script>

<style>
    
    /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

</style>
  </body>
</html>