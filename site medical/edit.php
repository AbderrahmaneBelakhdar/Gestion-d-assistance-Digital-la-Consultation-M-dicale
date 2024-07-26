<?php

include "conn.php"; // Using database connection file here


$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from informationsm where id='$id'"); // select query
$row = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
   
$Nom=$_POST['Nom'];
$Prenom = $_POST['Prenom']; 
$DN=$_POST['DN'];
$Sexe=$_POST['Sexe'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Telephone=$_POST['Telephone'];


    $edit = mysqli_query($db,"update informationsm set Nom='$Nom' , Prenom='$Prenom' , DN='$DN' , Sexe='$Sexe' ,Email='$Email',Password='$Password' ,Telephone='$Telephone' where Email='$Email'");
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else   {
        echo mysqli_error(($db));
    }
    	
}

?>

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
     <title>Document</title>
    <style>
     table{
    color:white;
    border-radius:20px;
     }
     #button
     {
         background-color:green;
         color:white;
         height:32px;
         width:125px;
         border-radius:25px;
         font-size:16px;
     }
    body
{   
  background: linear-gradient(to right, transparent, mistyrose),
    url("images/bg1.jpg");

  height: 150px;
  zoom: 1.2;
}



    
    </style>

    </head>
    <body>
    <br><br><br><br><br><br><br>    
<form method="POST">
 <table border="0" bgcolor="black" align="center" cellspacing="20">

 <tr>
        <td>Nom</td>
    <td><input type="text" name="Nom" value="<?php echo $row['Nom'] ?>"  placeholder="Nom"  Required> </td>
     </tr>
     
     <tr>
     <td>Prenom</td>
    <td><input type="text"  name="Prenom"  placeholder="Prenom" value="<?php echo $row['Prenom'] ?>"  placeholder="Prenom"  Required> </td>
     </tr>
     
     <tr>
     <td>Date De Naissance </td>
    <td><input type="Date" name="DN"   value="<?php echo $row['DN'] ?>"   Required> </td>
     </tr>
    
     
     <tr>
     <td>Sexe</td>
    <td><select class="option" name="Sexe" value="<?php echo $row['Sexe'] ?>"   Required  >
      <option disabled="disabled" selected="selected" >Choisir le Sexe</option>
      <option >Homme</option>
      <option>Femme</option>
    </select> </td>
     </tr>

     <tr>
     <td>Email</td>
    <td><input type="text" name="Email" value="<?php echo $row['Email'] ?>"   Required> </td>
     </tr>
    
     <tr>
     <td>Password</td>
    <td><input type="text" name="Password" value="<?php echo $row['Password'] ?>"   Required> </td>
     </tr>

     <tr>
     <td>Telephone</td>
    <td><input type="text" name="Telephone" value="<?php echo $row['Telephone'] ?>"   Required> </td>
     </tr>
    

     <tr>
    <td colspan="2" align="center">
        <input type="submit" id="button" name="update" value="Update"></a></td>   
</tr>
</form>
 </table>
    </body>
    </html>