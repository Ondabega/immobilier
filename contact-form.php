<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>contact-form</title>
</head>
<body>

	<style>
	.smenu {
		padding: 0;
		margin: 0;
		display: none;
	}

	.selt:hover .smenu {
		display: block;
	}

	.smenu .slist {
		position: relative;
		display: block;
		border-radius: 5px;
		padding: 0.75em;
		text-align: center;
		text-decoration: none;
	}

	.smenu .slist:hover {
		background-color: #3C7AB3;
		opacity: .8;
	}

	#smenul:hover {
		text-align: center;
		padding: 0.75em 0 0 0;
		transition: 0.1s;
		color:white;
	}

	#smenul {
		transition: 0s;
	}

	#smenul:hover {
		background-color: inherit;
		cursor: default;
	}

	</style>

	<!-- navigation -->
	<div class="header" id="headcontact" style="background: url(images/img3.jpg) no-repeat center center; background-size: cover; height: 20em;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit; margin-top: .80em;"><a class="slist" style="color:white;" href="annonce/vente.php" style="color:black;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" style="color:white;" href="annonce/location.php" style="color:black;">Locations</a></il>
					</ul>
				</il>
				<?php if(!empty($_SESSION['admin'])){ echo "
					<il class='selt' id='smenul'onclick='myFunction()'>Espace Admin
					<ul class='smenu'>
						<il style='display: inherit; margin-top: .80em;'><a class='slist' href='annonce/ajout.php' style='color:white;'>Biens</a></il>
						<il style='display: inherit;'><a class='slist' href='annonce/ajout_villes.php' style='color:white;'>Villes</a></il>

					</ul>
				</il> " ;} ?>

			</div>
		</nav>
		<div>
			<h1 class="accueil" style="color:white;"></h1>
		</div>
	</div>

	<!-- add javascript for navbar onscroll -->
	<script type="text/javascript">
		window.onscroll = function() {myFunction()};

		function myFunction() {
  		if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    		document.getElementById("nav").className = "navbar";
    	}
  		else {
    		document.getElementById("nav").className = "";
  		}
		}
	</script>

<section class="contact" id="contact">
		<div class="container">

				<div class="row">
		        	<div class="margfoot">
		        		<fieldset>
		            		<legend></legend>
										<div class="logow">
											<a href="index.php" class="logo" style="color:black;"> Audrey Brezout </a>
										</div>
										<div class="phrase">
											<p> Aprés plus de 12ans d'éxpérience dans le domaine de l'immobilier, je vous invite à me contacter par mail pour obtenir des conseils.</p>
									  </div>
								</fieldset>
							</div>

		    	</div>
			</div>
	</section>
	<!-- fin de contact********************* -->

	<!-- pied de page -->
	<footer class="footer" style="margin-bottom: 0px;">
				<div class="row">
	            			<h6 style="color:white;">boutikimo@gmail.com</h6>
	          	</div>

					<hr class="separator" style="margin-left: 47%;">

					<div class="footer-bottom">
						<div class="copyright-text">
							<p>CopyRight © 2019 Boutik Imo</p>
						</div> <!-- End Col -->
					</div>
	</footer>

</body>
</html>
