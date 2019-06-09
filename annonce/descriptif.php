<?php
include_once "../needed.php";
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
			width: 5000px;
			height: 400px;
			position: relative;
			transition: left 1.5s;
			-webkit-transition: left 1.5s;
			-moz-transition: left 1.5s;
			-o-transition: left 1.5s;
		}

		.slider-image {
      width: 12%;
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
			height: 12px;
			width: 14px;
			border-radius: 5px;
			background-color: #3C7AB3;
			transition: 1s;
			margin-left: .3em;
			margin-right: .3em;
		}

		.slider-button:hover {
			width: 20px;
			background-color: #44DAE8;
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

    #slider-image-6:target ~ .image-container{
			left: -3000px;
		}

    #slider-image-7:target ~ .image-container{
			left: -3600px;
		}

    #slider-image-8:target ~ .image-container{
			left: -4200px;
		}


		* {
			padding: 0;
			margin: 0;
		}

				.tbanner {
						margin: 2%;
						display: flex;
						flex-direction: row;
						border: 1px solid grey;
						box-shadow: 10px 5px 5px grey;
				}

				.tcontain {
						display: block;
						margin: 1%;
						padding: 1%;
				}

	</style>
</head>
<body>
	<section class="navbar">
		<header>
      <nav class="nav" id="nav" style="background-color:rgba(3, 3, 3, 0.6); position: relative;">
  			<div class="element">
  				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
  				<il class="selt" id="smenul">Annonces
  					<ul class="smenu">
  						<il style="display: inherit; margin-top: 0.80em;"><a class="slist" style="color:white;" href="vente.php" style="color:black;">Ventes</a></il>
  						<il style="display: inherit;"><a class="slist" style="color:white;" href="location.php" style="color:black;">Locations</a></il>
  					</ul>
  				</il>
  				<a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
					<?php if(!empty($_SESSION['admin'])){ echo "
  					<il class='selt' id='smenul'onclick='myFunction()'>Espace Admin
  					<ul class='smenu'>
  						<il style='display: inherit; margin-top: .80em;'><a class='slist' href='ajout.php' style='color:white;'>Biens</a></il>
  						<il style='display: inherit;'><a class='slist' href='ajout_villes.php' style='color:white;'>Villes</a></il>

  					</ul>
  				</il> " ;} ?>
  				é
  			</div>
  		</header>
	</section>

<?php
  if (!isset($_GET["vente"])){
    echo "ERREUR DE SESSION";

  }else{
    $vente=$_GET["vente"]; ?>

	<article>
		<section class="slide-container">
			<span id="slider-image-1"></span>
		  <span id="slider-image-2"></span>
			<span id="slider-image-3"></span>
     <span id="slider-image-4"></span>
     <span id="slider-image-5"></span>
      <span id="slider-image-6"></span>
      <span id="slider-image-7"></span>
      <span id="slider-image-8"></span>
			<div class="image-container">
        <?php

        $Query = $bdd->prepare('SELECT * FROM vente JOIN files ON vente.image=files.id WHERE vente.id= :i') ;

        $Query->bindValue(':i',(int) $vente,PDO::PARAM_INT);
        $Query->execute();
        $Data = $Query->fetch();
        echo "<img src=".$Data['chemin']." class='slider-image'>";
        ?>
        <?php
        if($Data['image2']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query2 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query2->bindValue(':i',(int) $Data['image2'],PDO::PARAM_INT);
        $Query2->execute();
        $Data2=$Query2->fetch();
        echo "<img src=".$Data2['chemin']." class='slider-image'>";}

       if($Data['image3']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query3 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query3->bindValue(':i',(int) $Data['image3'],PDO::PARAM_INT);
        $Query3->execute();
        $Data3=$Query3->fetch();
        echo "<img src=".$Data3['chemin']." class='slider-image'>";}

        if($Data['image4']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query4 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query4->bindValue(':i',(int) $Data['image4'],PDO::PARAM_INT);
        $Query4->execute();
        $Data4=$Query4->fetch();
        echo "<img src=".$Data4['chemin']." class='slider-image'>";}

        if($Data['image5']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query5 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query5->bindValue(':i',(int) $Data['image5'],PDO::PARAM_INT);
        $Query5->execute();
        $Data5=$Query5->fetch();
        echo "<img src=".$Data5['chemin']." class='slider-image'>";}

        if($Data['image6']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query6 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query6->bindValue(':i',(int) $Data['image6'],PDO::PARAM_INT);
        $Query6->execute();
        $Data6=$Query6->fetch();
        echo "<img src=".$Data6['chemin']." class='slider-image'>";}

        if($Data['image7']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query7 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query7->bindValue(':i',(int) $Data['image7'],PDO::PARAM_INT);
        $Query7->execute();
        $Data7=$Query7->fetch();
        echo "<img src=".$Data7['chemin']." class='slider-image'>";}

        if($Data['image8']==0){ ?>
          <img src="../images/carroussel_base.jpg" class="slider-image">
        <?php }else{
        $Query8 = $bdd->prepare('SELECT * FROM files WHERE files.id= :i') ;
        $Query8->bindValue(':i',(int) $Data['image8'],PDO::PARAM_INT);
        $Query8->execute();
        $Data8=$Query8->fetch();
        echo "<img src=".$Data8['chemin']." class='slider-image'>";}
         ?>
			</div>
			<div class="button-container">
				<a href="#slider-image-1" class="slider-button"></a>
				<a href="#slider-image-2" class="slider-button"></a>
				<a href="#slider-image-3" class="slider-button"></a>
        <a href="#slider-image-4" class="slider-button"></a>
       <a href="#slider-image-5" class="slider-button"></a>
        <a href="#slider-image-6" class="slider-button"></a>
        <a href="#slider-image-7" class="slider-button"></a>
        <a href="#slider-image-8" class="slider-button"></a>
			</div>
		</section>

		<section class="detail">
      <div style="margin: auto 10% auto 10%;">

      </div>
			<div class="discribe">
        <h2 style="border-bottom-style: none; margin-bottom:auto;"><?php echo $Data['titre']; ?></h2>
        <p class="cout" style="margin:0.2em 0 2em 0; padding:0;"><?php echo $Data['prix']."€/mois"; ?></p>
				<h4 style="margin-bottom: .5em;">Description:</h4>
        <p><?php echo $Data['description']; ?>
				<p style="text-align: left;"><?php echo $Data['prix']; ?></p>
				<h4 style="margin-bottom: .5em;">Criteres:</h4>
				<p>Lieu: <?php   $query = $bdd->prepare('SELECT * FROM ville WHERE ville.id= :i') ;
         $query->bindValue(':i',(int) $Data['ville'], PDO::PARAM_INT);
        $query->execute();
        $daa = $query->fetch();
        echo $daa['nom'] ?></p>
				<p>Type: <?php  if($Data['type_bien']==0){echo " Maison";}else{echo "Appartement";} ?></p>
			</div>
			<div style="text-align: center; margin-bottom: 5em;"><a href="../contact-form.php"><button style="color:black; border:0.1px solid black" class="selt">Nous contacter</button></a></div>
			<style type="text/css">
				.discribe {
					margin: 5% 15% 5% 15%;
				}

			</style>

		</section>
	</article>


<?php }?>


<<<<<<< HEAD
=======


		<script type="text/javascript">
			let sliderImages = document.querySelectorAll('.slide-img'),zapNext = document.querySelector('#nxt'), zapPrev = document.querySelector('#prev'), current = 0;

			// nettoie les images
			function reset(){
				for (let i = 0; i < sliderImages.length; i++) {
					sliderImages[i].style.display = 'none'
				}
			}

			// Debut du slide
			function startSlide(){
				reset();
				sliderImages[0].style.display = 'block'
			}

			// image precedente
			function slideLeft(){
				reset();
				sliderImages[current - 1].style.display = 'block';
				current--;
			}

			// image suivante
			function slideRight(){
				reset();
				sliderImages[current + 1].style.display = 'block';
				current++;
			}

			// zap precedent
			zapPrev.addEventListener('click', function(){
				if (current === 0) {
					current = sliderImages.length;
				}
				slideLeft();
			})

			// zap suivant
			zapNext.addEventListener('click', function(){
				if (current === sliderImages.length - 1) {
					current = -1;
				}
				slideRight();
			})

			startSlide();
		</script>

	</section>


<!-- fin de slider test -->


>>>>>>> 215728a518ac6b4cba60ef11cbb2d913a24f8cda
  <footer class="footer" style="margin-bottom: 0px;">
  			<div class="row">
              			<h4>boutikimo@gmail.com</h4>
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
