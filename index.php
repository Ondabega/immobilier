<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
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

</style>
	<!-- navigation -->
	<div class="header" style="background: url(images/cover3.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit; margin-top: .80em;"><a class="slist" href="annonce/vente.php" style="color:black;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/location.php" style="color:black;">Locations</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/locationp.php" style="color:black;">Loca</a></il>
					</ul>
				</il>
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
			<h1 class="accueil ml1">
	  <span class="text-wrapper">
	    <span class="line line1"></span>
	    <span class="letters">BoutikImmo</span>
	    <span class="line line2"></span>
	  </span>
	</h1>

	<script src="js/animation.js"></script>

		<script type="text/javascript">
		// Wrap every letter in a span
	$('.ml1 .letters').each(function(){
	  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
	});

	anime.timeline({loop: true})
	  .add({
	    targets: '.ml1 .letter',
	    scale: [0.3,1],
	    opacity: [0,1],
	    translateZ: 0,
	    easing: "easeOutExpo",
	    duration: 600,
	    delay: function(el, i) {
	      return 70 * (i+1)
	    }
	  }).add({
	    targets: '.ml1 .line',
	    scaleX: [0,1],
	    opacity: [0.5,1],
	    easing: "easeOutExpo",
	    duration: 700,
	    offset: '-=875',
	    delay: function(el, i, l) {
	      return 80 * (l - i);
	    }
	  }).add({
	    targets: '.ml1',
	    opacity: 0,
	    duration: 1000,
	    easing: "easeOutExpo",
	    delay: 10000
	  });
</script>

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
	<article style="margin: 0;">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Salutations! </h3>
		  <p class="phrase">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<hr class="separator" style="margin-left: 47%;">
	</acticle>
	<article style="">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Présentement! </h3>
		  <p class="phrase">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<hr class="separator" style="margin-left: 47%;">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Au revoir, merci! </h3>
			<p class="phrase">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	</article>

	<!-- pied de page -->
<footer class="footer" style="margin-bottom: 0px;">
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
