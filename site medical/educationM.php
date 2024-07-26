<?php  

$departement=$_POST['departement'];
$position=$_POST['position'];
$hopital=$_POST['hopital'];

$dsn = 'mysql:host=localhost;dbname=site_medicale';

//$dsn = 'mysql:host=localhost;dbname=site_medicale';

$departement='root';
$position='';
$hopital='';


$dbh = new PDO($dsn , $departement);

$departement=$_POST['departement'];
$position=$_POST['position'];
$hopital=$_POST['hopital'];

$sql = "INSERT INTO experiences (departement,Position , Hopital) VALUES ('$departement' ,'$position', '$hopital' )";
  //$result = mysql_query( $sql,$db );

  $dbh->exec($sql);
  
 
?>













<html>
<head>
</head>
<body>
    <a href="educationM.html" target="_self" class="button">Return </a>
</body>
</html>

