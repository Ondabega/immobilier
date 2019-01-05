<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/style1.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>index</title>
</head>
<body>

	<!-- navigation -->
	<div class="header" style="background: url(images/cover3.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="annonce\index.php" class="selt" onclick="myFunction()">Annonces</a>
				<a href="contact-form.php" class="selt" onclick="myFunction()">Contact</a>
				<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
			else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
			<?php if(!empty($_SESSION['admin'])){ echo "<a href='annonce/ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
			</div>
			<div class="logow">
				<a href="#index" class="logo" > Audrey Brezout </a>

			</div>
		</nav>
		<div>
			<h1 class="accueil">Bienvenue chez Immobilier</h1>
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

	<div>
		<p class="phrase">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			<p class="phrase">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	</div>

	<!-- pied de page -->
</style>
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
