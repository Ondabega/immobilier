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
	<div class="header" style="background: url(../images/cover2.jpg) no-repeat center center; background-size: cover; height: 500px">
		<nav class="nav" id="nav">
			<div class="element">
			<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="#portefolio" class="selt" onclick="myFunction()">Annonces</a>
				<a href="#contact" class="selt" onclick="myFunction()">Contact</a>
        	<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
				else{ echo "<a href='../index.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
        <?php if($_SESSION['admin']){ echo "<a href='ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
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
