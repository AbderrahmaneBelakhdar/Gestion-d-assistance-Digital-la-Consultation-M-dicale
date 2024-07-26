<?php
include './conn.php';
session_start(); 

$id=$_GET['id'];


 if(!isset($_SESSION['id'])){
echo "<div class='alert alert-danger'>". "Désolé, vous devez vous inscrire pour accéder à notre service" . "</div>";
header('REFRESH:1;URL=connexionPM.php');
 }

 else {
?>


<!doctype html>
<html class="no-js" lang="">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="fonts/icomoon/style.css">
  
      <link rel="stylesheet" href="css/owl.carousel.min.css">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
 
      <!-- Style -->
      <style>
.PC{
    width: 40%;
	height: 40%;

}

.form-v10-content  {
	
	width: 580px;
	border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	margin: 95px 0;
	position: relative;
	font-family: 'Montserrat', sans-serif;
}
.form-v10-content .form-detail {
	position: relative;
	width: 100%;
	display: flex;
	display: -webkit-flex;
}
.form-v10-content .form-detail h2 {
	font-weight: 500;
	font-size: 25px;
	margin-bottom: 34px;
	padding: 33px 50px 0px 60px;
}

.form-v10-content .form-detail .form-right {
	width: 100%;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}
.form-v10-content .form-detail .form-right h2 {
	color: rgb(0, 0, 0);
}
.form-v10-content .form-detail .form-group {
	display: flex;
	display: -webkit-flex;
}
.form-v10-content .form-detail .form-row {
	position: relative;
	margin-bottom: 24px;
	padding-left: 60px;
    padding-right: 50px;
}

.form-v10-content .form-detail .form-right .form-group .form-row.form-row-1 {
	width: 50%;
	padding: 0 12px 0 60px;
}

.form-v10-content .form-detail select,
.form-v10-content .form-detail input {
	width: 100%;
    padding: 11.5px 15px 15px 15px;
    border: 1px solid transparent;
    background: transparent;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
}
.form-v10-content .form-detail select {
	background: 0 0;
	position: relative;
	z-index: 9;
	cursor: pointer;
}

.form-v10-content .form-detail .form-right select {
	color: #000000;
}
.form-v10-content .form-detail .select-btn {
	z-index: 0;
    position: absolute;
    top: 30%;
    right: 11.5%;
    font-size: 18px;
}

.form-v10-content .form-detail .form-right .select-btn {
    color: #000000;
}
.form-v10-content .form-detail .form-group .form-row.form-row-4 .select-btn {
	top: 20%;
	right: 26%;
}
.form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
	top: 20%;
	right: 19%;
}

.form-v10-content .form-detail .form-right input {
	color: rgb(0, 0, 0);
}


.form-v10-content .form-detail .form-right input,
.form-v10-content .form-detail .form-right select {
	border-bottom: 1px solid;
	border-bottom-color: rgba(255, 255, 255, 0.3);
}
.form-v10-content .form-detail .form-right input:focus,
.form-v10-content .form-detail .form-right select:focus {
	border-bottom: 1px solid rgb(0, 0, 0);
}
.form-v10-content .form-detail .form-right select option {
	background: #4835d4;
}
.form-v10-content .form-detail .form-checkbox {
	margin-top: 37px;
	padding: 0 50px 0 60px;
	position: relative;
}
.form-v10-content .form-detail .form-checkbox input {
	position: absolute;
    opacity: 0;
}
.form-v10-content .form-detail .form-checkbox .checkmark {
	position: absolute;
    top: 1px;
    left: 60px;
    height: 15px;
    width: 15px;
    border: 1px solid #000000;
    cursor: pointer;
}
.form-v10-content .form-detail .form-checkbox .checkmark::after {
	content: "";
    position: absolute;
    left: 5px;
   	top: 1px;
    width: 3px;
    height: 8px;
    border: 1px solid rgb(0, 0, 0);
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
    display: none;
}
.form-v10-content .form-detail .form-checkbox input:checked ~ .checkmark::after {
    display: block;
}
.form-v10-content .form-detail .form-checkbox p {
    margin-left: 34px;
    color: #000000;
    font-size: 14px;
    font-weight: 400;
}
.form-v10-content .form-detail .form-checkbox .text {
	font-weight: 400;
	color: rgb(0, 0, 0);
	text-decoration: underline;
}
.form-row-last {
    padding-left: 60px;
    margin: 44px 0 10px;

}
.form-v10-content .form-detail .form-right .register {
	background: rgb(0, 0, 0);
	border-radius: 25px;
	-o-border-radius: 25px;
	-ms-border-radius: 25px;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	width: 180px;
	border: none;
	margin: 6px 0 50px 0px;
	cursor: pointer;
	color: #333;
	font-weight: 700;
	font-size: 15px;
}
.form-v10-content .form-detail .form-right .register:hover {
	background: #ccc;
}
 .form-row-last input {
	padding: 12.5px;
 	width: 100% ;
}

.form-v10-content .form-detail .form-right input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #000000;
  font-size: 16px;
}
.form-v10-content .form-detail .form-right input::-moz-placeholder { /* Firefox 19+ */
  color: #000000;
  font-size: 16px;
}
.form-v10-content .form-detail .form-right input:-ms-input-placeholder { /* IE 10+ */
  color: #000000;
  font-size: 16px;
}
.form-v10-content .form-detail .form-right input:-moz-placeholder { /* Firefox 18- */
  color: #000000;
  font-size: 16px;
}

/* Responsive */
@media screen and (max-width: 1199px) {
	.form-v10-content {
		margin:  95px 20px;
	}
}
@media screen and (max-width: 991px) and (min-width: 768px) {
	.form-v10-content .form-detail .form-group {
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-1,
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 {
	    width: auto;
	    padding: 0 50px 0 60px;
	}
	.form-v10-content .form-detail .select-btn,
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
		right: 15%;
	}

}
@media screen and (max-width: 767px) {
	.form-v10-content .form-detail {
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v10-content .form-detail .form-right {
		border-top-right-radius: 0px;
    	border-bottom-left-radius: 10px;
	}
	
}
@media screen and (max-width: 575px) {
	.form-v10-content .form-detail .form-group {
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v10-content .form-detail .form-row,
	
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-1,
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 {
	    width: auto;
	    padding: 0 30px;
	}
	.form-v10-content .form-detail .select-btn,
	.form-v10-content .form-detail .form-group .form-row.form-row-4 .select-btn,
	.form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
		right: 15%;
	}
	.form-v10-content .form-detail h2 {
	    padding: 33px 30px 0px 30px;
	}
	.form-v10-content .form-detail .form-checkbox {
		padding: 0 30px;
	}
	.form-v10-content .form-detail .form-checkbox .checkmark {
		left: 30px;
	}
	 .form-row-last {
		
		
	     width: 100% ;
	}
}
.comment-box {
width: 70%;

}
.comment-box h3 {
    font-size: 20px;

}
.comment-box textarea {
    width: 100%;
    height: 150px;
    padding: 15px 20px;
margin-bottom: 10px;
border-radius: 5px;
border: 1px solid #000000;
}
.comment-box textarea:focus{
    border: 1px solid #000000 ;
    outline: 0;
}
.comment-box button {
    border: 0;
    padding: 10px 30px;
    background: #2454d6;
    font-size: 18px;
    border-radius: 5px;
    color: #fff;
}
.comment-box button:hover{
    background-color: #2f068d;
}





.wrapper .prev-comments {
    margin-top: 50px;
}

.wrapper .prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.wrapper .prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.wrapper .prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.wrapper .prev-comments .single-item p {
    font-size: 2rem;
    color: #111;
}


      </style>
   <link rel="stylesheet" href="css/style.css"> 
   <link  rel="stylesheet" href="css/profilestyle.css">


</head>


<body>

<?php 
include './conn.php';


    $id=$_GET['id'];

/*   WHERE id='$id'    */ 
/*$result = mysqli_query($db,"select * from informationsm where id='$id'"); // select query*/
echo $_SESSION['id'];
echo $id;

$result = mysqli_query($db,"select * from informationsm INNER JOIN education ON informationsm.id=$id AND education.id=$id  "); // select query

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

      <!-- END header -->   


        <section class="team-details-wrap-layout1 bg-light-accent100">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-12">
                        <div class="team-detail-box-layout1">
             
             
             
                        <div class="single-item">
                                <h3 class="section-title title-bar-primary2">À Propos De Moi:</h3>
                                <p>Efficiently myocardinate market-driven innovation via open-source alignments.
                                    Dramatically engage high-Phosfluorescently expedite impactful supply chains via
                                    focused results. Holistically . Compellingly supply just in time catalysts for
                                    change through..</p>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Éducation:</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Année</th>
                                                <th>Diplôme</th>
                                                <th>Institut</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
while($row= mysqli_fetch_array($result)) {


?>


                                        <tr>
                                                <td><?php echo $row['Annee'];?></td>
                                                <td><?php echo $row['diplome'];?></td>
                                                <td><?php echo $row['institut'];?></td>
                                            </tr>

                                            <?php          }       ?>

                                            <!--            <tr>
                                                <td>2010</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Netherland Medical College</td>
                                            </tr>         -->
                                        </table>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Expérience:</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Hopital</th>
                                            </tr>
                                        </thead>
    
    <!--


Dir whilee te3 affichage kima lokhrin


        
-->    
<tbody>

<?php 

$results = mysqli_query($db,"select * from informationsm INNER JOIN experiences ON informationsm.id=$id AND experiences.id=$id  "); // select query

while($row= mysqli_fetch_array($results)) {


?>
                                    <tr>
                                                <td><?php echo $row['departement'];?></td>
                                                <td><?php echo $row['position'];?></td>                                 
                                                <td><?php echo $row['hopital'];?></td>
                                    </tr>

                                            <?php          }       ?>

                          

                                          
                                         <!--   <tr>
                                                <td>2010 - 2018</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Associate Prof.</td>
                                                <td>Netherland Medical College</td>
                                            </tr> -->
                                    </table>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Horaires de rendez-vous :</h3>
                                    <table class="table schedule-table">
                                        <thead>
                                            <tr>
                                                <th>Jour</th>
                                                <th>Temps</th>
                                                <th></th>
                                                 <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saturday</td>
                                                <td>8.00 am - 12.00 pm</td>
                                             <td class="schedule-btn"><a href="#" class="item-btn">Appointment</a></td>  
                                                 <td><small><a href="" class="view_schedule" data-id="<?php echo $row['id'] ?>" data-name="<?php echo "Dr. ".$row['Nom'].', '.$row['Prenom'] ?>"><i></i> Schedule</a></b></small></td>

                                            </tr>
                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
      
        
                          <div class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
 


    <form class="form-detail" method="post" id="myform" enctype="multipart/form-data">
				<div class="form-right">
					<div class="form-right">
					<h2>INFORMATION POUR RENDEZ-VOUS</h2>
					<div class="form-row">
			<input type="Date" name="datte" class="" id="txtdate" placeholder="" required>
        <p> <pre>  </pre> _________________________________________________</p>
            <input type="time" name="timme" class="" id="" placeholder="" required>
					</div>
					

					</div>					
					<div class="form-row-last">
						<input type="submit" name="reserver" class="register" value="Envoyer">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>




        


        <div class="single-item">
        

        <div class="table-responsive"> 
                                   
        <br />
        <h3 class="section-title title-bar-primary2">  Laisser Un Commentaire  : </h3>
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
 
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">

     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="hidden" name="idm" id="idm" value="<?php echo $id ;?>" />
     <input type="hidden" name="idp" id="idp" value="<?php echo $_SESSION['id'];?>" />
     
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>







  
        </div>
</div>


</div>

                        </div>
                    
                    



                    <?php 
                    
$result = mysqli_query($db,"select * from informationsm INNER JOIN education ON informationsm.id=$id AND education.id=$id  "); // select query

$row= mysqli_fetch_array($result) 
    ?>




                    <div class="order-xl-1 order-lg-1 sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="widget widget-about-team">
                            <img src="images/1.jpg" class="img-fluid" alt="team">
                            <div class="item-content">
                                <h3 class="item-title"><?php echo $row['Nom']; echo ' '; echo $row['Prenom'];?></h3>
                                <p class="item-ctg"> <?php echo $row['Specialite'];?></p>
                                <span class="item-designation">MBBS, M.D of Medicine</span>
                            </div>
                        </div>
                        <div class="widget widget-team-contact">
                            <h3 class="section-title title-bar-primary2">Informations personnelles </h3>
                            <ul>
                            <li>Sexe:<span> <?php echo $row['Sexe'];?>  </span></li>    
                            <li>Date de Naissance: <span> <?php echo $row['DN'];?>  </span></li>
                            <li>Telephone: <span>+ (123)<?php echo $row['Telephone'];?></span></li>
                            <li>E-mail: <span><?php echo $row['Email'];?></span></li>
                            </ul>
                        </div>
                        <div class="widget widget-call-to-action">
                            <div class="media">
                                <img class="PC"  src="images/1200px-Protection_civile_DZ.svg.png" alt="figure">
                                <div class="media-body space-sm">
                                    <h4>Case D'urgence</h4>
                                    <span>Appeler : 14</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        

        
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

 

    <script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
<?php    $id_patient=$_SESSION['id']; ?>

   url:"fetch_comment.php?id=<?php echo $id; ?>&idp=<?php echo $id_patient; ?>",
   
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>


 

</body>
<?php 
 $conn = mysqli_connect("localhost", "root", "");
   $db = mysqli_select_db($conn, "site_medicale"); ?>


<?php
          
          if (isset($_POST['reserver'])) 
          {
            $id_patient=$_SESSION['id'];
            $datte= $_POST['datte'];
            $timme= $_POST['timme'];

            $date=date("y-m-d");
             $startime=strtotime("09:30");
              $endtime=strtotime("15:30");
              if (strtotime($datte) < strtotime($date) or (strtotime($timme)<$startime or strtotime($timme) > $endtime)) {
              
            echo "<script> alert('date ou horraire non valide'); </script> ";
            }else{
                include './conn.php';
                $mysqli = new mysqli("localhost","root","","site_medicale");


                if($datte != "") {

                    $sql = "SELECT * from `rdv` where idm='".$id."' AND date='".$datte."' AND time='".$timme."'     ";
                    

                    $result = $mysqli->query($sql);
                    $num_rows = mysqli_num_rows($result); 
                  
                    if($num_rows>0)
                    {
               //       echo "<div class='alert alert-danger'>"."Email Deja utilisé." . "</div>" ;
               echo "<script> alert('Rendez-vous Deja utilisé'); </script> ";
               
 ///              header('REFRESH:1;URL=profile.php');    
              
              
                    }

else {


//            $q="INSERT INTO `rdv`(`idm`) VALUES ('$id')";
 $q="INSERT INTO `rdv`(`date`, `time`, `idm`, `idp`) VALUES ('$datte','$timme','$id','$id_patient')";         
}

}

            if (mysqli_query($conn,$q))
                 {
                   echo "<script> alert('La saisie est succée'); </script> ";
                 }
               }
            
          }
          


        }
    
    
       // $q="INSERT INTO `rdv`(`id_rdv`, `date`, `time`, `idm`, `ord`, `idP`) VALUES ('','$datte','$timme','$id','$filename','$id_patient')";         

?>




</html>
