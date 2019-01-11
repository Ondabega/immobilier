<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Style/style1.css">
	<title>Annonces</title>
</head>
<body style="background: url(../images/cover2.jpg) no-repeat center center; background-size: cover; height: 610px; background-attachment: fixed;">

	<!-- navigation -->
	<div class="header">
		<nav class="nav" id="nav">
			<div class="element">
			<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
        	<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
				else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
        <?php if(!empty($_SESSION['admin'])){ echo "<a href='ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace administrateur</a>" ;} ?>
			</div>
			<div class="logow">
				<a href="../index.php" class="logo" > Audrey Brezout </a>

			</div>
		</nav>
		<div class="manda">
			<a href="vente.php"><button class="boutton">Achats</button></a>
			<a href="location.php"><button class="boutton" id="boutton-d">Locations</button></a>
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

	<footer class="footer">
				<div class="row">
										<a class="case" rel="follow" href="https://twitter.com/">
											<img class="icon" alt="Twitter" title="Twitter" src="../twitter-icon.svg"></a></td>

										<a class="case" rel="follow" href="https://www.linkedin.com/">
											<img class="icon" alt="LinkedIn" title="LinkedIn" src="../../linkedin-icon.svg"></a>

										<a class="case" rel="follow" href="https://www.instagram.com/">
										<img class="icon" alt="Instagram" title="Instagram" src="../instagram-icon.svg"></a>

										<a class="case" rel="follow" href="https://www.facebook.com/">
										<img class="icon" alt="Facebook" title="Facebook" src="../facebook-icon.svg"></a>
							</div>

					<hr class="separator" style="margin-left: 47%;">

					<div class="footer-bottom">
						<div class="copyright-text">
							<p>CopyRight © 2018 Name</p>
						</div> <!-- End Col -->
					</div>
	</footer>

















</body>
