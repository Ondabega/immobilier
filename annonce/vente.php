<?php
include_once "../needed.php";

$recherche = -1;
$debut=0;

if (isset($_GET["recherche"])){
    $recherche = $_GET["recherche"];
}

if(isset($_GET['nb'])){
  $debut=$_GET['nb'];
}
?>

<!DOCTYPE html>
<html>
<!-- jerome -->
<head>
	<title>Achats</title>
    <link rel="stylesheet" type="text/css" href="../style1.css">
</head>
<body>

	<style type="text/css">

		* {
			padding: 0;
			margin: 0;
		}

        .tbanner {
            margin: 2%;
            display: flex;
            flex-direction: row;
            border: 1px solid black;
            border-radius: 2em;
        }

        .tcontain {
            display: block;
            margin: 1%;
            padding: 1%;
        }
    </style>

    <!-- navigation -->
      <nav class="nav" id="nav" style="height= 3em; background: RGBA(88,168,158,0.5); position: relative;">
        <div class="element">
        <a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
          <a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
            <?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
          else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
          <?php if(!empty($_SESSION['admin'])){ echo "<a href='ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
        </div>
        <div class="logow">
          <a href="../index.php" class="logo" > Audrey Brezout </a>
        </div>
      </nav>


        <form class="form-inline">
        <div class="form-group">
          <label>Recherche</label>
          <select class="form-control" name="recherche" >
            <option value="">Selectionnez une ville </option>

            <?php
            $profil = $bdd -> query('SELECT * FROM ville');
            while($personne = $profil -> fetch()){ ?>
              <option value="<?php echo $personne['id']; ?>" ><?php echo $personne['nom']; ?></option>
          <?php  } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-default">Rechercher</button>

      </form>





      <div class="conteneur_alerte">
      <?php

      if($recherche>0){
      $Query = $bdd->prepare('SELECT * FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.ville= :i LIMIT 7  OFFSET :nb') ;

      $Query->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
      $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
      $Query->execute();}


      else{$Query = $bdd->prepare('SELECT * FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id LIMIT 7 OFFSET :nb ') ;
        $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
        $Query->execute();
      }


      while ($Data = $Query->fetch()) {
       ?>

          <a href="details.php?vente= <?php echo $Data['id'] ; ?>" >
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
            </div>
      </a>

      <?php  }


      ?>
      </div>

      <?php
      if($debut > 6){
        ?>
        <a href="vente.php?recherche=<?php echo $recherche;?>&amp;nb=<?php echo $debut-7;?>" class="btn btn-default">Elements précédents</a>
      <?php
      }

      if($recherche>0){$test = $bdd->prepare('SELECT * FROM vente
          WHERE vente.ville= :i LIMIT 7 OFFSET :nb');
      $test->bindValue(':i',$recherche, PDO::PARAM_INT);
      $test->bindValue(':nb',((int) $debut)+7,PDO::PARAM_INT);
      $test->execute();
    }else{$test = $bdd->prepare('SELECT * FROM vente LIMIT 7 OFFSET :nb');
        $test->bindValue(':nb',((int) $debut)+7,PDO::PARAM_INT);
        $test->execute();
       }

      if($test -> fetch()){ ?>
        <a href="vente.php?recherche=<?php echo $recherche;?>&amp;nb=<?php echo $debut+7;?>" class="btn btn-default">Elements suivants</a>
      <?php
      }


       ?>
