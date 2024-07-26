<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    
<style>
  * {
    box-sizing: border-box;
  }
  

  h1 {
    text-align: center;  
  }
  
  input , select {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }
  
  /* Mark input boxes that gets an error on validation: */
  input.invalid , select.invalid {
    background-color: #ffdddd;
  }
  
  /* Hide all steps by default: */
  .tab {
    display: none;
  }
  
  button {
    background-color: #04AA6D;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  #prevBtn {
    background-color: #bbbbbb;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  
  .step.active {
    opacity: 1;
  }
  
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #04AA6D;
  }
    </style>


    <title>AS-S3IFNI &middot; Trouver un médecin en Algerie et prenez rendez-vous en ligne</title>

    
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
    &nbsp;&nbsp;
    &nbsp;&nbsp;


  
   
 
    
    <div class="container-fluid ps-md-0">
      <div class="row g-0">
        <div class="d-none d-md-flex col-md-5 col-lg-3"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">

                  <!--  method="POST" action="inscriptionM.php"  -->

                 <form id="regForm" method="POST" action="inscriptionM.php" >                
                  <h1 class="login-heading mb-4">Inscription médecin     </h1>

            
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
      
                          <!-- Sign In Form -->
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" oninput="this.className = ''"  id="floatingInput" placeholder="Nom" name="Nom" id="Nom"> 
                        <label for="floatingInput">Nom</label>
                        
                        <input type="text" class="form-control" id="floatingInput" oninput="this.className = ''" placeholder="Prénom" name="Prenom" id="Prenom"> 
                        <label for="floatingInput">Prénom </label>
                                  <input type="date" class="form-control" id="floatingInput" placeholder="jj/mm/aaaa" oninput="this.className = ''" name="DN" id="DN" >  
                        <label for="floatingInput">Date de naissance </label>
                        
                        <select id="wilaya" name="wilaya" class="form-control" oninput="this.className = ''"  placeholder="Choisissez la région">
                            <option value=""></option>
                            <option value="Adrar" >Adrar</option>
                            <option value="Chlef" >Chlef</option>
                            <option value="Laghouat" >Laghouat</option>
                            <option value="Oum El Bouaghi" >Oum El Bouaghi</option>
                            <option value="Batna" >Batna</option>
                            <option value="Béjaia" >Béjaia</option>
                            <option value="Biskra" >Biskra</option>
                            <option value="Béchar" >Béchar</option>
                            <option value="Blida" >Blida</option>
                            <option value="Bouira" >Bouira</option>
                            <option value="Tamanrasset" >Tamanrasset</option>
                            <option value="Tebessa" >Tebessa</option>
                            <option value="Tlemcen" >Tlemcen</option>
                            <option value="Tiaret" >Tiaret</option>
                            <option value="Tizi Ouzou" >Tizi Ouzou</option>
                            <option value="Alger" >Alger</option>
                            <option value="Djelfa" >Djelfa</option>
                            <option value="Jijel" >Jijel</option>
                            <option value="Sétif" >Sétif</option>
                            <option value="Saida" >Saida</option>
                            <option value="Skikda" >Skikda</option>
                            <option value="Sidi Bel Abbes" >Sidi Bel Abbes</option>
                            <option value="Annaba" >Annaba</option>
                            <option value="Guelma" >Guelma</option>
                            <option value="Constantine" >Constantine</option>
                            <option value="Médéa" >Médéa</option>
                            <option value="Mostaganem" >Mostaganem</option>
                            <option value="M'Sila" >M'Sila</option>
                            <option value="Mascara" >Mascara</option>
                            <option value="Ouargla" >Ouargla</option>
                            <option value="Oran" >Oran</option>
                            <option value="El Bayadh" >El Bayadh</option>
                            <option value="Illizi" >Illizi</option>
                            <option value="Bordj Bou Arreridj" >Bordj Bou Arreridj</option>
                            <option value="Boumerdess" >Boumerdess</option>
                            <option value="El Tarf" >El Tarf</option>
                            <option value="Tindouf" >Tindouf</option>
                            <option value="Tissemsilt" >Tissemsilt</option>
                            <option value="El Oued" >El Oued</option>
                            <option value="Khenchela" >Khenchela</option>
                            <option value="Souk Ahras" >Souk Ahras</option>
                            <option value="Tipaza" >Tipaza</option>
                            <option value="Mila" >Mila</option>
                            <option value="Ain Defla" >Ain Defla</option>
                            <option value="Nâama" >Nâama</option>
                            <option value="Ain Temouchent" >Ain Temouchent</option>
                            <option value="Ghardaia" >Ghardaia</option>
                            <option value="Relizane" >Relizane</option>
                            <option value="Timimoun" >Timimoun</option>
                            <option value="Bordj Badji Mokhtar" >Bordj Badji Mokhtar</option>
                            <option value="Ouled Djellal" >Ouled Djellal </option>
                            <option value="Béni Abbès" >Béni Abbès</option>
                            <option value="Ain Salah" >Ain Salah </option>
                            <option value="Ain Guezzam" >Ain Guezzam</option>
                            <option value="Touggourt" >Touggourt </option>
                            <option value="Djanet" >Djanet</option>
                            <option value="El M'Ghair" >El M'Ghair</option>
                            <option value="El Meniaa" >El Meniaa</option>
                          </select>
                        
                        <label for="region">Wilaya</label>
                        
                        
                            <select type="select" class="form-control" id="floatingInput" placeholder="-----" oninput="this.className = ''" name="Sexe" id="Sexe">   
                              <option for="floatingInput">-----</option>
                              <option for="floatingInput">Homme </option>
                          <option for="floatingInput">Femme </option>
                            </select>
                            <label for="floatingInput">Sexe </label> 
                        <input type="email" class="form-control" id="floatingInput" oninput="this.className = ''" placeholder="name@example.com" name="Email" id="Email">
                        <label for="floatingInput">Email address</label>
                        
                        <input type="password" class="form-control" id="floatingPassword" oninput="this.className = ''" placeholder="mot de passe" name="Password" id="Password">
                        <label for="floatingPassword">Mot de Passe</label>
                        <input type="text" class="form-control" id="floatingInput" oninput="this.className = ''" placeholder="0********" name="Telephone" id="Telephone">
                        <label for="floatingInput">Téléphone</label>
                        
                        
                        <select class="form-control" oninput="this.className = ''" placeholder="Choisir la spécialité"  name="Specialite" id="Specialite">
                        <option value=""></option>
                        <option value='Acupuncteur'>Acupuncteur</option><option value='Algologue'>Algologue</option><option value='Allergologue'>Allergologue</option><option value='Anatomopathologiste'>Anatomopathologiste</option><option value='Anesthésiste-réanimateur'>Anesthésiste-réanimateur</option><option value='Angiologue'>Angiologue</option><option value='Audioprothésiste'>Audioprothésiste</option><option value='Cardiologue'>Cardiologue</option><option value='Cardiologue pédiatrique'>Cardiologue pédiatrique</option><option value='Centre d imagerie médicale'>Centre d'imagerie médicale</option><option value='Chiropracteur'>Chiropracteur</option><option value='Chirurgien cardiaque'>Chirurgien cardiaque</option><option value='Chirurgien cardiaque pédiatrique'>Chirurgien cardiaque pédiatrique</option><option value='Chirurgien dentiste'>Chirurgien dentiste</option><option value='Chirurgien esthétique et plastique'>Chirurgien esthétique et plastique</option><option value='Chirurgien généraliste'>Chirurgien généraliste</option><option value='Chirurgien infantile '>Chirurgien infantile </option><option value='Chirurgien maxillo-facial'>Chirurgien maxillo-facial</option><option value='Chirurgien Pédiatrique'>Chirurgien Pédiatrique </option><option value='Chirurgien thoracique'>Chirurgien thoracique</option><option value='Chirurgien vasculaire'>Chirurgien vasculaire</option><option value='Chirurgien viscérale'>Chirurgien viscérale</option><option value='Chirurgien viscérale pédiatrique'>Chirurgien viscérale pédiatrique</option>odialyse</option><option value='Dermato-vénérologue'>Dermato-vénérologue</option><option value='Diététicien'>Diététicien</option><option value='Endocrino-diabetologue'>Endocrino-diabetologue</option><option value='Gastro-entéro-hepatologue'>Gastro-entéro-hepatologue</option><option value='Généticien'>Généticien</option><option value='Gérontologue - gériatre'>Gérontologue - gériatre</option><option value='Gynéco-obstetricien'>Gynéco-obstetricien</option><option value='Hématologue'>Hématologue</option><option value='Hépatologue'>Hépatologue</option><option value='Infectiologue'>Infectiologue</option><option value='Kinésithérapeute'>Kinésithérapeute</option><option value='Maladies et Chirurgie CardioVasculaire'>Maladies et Chirurgie CardioVasculaire</option><option value='Médecin Biologiste Laboratoire'>Médecin Biologiste Laboratoire</option><option value='Médecin du sport'>Médecin du sport</option><option value='Médecin du travail'>Médecin du travail</option><option value='Médecin géneraliste'>Médecin géneraliste</option><option value='Médecin interniste'>Médecin interniste</option><option value='Médecin légiste'>Médecin légiste</option><option value='Médecin nucléaire'>Médecin nucléaire</option><option value='Médecin physique et de réadaptation'>Médecin physique et de réadaptation</option><option value='Médecine esthétique'>Médecine esthétique</option><option value='Néphrologue'>Néphrologue</option><option value='Néphrologue pédiatrique'>Néphrologue pédiatrique</option><option value='Neuro-chirurgien'>Neuro-chirurgien</option><option value='Neuro-physiologiste'>Neuro-physiologiste</option><option value='Neuro-psychiatre'>Neuro-psychiatre</option><option value='Neurologue'>Neurologue</option><option value='Nutritionniste'>Nutritionniste</option><option value='Onco-cancerologue'>Onco-cancerologue</option><option value='Oncologue médical'>Oncologue médical</option><option value='Ophtalmologue'>Ophtalmologue</option><option value='Optométriste'>Optométriste</option><option value='ORL'>ORL</option><option value='Orthophoniste'>Orthophoniste</option><option value='Orthoptiste'>Orthoptiste</option><option value='Ostéopathe'>Ostéopathe</option><option value='Pédiatre'>Pédiatre</option><option value='Phlébologue'>Phlébologue</option><option value='Pneumo-phtysio-allergologue'>Pneumo-phtysio-allergologue</option><option value='Podologue'>Podologue</option><option value='Proctologue'>Proctologue</option><option value='Psychiatre'>Psychiatre</option><option value='Psychologue'>Psychologue</option><option value='Radiologue'>Radiologue</option><option value='Radiothérapeute'>Radiothérapeute</option><option value='Réanimateur médical'>Réanimateur médical</option><option value='Réanimateur pédiatrique'>Réanimateur pédiatrique</option><option value='Rééducation fonctionnelle'>Rééducation fonctionnelle</option><option value='Rhumatologue'>Rhumatologue</option><option value='Sexologue'>Sexologue</option><option value='Stomatologue'>Stomatologue</option><option value='Traumato-orthopédiste'>Traumato-orthopédiste</option><option value='Traumato-orthopédiste pédiatrique'>Traumato-orthopédiste pédiatrique</option><option value='Urologue'>Urologue</option><option value='Urologue pédiatrique'>Urologue pédiatrique</option>            </select>
                        <label >Choisir la spécialité</label>   
                                            
                        </div>                    
                        </div>
                        

  <div class="tab"  >
   <h3 class="login-heading mb-4" >   Education Info:  </h3>


   <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Nom De Diplome" name="Diplome" id="Diplome">
    <label for="floatingInput">Diplome</label>

    <input type="text" class="form-control" id="floatingInput" placeholder="Institut de Diplome" name="Institut" id="Institut">
    <label for="floatingInput">Institut</label>


    <input type="number" min="1900" max="2099" step="1" value="2022" class="form-control" id="floatingInput" name="AnneeE" id="AnneeE" >
    <label for="floatingInput">Année</label>

       </div>
</div>


<div class="tab">
  <h3 class="login-heading mb-4" >   Experience Info:  </h3>


  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Nom De Departement" name="Departement" id="Departement">
    <label for="floatingInput">Departement</label>

    <input type="text" class="form-control" id="floatingInput" placeholder="Position dans le Departement" name="Position" id="Position">
    <label for="floatingInput">Position</label>


    <input type="text" class="form-control" id="floatingInput" placeholder="Nom d'Hopital ou Clinique" name="Hopital" id="Hopital">
    <label for="floatingInput">Hopital</label>
    
  </div>
</div>
 <!----  <div class="tab">Login Info:

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="emailM">
      <label for="floatingInput">Email address</label>
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passwordM">
      <label for="floatingPassword">Password</label>
    </div>
  </div>

  -->
 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

   
   
    
</div>
</div>

</div>
</div>
</div>
</div>





    <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    </script>
    
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>