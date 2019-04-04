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

}elseif(isset($_POST['img-reset'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset2'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image2']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset3'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image4']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset5'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image2']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset6'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image2']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset7'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image2']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['img-reset8'])) {
  $query= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $query -> execute(array($_POST['id']));
  $Data= $query -> fetch();
  remove_file($bdd,$Data['image2']);
  $query = $bdd -> prepare('UPDATE vente SET image = NULL WHERE id = ?');
  $query -> execute(array($_POST['id']));
  success('Supprimé','L\'image a été supprimée.');
}elseif(isset($_POST['modifier'])){

  $quert= $bdd -> prepare('SELECT * FROM vente WHERE id=?');
  $quert -> execute(array($_POST['id']));
  $Data= $quert -> fetch();
  $file=$Data['image'];
  $file2=$Data['image2'];
  $file3=$Data['image3'];
  $file4=$Data['image4'];
  $file5=$Data['image5'];
  $file6=$Data['image7'];
  $file8=$Data['image8'];
  if($_FILES['fichier']['name'] != ""){
    if($Data['image'] != NULL ){remove_file($bdd,$Data['image']); }
    $file=upload($bdd,'fichier',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
    if($file <0 ){ $file= $Data['image'];}
  }
  if($_FILES['fichier2']['name'] != ""){
    if($Data['image2'] != NULL ){remove_file($bdd,$Data['image2']); }
    $file2=upload($bdd,'fichier2',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }
  if($_FILES['fichier3']['name'] != ""){
    if($Data['image3'] != NULL ){remove_file($bdd,$Data['image3']); }
    $file3=upload($bdd,'fichier3',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }
  if($_FILES['fichier4']['name'] != ""){
    if($Data['image4'] != NULL ){remove_file($bdd,$Data['image4']); }
    $file4=upload($bdd,'fichier4',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
  }
  if($_FILES['fichier5']['name'] != ""){
    if($Data['image5'] != NULL ){remove_file($bdd,$Data['image5']); }
    $file5=upload($bdd,'fichier5',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }
  if($_FILES['fichier6']['name'] != ""){
    if($Data['image6'] != NULL ){remove_file($bdd,$Data['image6']); }
    $file2=upload($bdd,'fichier6',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }
  if($_FILES['fichier7']['name'] != ""){
    if($Data['image7'] != NULL ){remove_file($bdd,$Data['image7']); }
    $file7=upload($bdd,'fichier7',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }
  if($_FILES['fichier8']['name'] != ""){
    if($Data['image8'] != NULL ){remove_file($bdd,$Data['image8']); }
    $file8=upload($bdd,'fichier8',"../../ressources","idees",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));

  }

  $query = $bdd -> prepare("UPDATE vente SET type=:type ,transversalisation = :transversalisation,retenue= :retenue,respo_rea=:respo_rea, situation_actuelle= :situation_actuelle, situation_proposee= :situation_proposee ,image = :image , nbidees= :nbidees, image2= :image2 WHERE id = :id ");
  $query->bindValue('type', $_POST['type'],PDO::PARAM_STR);
  $query->bindValue('transversalisation', $_POST['transversalisation'],PDO::PARAM_INT);
 $query->bindValue('retenue', $_POST['retenue'],PDO::PARAM_INT);
 $query->bindValue('respo_rea', $_POST['respo_rea'],PDO::PARAM_INT);
 $query->bindValue('situation_actuelle', $_POST['situation_actuelle'],PDO::PARAM_STR);
 $query->bindValue('situation_proposee', $_POST['situation_proposee'],PDO::PARAM_STR);
 $query->bindValue('id', $_POST['id'],PDO::PARAM_INT);
 $query->bindValue('image',$file,PDO::PARAM_INT);
 $query->bindValue('nbidees',$_POST['nbidees'],PDO::PARAM_INT);
 $query->bindValue('image2',$file2,PDO::PARAM_INT);
 $query->execute();

  if($query ==false){
    warning('Erreur','Les données entrées ne sont pas conformes.');
  }else{
    success('Modifié','La question a bien été mise à jour.');
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


$test = $bdd->prepare('SELECT * FROM ville LIMIT 20 OFFSET :off ');
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
 include("../footer.php") ?>
