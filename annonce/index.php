<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Style/style1.css">
	<title>Untitled</title>
</head>
<body>

	<!-- navigation -->
	<div class="header" style="background: url(../images/cover2.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
			<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="#portefolio" class="selt" onclick="myFunction()">Annonces</a>
				<a href="#contact" class="selt" onclick="myFunction()">Contact</a>
				<a href="#connexion" class="selt" id="connect" onclick="myFunction()">Connexion</a>
			</div>
			<div class="logow">
				<a href="#index" class="logo" > Audrey Brezout </a>

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

  <section class="banner" id="index">
  		<div class="contain">
  			<div class="inbanner">
    				<a href="#contact"><button class="btn-custom"> La force est dans le geste </button></a>
  			</div>
  		</div>
  	</section>
