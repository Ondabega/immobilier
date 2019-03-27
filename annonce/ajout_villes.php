<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
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
  <h2>Espace admin</h2>
  <h4>Vous devez être connecté pour accéder à cette partie.</h4>
  <a href="/moncompte/identification.php?redirection=annonce/ajout.php"><button class="btn btn-default">Se connecter</button></a>
  <a href="../index.php" class="btn btn-default">Acceuil</a>
<?php
}
else
{
  echo "<h2>Gestion des Villes</h2>";
  if(!$_SESSION['admin']){
    echo "<p>Vous n'avez pas les droits pour accéder à cette partie. <a href='".$url."' class='btn btn-default pull-right'>Accueil</a></p>";
  }else{

  if(!empty($_POST)){

    $query = $bdd -> prepare('INSERT INTO ville(nom) VALUES (:nom)');

    $query2= $bdd ->prepare('SELECT * FROM ville WHERE nom= :n');
    $query2->bindValue(':n', $_POST['nom'],PDO::PARAM_STR);
    $query2->execute();

    if($query2->fetch()){
      warning('Erreur','Cette ville appartient déja à la base de données');
    }else{
    $query -> execute(array(
      'nom' => $_POST['nom']
    ));

    if($query ==false){
      warning('Erreur','Les données entrées ne sont pas conformes.');
    }else{
      success('Ajouté','Ville bien ajoutée.');
    }}
  }
  ?>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout_villes.php" class="bouton_menu bouton_nav_selected" style="margin-right:20%">Ajout de ville</a>
    <a href="suppression.php" class="bouton_menu">Modification/Suppression ville</a>
  </div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
  <form method="post" style="margin-top:20px;" enctype="multipart/form-data">

  	<div class="form-group">
  	<label>Nom ville</label>
  	<input class="form-control" name="nom" type="text">
  	</div>

</div>
<div class="col-md-2">
  <input value="Ajouter" class="btn btn-default" type="submit">


</form>
</div>



</div>

<?php
}
}
?>
<?php include("../footer.php") ?>
