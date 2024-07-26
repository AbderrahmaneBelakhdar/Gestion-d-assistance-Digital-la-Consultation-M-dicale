
<?php  
    


    // mdù;lldldl;dù;dù;dùd;dù
    
    
    $Nom=$_POST['Nom'];
    $Prenom = $_POST['Prenom']; 
    $DN=$_POST['DN'];
    $Sexe=$_POST['Sexe'];
    $Specialite=$_POST['Specialite'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $Telephone=$_POST['Telephone'];
    
    $diplome=$_POST['Diplome'];
    $Annee = $_POST['AnneeE']; 
    $institut=$_POST['Institut'];
    
    $Departement=$_POST['Departement'];
    $Position=$_POST['Position'];
    $Hopital=$_POST['Hopital'];
    
    
    
    $mysqli = new mysqli("localhost","root","","site_medicale");
    
    //$dsn = 'mysql:host=localhost;dbname=site_medicale';
    
    $Email='root';
      $Nom =''; 
      $Prenom='';
      $DN='';
      $wilaya=''; 
      $Sexe='';
      $Specialite='';
      $Password='';
      $Telephone='';
    
      $diplome='';
      $Annee=''; 
      $institut='';
    
      $Departement='';
      $Position='';
      $Hopital='';
    
    
    //$dbh = new PDO($dsn , $diplome);
    
    
      $Nom=$_POST['Nom'];
      $Prenom = $_POST['Prenom']; 
      $DN=$_POST['DN'];
      $wilaya=$_POST['wilaya'];
      $Sexe=$_POST['Sexe'];
      $Email=$_POST['Email'];
      $Specialite=$_POST['Specialite'];
      $Password=$_POST['Password'];
      $Telephone=$_POST['Telephone'];
    
      $diplome=$_POST['Diplome'];
      $Annee = $_POST['AnneeE']; 
      $institut=$_POST['Institut'];
    
    $Departement=$_POST['Departement'];
    $Position=$_POST['Position'];
    $Hopital=$_POST['Hopital'];
      
    if($Email != "") {
    //  $sql = mysql_query("select * from `informationsm` where Email='".$Email."'");
    
   //  $sql -> query("SELECT * from `informationsm` where Email='".$Email."'"); 
    
     //$fetch = mysql_num_rows($mysqli);
     // $num_rows = mysql_num_rows($mysqli);
     // $num_rows1  = $sql->num_rows;

    //  $fetch = MYSQL_NUM_ROWS($mysqli);
    
    $sql = "SELECT * from `informationsm` where Email='".$Email."'";
    $result = $mysqli->query($sql);
    $num_rows = mysqli_num_rows($result);//計算有多少行
    echo $num_rows." results";

/*    $conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT `index`, `opendate` FROM open_and_birth GROUP BY `opendate`";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);//計算有多少行
echo $num_rows." results";
$conn->close();

*/
      if($num_rows>0)
      {
 //       echo "<div class='alert alert-danger'>"."Email Deja utilisé." . "</div>" ;
 echo "<script> alert('Email Deja utilisé'); </script> ";
 
 header('REFRESH:1;URL=inscriptionMed.php');    

 $mysqli -> close();

      }
      else
      {
      
    
    // insertion dans la table informationsm  
    $mysqli -> query("INSERT INTO informationsm (Email , Nom , Prenom , DN ,wilaya , Sexe, Specialite ,Password, Telephone  ) VALUES ('$Email' , '$Nom', '$Prenom', '$DN','$wilaya' ,'$Sexe' ,'$Specialite','$Password','$Telephone' )"); 
    //$result = mysql_query( $sql,$db );
    //$dbh->exec($mysqli);
    
    
   // echo "New record has id: " . $mysqli -> insert_id;
    
    // retrieve last id
    $user_id =$mysqli->insert_id;
    //mysql_free_result( $result );
    //  $dbh->exec($sql);
    
    
    // insertion to experience table
    $mysqli -> query ("INSERT INTO experiences (departement, position , hopital, id) VALUES ('$Departement' ,'$Position', '$Hopital' , '$user_id' )");
    //$result = mysql_query( $sql,$db );
    //mysql_free_result( $result );
    //echo "New record has id: " . $mysqli -> insert_id;
    
    
    // insertion to education table
    $mysqli -> query ("INSERT INTO education ( diplome, Annee , institut, id ) VALUES ('$diplome' ,'$Annee', '$institut' , '$user_id' )");
    //$result = mysql_query( $sql,$db );
    // mysql_free_result( $result );
   // echo "New record has id: " . $mysqli -> insert_id;
  header('REFRESH:1;URL=connexionM.php');    

    
    
    $mysqli -> close();
    }}
    
    
    ?>
   