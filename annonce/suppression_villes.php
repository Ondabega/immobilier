<?php
include_once "../needed.php";

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
  echo "<h2>Villes</h2>";
   ?>
  <div class="boutons_nav" style="display: flex; justify-content: center;">
    <a href="ajout.php" class="bouton_menu" style="margin-right:20%">Ajout</a>
    <a href="suppression.php" class="bouton_menu bouton_nav_selected">Modification/Suppression</a>
  </div>
  <?php
  if(!(isset($_GET['id']))){?>
    <h2>Idées</h2>
    <h4>Erreur: Votre session est inconnu.</h4>
    <a href="/index.php"> Acceuil</a>
  <?php }else{
    $query = $bdd -> prepare('SELECT * FROM ville WHERE id = ?');
    $query -> execute(array($_GET['id']));
    $Data=$query -> fetch(); ?>

    <form action="suppression.php" method="post" style="margin-top:20px;" enctype="multipart/form-data">

    	<div class="form-group">
    		<label>Nouveau nom :     </label>
    		<input name="nom" class="form-control" type="text" value="<?php echo $Data['nom']; ?>">
    	</div>

      <input type="hidden" name="id" value="<?php echo $Data["id"] ?>" >
      <button type="submit" name="modifier" class="btn btn-default" onclick="return confirm('Modifier la question ?');">Modifier</button>
      <button type="submit" name="supprimer" class="btn btn-default" onclick="return confirm('Supprimer la question ?');">Supprimer</button>
      <a href="suppression.php" class="btn btn-default pull-right" >Retour</a>

    </form>




<?php
}

}
?>


<?php
