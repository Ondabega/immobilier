<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Style/style1.css">
	<title>Untitled</title>
</head>
<body>

	<!-- navigation -->
	<div class="header" style="background: url(../images/cover2.jpg) no-repeat center center; background-size: cover; height: 500px">
		<nav class="nav" id="nav">
			<div class="element">
			<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<a href="#portefolio" class="selt" onclick="myFunction()">Achat</a>
				<a href="#contact" class="selt" onclick="myFunction()">Location</a>
        <?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
      else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
			</div>
			<div class="logow">
				<a href="#index" class="logo" > Audrey Brezout </a>

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
  $query= $bdd -> query('SELECT * FROM qualite_quiz_question ORDER BY ordre DESC LIMIT 1');
  while ($Data = $query->fetch()) {
  $lastOrdre= $Data['ordre'];
  }

  if(!empty($_POST)){
    if($lastOrdre >= $_POST['ordre']){
      $query = $bdd -> prepare('UPDATE qualite_quiz_question SET ordre=ordre+1 WHERE ordre >= ? ');
      $query -> execute(array($_POST['ordre']));
    }
    $file=upload($bdd,'file',"../../ressources","Quiz",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
    if($file < 0){$file=NULL;}
    $reponse1=$_POST['reponse1'];
    $reponse2=$_POST['reponse2'];
    $reponse3=$_POST['reponse3'];
    $reponse4=$_POST['reponse4'];
    if($_FILES['file_1']['name'] != ""){
      $id1=upload($bdd,'file_1',"../../ressources","Quiz",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
      if($id1>=0){
        $reponse1="img=".$id1;
      }
    }
    if($_FILES['file_2']['name'] != ""){
      $id2=upload($bdd,'file_2',"../../ressources","Quiz",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
      if($id2>=0){
        $reponse2="img=".$id2;
      }    }
    if($_FILES['file_3']['name'] != ""){
      $id3=upload($bdd,'file_3',"../../ressources","Quiz",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
      if($id3>=0){
        $reponse3="img=".$id3;
      }    }
    if($_FILES['file_4']['name'] != ""){
      $id4=upload($bdd,'file_4',"../../ressources","Quiz",5048576,array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'JPG' , 'JPEG' , 'GIF' , 'PNG' ));
      if($id4>=0){
        $reponse4="img=".$id4;
      }    }
    $query = $bdd -> prepare('INSERT INTO qualite_quiz_question(type,titre,question,reponse_1,reponse_2,reponse_3,reponse_4,corrige_1,corrige_2,corrige_3,corrige_4,ordre,image_correction,commentaire) VALUES (:type,:titre,:question,:reponse_1,:reponse_2,:reponse_3,:reponse_4,:corrige_1,:corrige_2,:corrige_3,:corrige_4,:ordre,:file,:commentaire)');
    $id= $bdd -> lastInsertId();
    $query -> execute(array(
      'type' => $_POST['type'],
      'titre' => $_POST['titre'],
      'question' => $_POST['question'],
      'reponse_1' => $reponse1,
      'reponse_2' => $reponse2,
      'reponse_3' => $reponse3,
      'reponse_4' => $reponse4,
      'corrige_1' => $_POST['vrai1'],
      'corrige_2' => $_POST['vrai2'],
      'corrige_3' => $_POST['vrai3'],
      'corrige_4' => $_POST['vrai4'],
      'ordre' => $_POST['ordre'],
      'file' => $file,
      'commentaire' => $_POST['commentaire']
    ));

    if($query ==false){
      warning('Erreur','Les données entrées ne sont pas conformes.');
    }else{
      success('Ajouté','La question a bien été ajoutée.');
      $lastOrdre++;
    }
  }
  ?>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout.php" class="bouton_menu bouton_nav_selected" style="margin-right:20%">Ajout</a>
    <a href="suppression.php" class="bouton_menu">Modification/Suppression</a>
  </div>

  <form method="post" style="margin-top:20px;" enctype="multipart/form-data">

  	<div class="form-group">
  	<label>Type</label>
  	<select name="type" class="form-control">
  		<option value="vente" selected="selected">vente</option>
  		<option value="location">location</option>
  	</select>
  	</div>


  	<div class="form-group">
  	<label>Description</label>
  	<input class="form-control" name="question" type="text">
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


<?php
}
}
?>
