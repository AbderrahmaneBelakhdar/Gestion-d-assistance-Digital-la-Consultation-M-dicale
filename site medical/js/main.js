$(function() {

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteDropdown = function() {

		$('nav .dropdown').hover(function(){
			var $this = $(this);
			$this.addClass('show');
			$this.find('> a').attr('aria-expanded', true);
			$this.find('.dropdown-menu').addClass('show');
		}, function(){
			var $this = $(this);
				$this.removeClass('show');
				$this.find('> a').attr('aria-expanded', false);
				$this.find('.dropdown-menu').removeClass('show');
		});


		$('#dropdown04').on('show.bs.dropdown', function () {
		  console.log('show');
		});

	  $('.navbar .dropdown > a').click(function(){
	    location.href = this.href;
	  });
	}; 
	siteDropdown();

});

//valid forme

document.forms[0].addEventListener('submit',function(evenement){
	if(document.getElementById ('Nom').value=="")
	
	{
	 evenement.preventDefault();
		alert("Type a valid Designation");
		document.getElementById("Nom").focus();
		return false;
	}
	if(document.getElementById ('Prenom').value=="")
	{
		evenement.preventDefault();
		alert("Entrer un prix valable ");
		document.getElementById("Prenom").focus();
		return false;


	}
	if(document.getElementById ('DN').value=="")
	{
		evenement.preventDefault();
		alert("Entrer un prix valable");
		document.getElementById("DN").focus();
		return false;

	}
if(document.getElementById ('Sexe').value=="-----")
	{
		evenement.preventDefault();
		alert("Entrer un quantite valable ");
		document.getElementById("Sexe").focus();
		return false;

	}
if(document.getElementById ('Email').value=="")
	{
		evenement.preventDefault();
		alert("Selectionne une categorie");
		document.getElementById("Email").focus();
		return false;

	}

if(document.getElementById ('Password').value=="")
   {
		evenement.preventDefault();
		alert("Type a valid Mail");
	   document.getElementById("Password").focus();
	   return false;

   }
if(document.getElementById ('Telephone').value=="")
   {
		evenement.preventDefault();
		alert("Type a valid Number phone");
	   document.getElementById("Telephone").focus();
	   return false;

   }      
  })       


//slide
var slideIndex = 0;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}