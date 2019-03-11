<?php
include_once "../needed.php";

$recherche = -1;
$debut=0;

if (isset($_GET["recherche"])){
    $recherche = $_GET["recherche"];
}

if(isset($_GET['nb'])){
  $debut=$_GET['nb'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style1.css">
	<style type="text/css">
		body {
			font-family: Verdana;
			padding: 0;
			margin: 0;
		}

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
    	background-color: orange;
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

		.slide-container {
			width: 600px;
			height: 400px;
			margin-top: 1em;
			margin-bottom: 5em;
			margin-left: auto;
			margin-right: auto;
			overflow: hidden;
			text-align: center;
		}

		.image-container {
			width: 3500px;
			height: 400px;
			position: relative;
			transition: left 1.5s;
			-webkit-transition: left 1.5s;
			-moz-transition: left 1.5s;
			-o-transition: left 1.5s;
		}

		.slider-image {
      width: 600px;
      height: 400px;
			float: left;
			margin: 0;
			padding: 0;
		}

		.button-container {
			top: -3em;
			position: relative;
		}

		.slider-button {
			display: inline-block;
			height: 10px;
			width: 12px;
			border-radius: 5px;
			background-color: red;
			transition: 1s;
			margin-left: .3em;
			margin-right: .3em;
		}

		.slider-button:hover {
			width: 17px;
			background-color: green;
			transition: .6s;
		}

		#slider-image-1:target ~ .image-container{
			left: 0px;
		}

		#slider-image-2:target ~ .image-container{
			left: -600px;
		}

		#slider-image-3:target ~ .image-container{
			left: -1200px;
		}

    #slider-image-4:target ~ .image-container{
			left: -1800px;
		}

    #slider-image-5:target ~ .image-container{
			left: -2400px;
		}

	</style>
</head>
<body>
	<section class="navbar">
		<header>
      <nav class="nav" id="nav" style="background-color:RGBA(88,168,158,0.5); position: relative;">
  			<div class="element">
  				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
  				<il class="selt" id="smenul">Annonces
  					<ul class="smenu">
  						<il style="display: inherit; margin-top: .80em;"><a class="slist" href="vente.php" style="color:black;">Ventes</a></il>
  						<il style="display: inherit;"><a class="slist" href="location.php" style="color:black;">Locations</a></il>
  						<il style="display: inherit;"><a class="slist" href="locationp.php" style="color:black;">Loca</a></il>
  					</ul>
  				</il>
  				<a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
  				<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
  			else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
  			<?php if(!empty($_SESSION['admin'])){ echo "<a href='annonce/ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
  			</div>
  			<div class="logow">
  				<a href="../#index" class="logo" > Audrey Brezout </a>
		</header>
	</section>

	<article>
		<section class="slide-container">
			<span id="slider-image-1"></span>
			<span id="slider-image-2"></span>
			<span id="slider-image-3"></span>
      <span id="slider-image-4"></span>
      <span id="slider-image-5"></span>
			<div class="image-container">
				<img src="../images/cover2.jpg" class="slider-image">
				<img src="../images/cover3.jpg" class="slider-image">
				<img src="../images/cover4.jpg" class="slider-image">
        <img src="../images/cover5.jpg" class="slider-image">
        <img src="../images/cover6.jpg" class="slider-image">
			</div>
			<div class="button-container">
				<a href="#slider-image-1" class="slider-button"></a>
				<a href="#slider-image-2" class="slider-button"></a>
				<a href="#slider-image-3" class="slider-button"></a>
        <a href="#slider-image-4" class="slider-button"></a>
        <a href="#slider-image-5" class="slider-button"></a>
			</div>
		</section>

		<section class="detail">
      <div style="margin: auto 10% auto 10%;">

      </div>
			<div class="discribe">
        <h2 style="border-bottom-style: none; margin-bottom:auto;">T3 Lorem ipsum dolor sit amet</h2>
        <p class="cout" style="margin:0.2em 0 2em 0; padding:0;">330€ / jour</p>
				<h4 style="margin-bottom: .5em;">Description</h4>
				<p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h4 style="margin-bottom: .5em;">Criteres et localisation</h4>
				<p>Lorem: ipsum</p>
				<p>jardin: nope</p>
				<p>Lieu: ipsum</p>
				<div class="carte" style="background-color: grey; height: 90px; width: 40em; margin: 1.5em 0 0 0;">ici la map</div>
			</div>
			<div style="text-align: center; margin-bottom: 5em;"><a href="../contact-form.php"><button class="selt">Nous contacter</button></a></div>
			<style type="text/css">
				.discribe {
					margin: 2em 15em 2em 15em;
				}
			</style>

		</section>
	</article>

  <footer class="footer" style="margin-bottom: 0px;">
  			<div class="row">
              			<a class="case" rel="follow" href="https://twitter.com/">
                			<img class="icon" alt="Twitter" title="Twitter" src="../twitter-icon.svg"></a>

              			<a class="case" rel="follow" href="https://www.linkedin.com/">
                			<img class="icon" alt="LinkedIn" title="LinkedIn" src="../linkedin-icon.svg"></a>

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
</html>
