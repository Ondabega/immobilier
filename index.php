<?php ini_set('display_errors',1);
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/x-svg" href="icons/logo-bleu.svg">
	<meta name="author" content="Domi and Thomas">
	<meta name="description" content="Entreprise, Agence immobilière">
	<meta name="keywords" content="istres, immobilier, martigues, Audrey Brezout, Entreprise, immo, BoutikImo,">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>index</title>
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
	background-color: inherit;
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
	<div class="header" style="background: url(images/img3.jpg) no-repeat center; background-size: cover;">
		<div>
			<img src="images/Logoblanc.png" alt="log boutik imo" style="height: 600px; weight: 600px; margin-top: 30px;display: table-cell; vertical-align: middle; margin-left: auto; margin-right: auto;"/>
		</div>
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit; margin-top: .80em;"><a class="slist" href="annonce/vente.php" style="color:white;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/location.php" style="color:white;">Locations</a></il>
					</ul>
				</il>
				<a href="contact-form.php" class="selt" onclick="myFunction()">Contact</a>
				<?php if(!empty($_SESSION['admin'])){ echo "
					<il class='selt' id='smenul'onclick='myFunction()'>Espace Admin
					<ul class='smenu'>
						<il style='display: inherit; margin-top: .80em;'><a class='slist' href='annonce/ajout.php' style='color:white;'>Biens</a></il>
						<il style='display: inherit;'><a class='slist' href='annonce/ajout_villes.php' style='color:white;'>Villes</a></il>

					</ul>
				</il> " ;} ?>
				<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
			else{ echo "<a href='../moncompte/identification.php' class='selt' onclick='myFunction()'>Connexion</a>"; }?>
			</div>
		</nav>

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
