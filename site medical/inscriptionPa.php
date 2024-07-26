<?php  

$NomP=$_POST['NomP'];
$PrenomP = $_POST['PrenomP']; 
$DNP=$_POST['DNP'];
$SexeP=$_POST['SexeP'];
$EmailP=$_POST['EmailP'];
$PasswordP=$_POST['PasswordP'];
$TelephoneP=$_POST['TelephoneP'];


$dsn = 'mysql:host=localhost;dbname=site_medicale';
  $EmailP='root';
  $NomP =''; 
  $PrenomP='';
  $DNP='';
  $SexeP='';
  $PasswordP='';
  $TelephoneP='';

  $dbh = new PDO($dsn , $EmailP);


  $NomP=$_POST['NomP'];
  $PrenomP = $_POST['PrenomP']; 
  $DNP=$_POST['DNP'];
  $SexeP=$_POST['SexeP'];
  $EmailP=$_POST['EmailP'];
  $PasswordP=$_POST['PasswordP'];
  $TelephoneP=$_POST['TelephoneP'];

  $sql = "INSERT INTO informationsp (EmailP , NomP , PrenomP , DNP , SexeP, PasswordP, TelephoneP ) VALUES ('$EmailP' , '$NomP', '$PrenomP', '$DNP', '$SexeP' ,'$PasswordP','$TelephoneP' )";
 
  $dbh->exec($sql);
  header('REFRESH:0;URL=connexionP.php');    


?>

<html>
<head>
</head>
<body>
    <a href="inscriptionP.html" target="_self" class="button">Return </a>
</body>
</html>

