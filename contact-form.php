<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Style/style1.css">
	<meta charset="utf-8">
	<title>footer</title>
</head>
<body>

  <div class="header" style="background: url(images/cover2.jpg) no-repeat center center; background-size: cover;">
    <nav class="nav" id="nav">
      <div class="element">
        <a href= "" class="selt" onclick="myFunction()">Accueil</a>
        <a href="annonce\index.php" class="selt" onclick="myFunction()">Annonces</a>
        <a href="contact-form.php" class="selt" onclick="myFunction()">Contact</a>
        <?php if(!empty($_SESSION['login'])){ echo "<a href='/moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>"; }
      else{ echo "<a href='/moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>" ; } ?>
      </div>
      <div class="logow">
        <a href="#index" class="logo" > Audrey Brezout </a>

      </div>
    </nav>
    <div>
      <h1 class="accueil">Message ou appel</h1>
    </div>
  </div>

<div></div>

<!-- STyle du pied de page -->
	<style type="text/css">

		* {
			margin: 0;
			padding: 0;
		}

		.footer {
			background-color: green;
			text-align: center;
			padding-left: 20%;
			padding-right: 20%;
			padding-bottom: 10px;
			padding-top: 10px;
		}

		.row {
			display: block;
		}

		.icon {
			display: inline-block;
			margin: 4%;
			height: 20px;
			width: 20px;
		}

		.copyright-text {
			margin: 10px;
		}

	</style>
	<!-- pied de page -->
	<footer class="footer">
				<div class="row">
					<h3> Réseaux sociaux </h3>
            			<a class="case" rel="follow" href="https://twitter.com/">
              			<img class="icon" alt="Twitter" title="Twitter" src="icons/twitter-icon.svg"></a>

            			<a class="case" rel="follow" href="https://www.linkedin.com/">
              			<img class="icon" alt="LinkedIn" title="LinkedIn" src="icons/linkedin-icon.svg"></a>

            			<a class="case" rel="follow" href="https://www.instagram.com/">
          				<img class="icon" alt="Instagram" title="Instagram" src="icons/instagram-icon.svg"></a>

          				<a class="case" rel="follow" href="https://www.facebook.com/">
          				<img class="icon" alt="Facebook" title="Facebook" src="icons/facebook-icon.svg"></a>

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
