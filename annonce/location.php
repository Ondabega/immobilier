<?php
include_once "../needed.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>template 1</title>
    <link rel="stylesheet" type="text/css" href="../Style/style1.css">
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

    <div class="tbanner">
        <div class="tcontain" style="background-color: black; height: 15em; width: 40%;">
            <img src="">
        </div>
        <div class="tcontain" style="width: 60%;">
            <h3>Product Title</h3>

            <p class="type">type</p>
            <br>
            <p class="ville">City</p>
            <br>
            <p>Product description... Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <br>
            <p class="prix">$21.000</p>
        </div>
    </div>

</body>
</html>
