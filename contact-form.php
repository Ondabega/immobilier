<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/style1.css">
	<title>contact-form</title>
</head>
<body>

	<!-- navigation -->
	<div class="header" style="background: url(images/cover2.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="annonce\index.php" class="selt" onclick="myFunction()">Annonces</a>
        <?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
      else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
      <?php if(!empty($_SESSION['admin'])){ echo "<a href='ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
			</div>
			<div class="logow">
				<a href="#index" class="logo" > Audrey Brezout </a>

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
			<hr class="separator">
				<div class="row">
		        	<div class="margfoot">
		        		<fieldset>
		            		<legend>Contactez nous</legend>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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

				<hr class="separator">

				<div class="footer-bottom">
					<div class="copyright-text">
						<p>CopyRight © 2018 Name</p>
					</div> <!-- End Col -->
				</div>
</footer>

</body>
</html>
