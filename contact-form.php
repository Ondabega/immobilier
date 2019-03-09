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
		border-radius: 10px;
		padding: 0.75em;
		text-align: center;
		text-decoration: none;
	}

	.smenu .slist:hover {
		background-color: yellow;
	}

	#smenul:hover {
		text-align: center;
		padding: 0.75em 0 0 0;
		transition: 0.1s;
	}

	#smenul {
		transition: 0s;
	}

	</style>

	<!-- navigation -->
	<div class="header" style="background: url(images/cover2.jpg) no-repeat center center; background-size: cover; height: 35em;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit;"><a class="slist" href="annonce/vente.php" style="color:black;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/location.php" style="color:black;">Locations</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/locationp.php" style="color:black;">Loca</a></il>
					</ul>
				</il>
        <?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
      else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
      <?php if(!empty($_SESSION['admin'])){ echo "<a href='ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
			</div>
			<div class="logow">
				<a href="index.php" class="logo" > Audrey Brezout </a>

			</div>
		</nav>
		<div>
			<h1 class="accueil">Contact  Us</h1>
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
			<h2 id="contact-me">Retrouvez nous</h2>
			<hr class="separator" style="margin-left: 47%;">
				<div class="row">
		        	<div class="margfoot">
		        		<fieldset>
		            		<legend>Contactez nous</legend>
										<div class="phrase">
											<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry of Lorem Ipsum.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry of Lorem Ipsum.</p>
									  </div>
								</fieldset>
							</div>

		    		<div class="margfoot" id="philo">
		          		<fieldset>
		          		<legend>Locaux</legend>
		          			<div class="rez">
		          			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.6715017648485!2d4.98628331549307!3d43.5091879791265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b61c97dd715a13%3A0x179b0df5b20d2a5f!2sAvenue+du+Palio%2C+13800+Istres!5e0!3m2!1sfr!2sfr!4v1546703427107" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div> <!-- End Col -->
		          		</fieldset>
		        	</div>
		    	</div>
			</div>
	</section>
	<!-- fin de contact********************* -->

	<!-- pied de page -->
<footer class="footer">
			<div class="row">
									<a class="case" rel="follow" href="https://twitter.com/">
										<img class="icon" alt="Twitter" title="Twitter" src="twitter-icon.svg"></a></td>

									<a class="case" rel="follow" href="https://www.linkedin.com/">
										<img class="icon" alt="LinkedIn" title="LinkedIn" src="linkedin-icon.svg"></a>

									<a class="case" rel="follow" href="https://www.instagram.com/">
									<img class="icon" alt="Instagram" title="Instagram" src="instagram-icon.svg"></a>

									<a class="case" rel="follow" href="https://www.facebook.com/">
									<img class="icon" alt="Facebook" title="Facebook" src="facebook-icon.svg"></a>
						</div>

				<hr class="separator" style="margin-left: 47%;">

				<div class="footer-bottom">
					<div class="copyright-text">
						<p>CopyRight © 2018 Name</p>
					</div> <!-- End Col -->
				</div>
</footer>

</body>
</html>
