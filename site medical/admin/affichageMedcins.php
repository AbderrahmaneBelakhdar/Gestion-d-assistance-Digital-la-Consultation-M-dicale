
<!doctype html>
<html class="no-js" lang="">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="../fonts/icomoon/style.css">
  
      <link rel="stylesheet" href="../css/owl.carousel.min.css">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
           <!-- ScrollBAAR CSS -->
      <link rel="stylesheet" type="text/css" href="../css/perfect-scrollbar.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
 
      <!-- Style -->
    <style>
     .rechar {
        width: 40%;
        padding: 12px ;
        margin: 5%;
        border: 2px solid green;
        border-radius: 4px;
      }
    .myTable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  table-layout: fixed;
width: 100%;
  margin: 50px;
  position: relative;
}

#myTable td, #myTable th {
  border: 1px solid #ddd;
  padding: 8px;
  margin: 5%;

}

#myTable tr:nth-child(even){background-color: #f2f2f2;}

#myTable tr:hover {background-color: #ddd;}

#myTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.row{
  margin: 3%;

}


      </style>
  
    <link rel="stylesheet" href="css/style.css"> 
   <link  rel="stylesheet" href="css/profilestyle.css">
  
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



      
  <input  class="rechar" type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher Par Specialité..">
  
  <div class="myTable" >
                <table id="myTable">
                  <thead>
                    <tr >
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Sexe</th>
                      <th>Specialté</th>
                      <th>Afficher</th>
                    </tr>
                  </thead>
            
              <?php
              include "../conn.php";
              $result = mysqli_query($db,"select * from informationsm"); // fetch data from database
            
              while($row= mysqli_fetch_array($result))
              {
                  
                 ?>
                
                    <tr> 
                     <td ><?php echo $row['Nom']; ?></td>
                     <td><?php echo $row["Prenom"]; ?></td>
                     <td ><?php echo $row["Sexe"]; ?></td>
                     <td ><?php echo $row["Specialite"]; ?></td>
         <!--        RANI habess hna                                  -->
                     <td><a href="profile.php?id=<?php echo $row['id']; ?>"> Afficher</a></td>
                     </tr>
          
      <?php
    }
    ?> 

                </table>
                </div> 
      

               

                <div class="row">
        <div class="col-md-8">
        <div class="list-group">

        <?php
              include "conn.php";
              $result = mysqli_query($db,"select * from informationsm"); // fetch data from database
            
              while($row= mysqli_fetch_array($result))
              {
                  
                 ?>


<div class="container">
  <div class="row mar-b-20">
    <div class="col-md-100 pad-b-35 box-shadow">


                      <div id="md-117" class="list-group-item clearfix">
              <div class="row">
                <div class="col-sm-6">
                <div class="row">
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <a href="profile.php?id=<?php echo $row['id']; ?>" class=""><img src="images/profil_male_80x100.jpg" alt="" class="img-responsive" /></a>
                    <!--<a href="profil.php?id=117" class="btn btn-sm green-btn profil-btn"> Profil</a>-->
                                      </div>
                  <div class="col-md-8">
                                          <a href="profile.php?id=<?php echo $row['id']; ?>" class="doctor-name"> <?php echo $row['Nom']; echo" "; echo $row['Prenom'];  ?>  </a>
                                        <div> <?php echo $row["Specialite"]; ?> </div>
                                        <div class="nowrap" data-toggle="tooltip" data-placement="bottom" title="Cite Benboulaid Bloc12 RDC"><i class="fa fa-map-marker"></i> <?php echo $row['wilaya'];  ?> </div>
                    
                                        <a href="profile.php?id=<?php echo $row['id']; ?>" class="rechar btn btn-sm green-btn profil-btn "> Profil</a>
                                      </div>
                                    </div>
            
                </div>   
                <div style="display:table!important;height:150px;" class="col-md-6 hidden-xs hidden-sm">
                    <div style="display:table-cell;vertical-align:middle;" class="text-warning text-center">N'offre pas la prise de rendez-vous en ligne</div>
                  </div>
                              </div>
            </div>
            
          
            </div>
            </div>
            </div>

            

            <?php
    }
    ?> 



                
      <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
                
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

    
    <!--===============================================================================================-->
	<script src="js/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
	</script>


</body>

</html>



