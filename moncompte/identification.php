<?php
  ob_start();
  include_once "../needed.php";
  $errorMessage = '';

  if(!empty($_POST))
  {
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
      $query = $bdd -> prepare('SELECT * FROM utilisateur WHERE identifiant = ?');
      $query -> execute(array($_POST['login']));
      if($Data = $query -> fetch()){
        if(crypt(strtolower($_POST['password']),"immobilier") == $Data['password']){
          session_start();
          $_SESSION['login'] = true;
          $_SESSION['id'] = $Data['id'];
          $_SESSION['nom'] = $Data['nom'];
          $_SESSION['prenom'] = $Data['prenom'];
          $_SESSION['admin'] = $Data['admin'];

          ob_end_clean();

          if(isset($_GET['redirection'])){
            header('Location: '.$url."/".$_GET['redirection']);
          }else{
            header('Location: '.$url."");
          }
          exit();
        }else{
          $errorMessage = 'Mauvais password';
                  }
      }else{
        $errorMessage = 'Mauvais login';
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants';
    }
  }


  if(isset($_GET['redirection'])){
    $direction="/moncompte/identification.php?redirection=".$_GET['redirection'];
  }else{
    $direction="/moncompte/identification.php";
  }
?>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Style/style1.css">
	<title>Untitled</title>
</head>

<div class="header" style="background: url(../images/cover4.jpg) no-repeat center center; background-size: cover;width:100%; height: 600px">
  <nav class="nav" id="nav">
    <div class="element">
      <a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
      <a href="annonce\index.php" class="selt" onclick="myFunction()">Annonces</a>
      <a href="../contact-form.php" class="selt" onclick="myFunction()">Contact</a>
      <?php if(!empty($_SESSION['login'])){ echo "<a href='/moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>"; }
    else{ echo "<a href='/moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>" ; } ?>
    </div>
    <div class="logow">
      <a href="#index" class="logo" > Audrey Brezout </a>

    </div>
  </nav>
  <div style="margin-top: 10%; ">
    <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-4">
    <h3>Identifiez-vous</h3>

        <form action=<?php echo $direction?> method="post" style="padding-top:20px; width : 400px;" >
            <?php
              if(!empty($errorMessage))
              {
                echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
              }
            ?>
           <div clas="form-group">
              <label for="login">Login :</label>
              <input type="text" name="login" id="login" value="" class="form-control" />
            </div>
            <br>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" id="password" value="" class="form-control" />
            </div>
            <input type="submit" name="submit" value="Connexion" class="btn btn-default"/>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>

  </div>
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
