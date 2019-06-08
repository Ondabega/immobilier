<?php
include_once "../needed.php";

$recherche = -1;
$recherche2 = -1;
$recherche3 = -1;
$debut=0;

if (isset($_GET["recherche"])){
    $recherche = $_GET["recherche"];
}


if (isset($_GET["recherche2"])){
    $recherche2 = $_GET["recherche2"];
}

if (isset($_GET["recherche3"])){
    $recherche3 = $_GET["recherche3"];
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
            border: 1px solid grey;
            box-shadow: 10px 5px 5px grey;
        }

        .tcontain {
            display: block;
            margin: 1%;
            padding: 1%;
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
        	background-color: orange;
        	opacity: 0.8;
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
    </style>

    <!-- navigation -->
      <nav class="nav" style="height= 3em; background: black;">
        <div class="element">
        <a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
        <a href="location.php" class="selt" onclick="myFunction()">Locations</a>
          <a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
          <?php if(!empty($_SESSION['admin'])){ echo "
  					<il class='selt' id='smenul'onclick='myFunction()'>Espace Admin
  					<ul class='smenu'>
  						<il style='display: inherit; margin-top: .80em;'><a class='slist' href='ajout.php' style='color:white;'>Biens</a></il>
  						<il style='display: inherit;'><a class='slist' href='ajout_villes.php' style='color:white;'>Villes</a></il>

  					</ul>
  				</il> " ;} ?>
        </div>
      </nav>


        <form class="form-inline">


        <div class="form-group">
          <label>Recherche</label>

          <select class="form-control" name="recherche" >
            <option value=""><?php if($recherche>0){
            $Q = $bdd->prepare('SELECT * FROM ville WHERE id= :i ') ;

            $Q->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
            $Q->execute();
            $don= $Q->fetch();
            echo $don['nom'];}else{echo "Selectionnez une ville";} ?> </option>

            <?php
            $profil = $bdd -> query('SELECT * FROM ville');
            while($personne = $profil -> fetch()){ ?>
              <option value="<?php echo $personne['id']; ?>" ><?php echo $personne['nom']; ?></option>
          <?php  } ?>
          </select>

          <select class="form-control" name="recherche2" >

              <option value='0' >Maison</option>
              <option value='1' >Appartement</option>

          </select>

          <div class="form-group">
        	<label>Prix Max</label>
        	<input class="form-control" placeholder=<?php if($recherche3>0){echo $recherche3;}else{echo "prix";} ?> name="recherche3" type="int">
        	</div>

        </div>


        <button type="submit" class="btn btn-default">Rechercher</button>

      </form>


</br></br></br>


      <div class="conteneur_alerte">
      <?php

      if($recherche>0){
        if($recherche2>=0){
          if($recherche3>0){
            $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.ville= :i AND vente.type_bien= :v AND vente.prix<= :p AND type_vente=0 LIMIT 7  OFFSET :nb') ;

            $Query->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
            $Query->bindValue(':v',(int) $recherche2,PDO::PARAM_INT);
            $Query->bindValue(':p',(int) $recherche3,PDO::PARAM_INT);
            $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
            $Query->execute();
          }else{
            $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.ville= :i AND vente.type_bien= :v AND type_vente=0 LIMIT 7  OFFSET :nb') ;

            $Query->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
            $Query->bindValue(':v',(int) $recherche2,PDO::PARAM_INT);
            $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
            $Query->execute();

          }

        }else{
          if($recherche3>0){
          $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.ville= :i AND vente.prix= :p AND type_vente=0 LIMIT 7  OFFSET :nb') ;

          $Query->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
          $Query->bindValue(':p',(int) $recherche3,PDO::PARAM_INT);
          $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
          $Query->execute();
        }else{
          $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.ville= :i AND type_vente=0 LIMIT 7  OFFSET :nb') ;

          $Query->bindValue(':i',(int) $recherche,PDO::PARAM_INT);
          $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
          $Query->execute();
        }

        }
      }else{
        if($recherche2>=0){
          if($recherche3>0){
            $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.type_bien= :v AND vente.prix<= :p AND type_vente=0 LIMIT 7  OFFSET :nb') ;

            $Query->bindValue(':v',(int) $recherche2,PDO::PARAM_INT);
            $Query->bindValue(':p',(int) $recherche3,PDO::PARAM_INT);
            $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
            $Query->execute();
          }else{
            $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE vente.type_bien= :v AND type_vente=0 LIMIT 7  OFFSET :nb') ;

            $Query->bindValue(':v',(int) $recherche2,PDO::PARAM_INT);
            $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
            $Query->execute();

          }

        }else{
          $Query = $bdd->prepare('SELECT *,vente.id AS venteid FROM vente JOIN files ON vente.image=files.id JOIN ville ON vente.ville=ville.id  WHERE type_vente=0 LIMIT 7  OFFSET :nb') ;

          $Query->bindValue(':nb',(int) $debut,PDO::PARAM_INT);
          $Query->execute();

        }

      }


      while ($Data = $Query->fetch()) {
       ?>

          <a href="descriptif.php?vente= <?php echo $Data['venteid'] ; ?>" >
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
          WHERE vente.ville= :i AND type_vente=0 LIMIT 7 OFFSET :nb');
      $test->bindValue(':i',$recherche, PDO::PARAM_INT);
      $test->bindValue(':nb',((int) $debut)+7,PDO::PARAM_INT);
      $test->execute();
    }else{$test = $bdd->prepare('SELECT * FROM vente WHERE type_vente=0 LIMIT 7 OFFSET :nb');
        $test->bindValue(':nb',((int) $debut)+7,PDO::PARAM_INT);
        $test->execute();
       }

      if($test -> fetch()){ ?>
        <a href="vente.php?recherche=<?php echo $recherche;?>&amp;nb=<?php echo $debut+7;?>" class="btn btn-default">Elements suivants</a>
      <?php
      }

   ?>
   <?php include("../footer.php") ?>
