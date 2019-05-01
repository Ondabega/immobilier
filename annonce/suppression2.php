<?php
include_once "../needed.php";

$nb=0; ?>


<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<title>Supp</title>
</head>
<body>
	<!-- navigation -->
	<div class="header" style="background: url(../images/cover7.jpg) no-repeat center center; background-size: cover; height: 500px">
		<nav class="nav" id="nav">
			<div class="element">
			<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
        <?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
      else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
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


<?php
if(empty($_SESSION['login']))
{ ?>
  <h2>Biens</h2>
  <h4>Vous devez être connecté pour accéder à cette partie.</h4>
  <a href="/moncompte/identification.php?redirection=annonce/ajout.php"><button class="btn btn-default">Se connecter</button></a>
  <a href="/index.php" class="btn btn-default"> Accueil</a>
<?php
}
else
{
  if(isset($_POST['supprimer'])){
    $quer= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
    $quer -> execute(array($_POST['id']));
    $Data= $quer -> fetch();
    if($Data['image'] != 0){
      remove_file($bdd,$Data['image']);
    }
    if($Data['image2'] != 0){
      remove_file($bdd,$Data['image2']);
    }
    if($Data['image3'] != 0){
      remove_file($bdd,$Data['image3']);
    }
    if($Data['image4'] != 0){
      remove_file($bdd,$Data['image4']);
    }
    if($Data['image5'] != 0){
      remove_file($bdd,$Data['image5']);
    }
    if($Data['image6'] != 0){
      remove_file($bdd,$Data['image6']);
    }
    if($Data['image7'] != 0){
      remove_file($bdd,$Data['image7']);
    }
    if($Data['image8'] != 0){
      remove_file($bdd,$Data['image8']);
    }

    $query = $bdd -> prepare('DELETE FROM vente WHERE id=?');
    $query -> execute(array($_POST['id']));

    success('Supprimé','Le bien a bien été supprimée.');



  }

  ?>

  <style>
      .conteneur_alerte{
          margin-top:20px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
      }
      .alerte{
          color: #000 ;
          font-size: 15px;
          background-color: #e3e3e3;
          border-color: #ccc;
          border-radius:6px;
          border-width: 1px;
          border-style: solid;
          margin: 5px;
      }
      .alerte:hover{
        opacity:0.7;
      }
      .info_alerte{
          margin: 10px;
          width: 320px;
          padding: 10px;
          border-radius:6px;
          background-color: #FFF;
          border-color: #ccc;
          border-width: 1px;
          border-style: solid;
      }

      .couleur{
          margin: 10px;
          width: 320px;
          height: 20px;
          border-radius:3px;
          border-color: #ccc;
          border-width: 1px;
          border-style: solid;
      }
      .date_et_titre{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
      }
  </style>


  <h2>Biens sur le marché</h2>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout_villes.php" class="bouton_menu" style="margin-right:20%">Ajout</a>
    <a href="suppression.php" class="bouton_menu bouton_nav_selected">Suppression</a>
  </div>




<?php

if(isset($_GET['nb'])){
$nb=(int ) $_GET['nb'];
}
  $qyy= $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE type_vente=0 LIMIT 7  OFFSET :nb ');
  $qyy->bindValue(':off', $nb, PDO::PARAM_INT);
  $qyy->execute();

  while($Data=$qyy->fetch()){

  ?>
<div class="conteneur_alerte">
  <a href="suppression_biens.php?id=<?php echo $Data['id']?>" >
		<div class="tbanner">
				<div class="tcontain" style="height: 20em; width: 40%;">
						<img src=<?php echo $Data['chemin'] ?> style="height: 100%  ; width: 100%;" >
				</div>
				<div class="tcontain" style="width: 60%;">
						<h3><?php echo $Data['nom'] ?></h3>

						<br>
						<p><?php echo $Data['description'] ?>.</p>
						<br>
						<p class="prix"><?php echo $Data['prix'] ?></p>
				</div>
		</div></a>
</div>

  <?php
}
 ?>

<?php


$test = $bdd->prepare('SELECT * FROM vente LIMIT 7 OFFSET :off ');
$test->bindValue(':off',(int) ($nb+5),PDO::PARAM_INT );
$test->execute();

 ?>
 <?php
  if($nb > 19){    ?>
      <a href="suppression2.php?nb=<?php echo ($nb-20);?>" class="btn btn-default">Villes précédentes</a>
    <?php
    }
    if($test -> fetch()){ ?>
    <a href="suppression2.php?nb=<?php echo $nb+20; ?>" class="btn btn-default">Ville suivantes</a>
  <?php } ?>


<?php
}
 include("../footer.php") ?>
