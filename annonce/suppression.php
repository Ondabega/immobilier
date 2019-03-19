<?php
include_once "../needed.php";

$nb=0; ?>


<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<title>Untitled</title>
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
			<div class="logow">
				<a href="../index.php" class="logo" > Audrey Brezout </a>

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
  <h2>Villes</h2>
  <h4>Vous devez être connecté pour accéder à cette partie.</h4>
  <a href="/moncompte/identification.php?redirection=annonce/ajout.php"><button class="btn btn-default">Se connecter</button></a>
  <a href="/index.php" class="btn btn-default"> Accueil</a>
<?php
}
else
{
  if(isset($_POST['supprimer'])){

    $query = $bdd -> prepare('DELETE FROM ville WHERE id=?');
    $query -> execute(array($_POST['id']));
    success('Supprimé','La ville a bien été supprimée.');

  }elseif(isset($_POST['modifier'])){

  $quert= $bdd -> prepare('SELECT * FROM villes WHERE id=?');
  $quert -> execute(array($_POST['id']));
  $Data= $quert -> fetch();

  $query = $bdd -> prepare("UPDATE ville SET nom=:nom WHERE id = :id ");
  $query->bindValue('nom', $_POST['nom'],PDO::PARAM_STR);
 $query->bindValue('id', $_POST['id'],PDO::PARAM_INT);
 $query->execute();

  if($query ==false){
    warning('Erreur','Les données entrées ne sont pas conformes.');
  }else{
    success('Modifié','La ville a bien été mise à jour.');
  }
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


  <h2>Villes de travail</h2>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout_villes.php" class="bouton_menu" style="margin-right:20%">Ajout</a>
    <a href="suppression.php" class="bouton_menu bouton_nav_selected">Modification/Suppression</a>
  </div>




<?php

if(isset($_GET['nb'])){
$nb=(int ) $_GET['nb'];
}
  $qyy= $bdd->prepare('SELECT * FROM ville LIMIT 20 OFFSET :off ');
  $qyy->bindValue(':off', $nb, PDO::PARAM_INT);
  $qyy->execute();

  while($Data=$qyy->fetch()){

  ?>
<div class="conteneur_alerte">
  <a href="suppression_villes.php?id=<?php echo $Data['id']?>" >
  <div class="alerte" >

      <div class="info_alerte">
          <div class="date_et_titre">
              <h4 style="margin-top: 0px; font-size: 40px;">
                <?php echo $Data['nom']; ?>
                </h4>
          </div>

          <p>
              <b><?php echo "Cliquez pour modifier/supprimer ";?><b><br></p>


      </div>

  </div></a>
</div>

  <?php
}
 ?>

<?php


$test = $bdd->prepare('SELECT * FROM idees_ameliorations LEFT JOIN profil ON profil.id=idees_ameliorations.emmetteur  LIMIT 20 OFFSET :off ');
$test->bindValue(':off',(int) ($nb+5),PDO::PARAM_INT );
$test->execute();

 ?>
 <?php
  if($nb > 19){    ?>
      <a href="suppression.php?nb=<?php echo ($nb-20);?>" class="btn btn-default">Villes précédentes</a>
    <?php
    }
    if($test -> fetch()){ ?>
    <a href="suppression.php?nb=<?php echo $nb+20; ?>" class="btn btn-default">Ville suivantes</a>
  <?php } ?>


<?php
}
