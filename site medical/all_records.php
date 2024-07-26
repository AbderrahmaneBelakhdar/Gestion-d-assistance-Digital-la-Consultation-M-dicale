<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

  <title>Display all records from Database</title>
  <style type="text/css">
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
margin-left: auto;
  margin-right: auto;}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 20px;
background-color: #D0E3FA;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 10px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
body{
  
  background-image: url("images/1.jpg");
  background-size:cover ;

}

h2{
  font-family:sans-serif;
  color:white;
}
b{
  color:white;
}
</style>
</head>
<body>


<div id="Specialité">
        
        <div class="form-floating mb-3">
                  <select class="form-control" placeholder="Choisir la spécialité" >
                    <option value=""></option>
                    <option value='Acupuncteur'>Acupuncteur</option><option value='Algologue'>Algologue</option><option value='Allergologue'>Allergologue</option><option value='Anatomopathologiste'>Anatomopathologiste</option><option value='Anesthésiste-réanimateur'>Anesthésiste-réanimateur</option><option value='Angiologue'>Angiologue</option><option value='Audioprothésiste'>Audioprothésiste</option><option value='Cardiologue'>Cardiologue</option><option value='Cardiologue pédiatrique'>Cardiologue pédiatrique</option><option value='Centre d imagerie médicale'>Centre d'imagerie médicale</option><option value='Chiropracteur'>Chiropracteur</option><option value='Chirurgien cardiaque'>Chirurgien cardiaque</option><option value='Chirurgien cardiaque pédiatrique'>Chirurgien cardiaque pédiatrique</option><option value='Chirurgien dentiste'>Chirurgien dentiste</option><option value='Chirurgien esthétique et plastique'>Chirurgien esthétique et plastique</option><option value='Chirurgien généraliste'>Chirurgien généraliste</option><option value='Chirurgien infantile '>Chirurgien infantile </option><option value='Chirurgien maxillo-facial'>Chirurgien maxillo-facial</option><option value='Chirurgien Pédiatrique'>Chirurgien Pédiatrique </option><option value='Chirurgien thoracique'>Chirurgien thoracique</option><option value='Chirurgien vasculaire'>Chirurgien vasculaire</option><option value='Chirurgien viscérale'>Chirurgien viscérale</option><option value='Chirurgien viscérale pédiatrique'>Chirurgien viscérale pédiatrique</option>odialyse</option><option value='Dermato-vénérologue'>Dermato-vénérologue</option><option value='Diététicien'>Diététicien</option><option value='Endocrino-diabetologue'>Endocrino-diabetologue</option><option value='Gastro-entéro-hepatologue'>Gastro-entéro-hepatologue</option><option value='Généticien'>Généticien</option><option value='Gérontologue - gériatre'>Gérontologue - gériatre</option><option value='Gynéco-obstetricien'>Gynéco-obstetricien</option><option value='Hématologue'>Hématologue</option><option value='Hépatologue'>Hépatologue</option><option value='Infectiologue'>Infectiologue</option><option value='Kinésithérapeute'>Kinésithérapeute</option><option value='Maladies et Chirurgie CardioVasculaire'>Maladies et Chirurgie CardioVasculaire</option><option value='Médecin Biologiste Laboratoire'>Médecin Biologiste Laboratoire</option><option value='Médecin du sport'>Médecin du sport</option><option value='Médecin du travail'>Médecin du travail</option><option value='Médecin géneraliste'>Médecin géneraliste</option><option value='Médecin interniste'>Médecin interniste</option><option value='Médecin légiste'>Médecin légiste</option><option value='Médecin nucléaire'>Médecin nucléaire</option><option value='Médecin physique et de réadaptation'>Médecin physique et de réadaptation</option><option value='Médecine esthétique'>Médecine esthétique</option><option value='Néphrologue'>Néphrologue</option><option value='Néphrologue pédiatrique'>Néphrologue pédiatrique</option><option value='Neuro-chirurgien'>Neuro-chirurgien</option><option value='Neuro-physiologiste'>Neuro-physiologiste</option><option value='Neuro-psychiatre'>Neuro-psychiatre</option><option value='Neurologue'>Neurologue</option><option value='Nutritionniste'>Nutritionniste</option><option value='Onco-cancerologue'>Onco-cancerologue</option><option value='Oncologue médical'>Oncologue médical</option><option value='Ophtalmologue'>Ophtalmologue</option><option value='Optométriste'>Optométriste</option><option value='ORL'>ORL</option><option value='Orthophoniste'>Orthophoniste</option><option value='Orthoptiste'>Orthoptiste</option><option value='Ostéopathe'>Ostéopathe</option><option value='Pédiatre'>Pédiatre</option><option value='Phlébologue'>Phlébologue</option><option value='Pneumo-phtysio-allergologue'>Pneumo-phtysio-allergologue</option><option value='Podologue'>Podologue</option><option value='Proctologue'>Proctologue</option><option value='Psychiatre'>Psychiatre</option><option value='Psychologue'>Psychologue</option><option value='Radiologue'>Radiologue</option><option value='Radiothérapeute'>Radiothérapeute</option><option value='Réanimateur médical'>Réanimateur médical</option><option value='Réanimateur pédiatrique'>Réanimateur pédiatrique</option><option value='Rééducation fonctionnelle'>Rééducation fonctionnelle</option><option value='Rhumatologue'>Rhumatologue</option><option value='Sexologue'>Sexologue</option><option value='Stomatologue'>Stomatologue</option><option value='Traumato-orthopédiste'>Traumato-orthopédiste</option><option value='Traumato-orthopédiste pédiatrique'>Traumato-orthopédiste pédiatrique</option><option value='Urologue'>Urologue</option><option value='Urologue pédiatrique'>Urologue pédiatrique</option>            </select>
                    <label >Choisir la spécialité</label>
                  </div>
              </div> 


              
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">


<h2>Table Patient/Medecin</h2>

            <table border="2"  id="myTable" >
                <caption><b> </b></caption>
                <thead>
                    <th>id</th>
                    <th>nom</th>
                    <th>Prenom</th>
                    <th>DN</th>
                    <th>Sexe</th>
                    <th>Specialite</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Telephone</th>
                    <th>edit</th>
                    <th>delete</th>
                    <th>afficher</th>

                </thead>      
             </div> 
             <?php
             include "conn.php";
             $result = mysqli_query($db,"select * from informationsm"); // fetch data from database
           
             while($row= mysqli_fetch_array($result))
             {
                 
                ?>
                            <tr> 
                            <td><?php echo $row['id']; ?></td>
                           <td><?php echo $row['Nom']; ?></td>
                           <td><?php echo $row["Prenom"]; ?></td>
                           <td><?php echo $row["DN"]; ?></td>
                           <td><?php echo $row["Sexe"]; ?></td>
                           <td><?php echo $row["Specialite"]; ?></td>
                           <td><?php echo $row['Email']; ?></td> 
                           <td><?php echo $row["Password"]; ?></td>
                           <td><?php echo $row["Telephone"]; ?></td>
                           <td><a href="edit.php?id=<?php echo $row['id']; ?>">Editer</a></td>
                           <td><a href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a></td>
                           <td><a href="profile.php?id=<?php echo $row['id']; ?>"> afficher</a></td>
                           </tr>
                            <?php
}
?>
</table>



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
    td = tr[i].getElementsByTagName("td")[5];
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

</body>
</html>
