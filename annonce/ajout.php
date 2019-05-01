<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<title>Add</title>
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
    if($file < 0){warning('Erreur',"Un problème est survenu avec l'image principale");}else{

			$file2=upload($bdd,'file2',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file2 < 0){$file2=0;}
			$file3=upload($bdd,'file3',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file3 < 0){$file3=0;}
			$file4=upload($bdd,'file4',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file4 < 0){$file4=0;}
			$file5=upload($bdd,'file5',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file5 < 0){$file5=0;}
			$file6=upload($bdd,'file6',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file6 < 0){$file6=0;}
			$file7=upload($bdd,'file7',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file7 < 0){$file7=0;}
			$file8=upload($bdd,'file8',"../ressources",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
			if($file8 < 0){$file8=0;}

    $query = $bdd -> prepare('INSERT INTO vente(prix,description,titre,ville,image,depositaire,type_vente,type_bien,image2,image3,image4,image5,image6,image7,image8) VALUES (:prix,:description,:titre,:ville,:image,:depositaire,:type_vente,:type_bien,:image2,:image3,:image4,:image5,:image6,:image7,:image8)');

    $query -> execute(array(
      'prix' => $_POST['prix'],
      'description' => $_POST['Description'],
			'titre' => $_POST['titre'],
      'ville' => $_POST['ville'],
      'image' => $file,
      'depositaire' => $_POST['depositaire'],
			'type_vente' => $_POST['type_vente'],
			'type_bien' => $_POST['type_bien'],
			'image2' => $file2,
			'image3' => $file3,
			'image4' => $file4,
			'image5' => $file5,
			'image6' => $file6,
			'image7' => $file7,
			'image8' => $file8,
    ));

    if($query ==false){
      warning('Erreur','Les données entrées ne sont pas conformes.');
    }else{
      success('Ajouté','Offre bien ajoutée.');
    }
  }}
  ?>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout.php" class="bouton_menu bouton_nav_selected" style="margin-right:20%">Ajout de bien</a>
    <a href="suppression2.php" class="bouton_menu">Suppression</a>
  </div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
  <form method="post" style="margin-top:20px;" enctype="multipart/form-data">

  	<div class="form-group">
  	<label>Type de vente</label>
  	<select name="type_vente" class="form-control">
  		<option value="0" selected="selected">vente</option>
  		<option value="1">location</option>
  	</select>
  	</div>

		<div class="form-group">
		<label>Type de bien</label>
		<select name="type_bien" class="form-control">
			<option value="0" selected="selected">Maison</option>
			<option value="1">Appartement</option>
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
  	<label>Titre</label>
  	<input class="form-control" name="titre" type="text">
  	</div>

    <div class="form-group">
  	<label>Ville</label>
		<select class="form-control" name="ville" >
	    <?php
	    $lieu = $bdd -> query('SELECT * FROM ville');
	    while($ville = $lieu -> fetch()){ ?>
	      <option value="<?php echo $ville['id']; ?>" ><?php echo $ville['nom']; ?></option>
	  <?php  } ?>
	  </select>
  	</div>


		<label>Depositaire</label>
		<select class="form-control" name="depositaire" >
			<?php
			$profil = $bdd -> query('SELECT * FROM utilisateur');
			while($personne = $profil -> fetch()){ ?>
				<option value="<?php echo $personne['id']; ?>" ><?php echo $personne['nom']." ".$personne['prenom']; ?></option>
		<?php  } ?>
		</select>

    <div class="form-group">
  		<label>Image principale :     </label>
  		<input name="file" type="file">
  	</div>


			<div class="form-group">
	  		<label>Image2 :     </label>
	  		<input name="file2" type="file">
	  	</div>


				<div class="form-group">
		  		<label>Image3 :     </label>
		  		<input name="file3" type="file">
		  	</div>

					<div class="form-group">
			  		<label>Image4 :     </label>
			  		<input name="file4" type="file">
			  	</div>


						<div class="form-group">
				  		<label>Image5 :     </label>
				  		<input name="file5" type="file">
				  	</div>


							<div class="form-group">
					  		<label>Image6 :     </label>
					  		<input name="file6" type="file">
					  	</div>



								<div class="form-group">
						  		<label>Image7 :     </label>
						  		<input name="file7" type="file">
						  	</div>


					<div class="form-group">
							<label>Image8 :     </label>
				  		<input name="file8" type="file">
					  	</div>

</div>

</div>
<div class="col-md-2">
</div>

<div class="row">
	<input value="Ajouter" class="btn btn-default" type="submit">


</form>
</div>

</br></br></br>


<?php
}
}
?>
<?php include("../footer.php") ?>
