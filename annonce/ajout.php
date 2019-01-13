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
	<div class="header" style="background: url(../images/cover2.jpg) no-repeat center center; background-size: cover; height: 500px">
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
  <h2>Espace admin</h2>
  <h4>Vous devez être connecté pour accéder à cette partie.</h4>
  <a href="/moncompte/identification.php?redirection=annonce/ajout.php"><button class="btn btn-default">Se connecter</button></a>
  <a href="../index.php" class="btn btn-default">Acceuil</a>
<?php
}
else
{
  echo "<h2>Gestion des offres</h2>";
  if(!$_SESSION['admin']){
    echo "<p>Vous n'avez pas les droits pour accéder à cette partie. <a href='".$url."' class='btn btn-default pull-right'>Accueil</a></p>";
  }else{

  if(!empty($_POST)){

    $file=upload($bdd,'file',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
    if($file < 0){$file=NULL;}
    if($_POST['type']==0){
    $query = $bdd -> prepare('INSERT INTO vente(prix,description,ville,image,depositaire) VALUES (:prix,:description,:ville,:image,:depositaire)');

    $query -> execute(array(
      'prix' => $_POST['prix'],
      'description' => $_POST['Description'],
      'ville' => $_POST['ville'],
      'image' => $file,
      'depositaire' => $_POST['depositaire'],
    ));

    if($query ==false){
      warning('Erreur','Les données entrées ne sont pas conformes.');
    }else{
      success('Ajouté','Offre de vente bien ajoutée.');
    }
  }else{
    $query = $bdd -> prepare('INSERT INTO location(prix,description,ville,image,depositaire) VALUES (:prix,:description,:ville,:image,:depositaire)');

    $query -> execute(array(
      'prix' => $_POST['prix'],
      'description' => $_POST['Description'],
      'ville' => $_POST['ville'],
      'image' => $file,
      'depositaire' => $_POST['depositaire'],
    ));

    if($query ==false){
      warning('Erreur','Les données entrées ne sont pas conformes.');
    }else{
      success('Ajouté','Offre de location bien ajoutée.');

    }

  }}
  ?>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout.php" class="bouton_menu bouton_nav_selected" style="margin-right:20%">Ajout</a>
    <a href="suppression.php" class="bouton_menu">Modification/Suppression</a>
  </div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
  <form method="post" style="margin-top:20px;" enctype="multipart/form-data">

  	<div class="form-group">
  	<label>Type</label>
  	<select name="type" class="form-control">
  		<option value="0" selected="selected">vente</option>
  		<option value="1">location</option>
  	</select>
  	</div>

    <div class="form-group">
  	<label>Prix</label>
  	<input class="form-control" name="prix" type="int">
  	</div>

  	<div class="form-group">
  	<label>Description</label>
  	<input class="form-control" name="Description" type="text">
  	</div>

    <div class="form-group">
  	<label>Ville</label>
  	<input class="form-control" name="ville" type="text">
  	</div>

    <div class="form-group">
  		<label>Image :     </label>
  		<input name="file" type="file">
  	</div>
    <div class="form-group">

  <label>Depositaire</label>
  <select class="form-control" name="depositaire" >
    <?php
    $profil = $bdd -> query('SELECT * FROM utilisateur');
    while($personne = $profil -> fetch()){ ?>
      <option value="<?php echo $personne['id']; ?>" ><?php echo $personne['nom']." ".$personne['prenom']; ?></option>
  <?php  } ?>
  </select>
</div>


  	<input value="Ajouter" class="btn btn-default" type="submit">


  </form>

</div>
<div class="col-md-2">
</div>

</div>


<?php
}
}
?>
