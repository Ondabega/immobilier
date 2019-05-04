<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8', 'root', '');
$url ="http://boutikimo.fr/" ;
?>

<!doctype html>


  <html lang="fr">
  <head>

      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=0.635, user-scalable=yes"/>
      <meta name="apple-mobile-web-app-capable" content="yes"/>
      <meta name="robots" content="noindex, nofollow, noarchive"/>
      <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
      <link rel="stylesheet" href="/css/styledem.css">

      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css"/>
      <script src="/js/jquery.min.js"></script>
      <script src="/bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">





      <link rel="stylesheet" href="/css/base.css"/>
      <link rel="stylesheet" href="/css/dropdown.css"/>



  </head>

<?php
  function upload($bdd,$index,$dossier,$maxsize=FALSE,$extensions=FALSE)
  {
      global $url;
       if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return -1;
       if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return -2;
       $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
       if ($extensions !== FALSE AND !in_array($ext,$extensions)) return -3;
       $nom = md5(uniqid(rand(), true));
       $chemin= "$dossier"."/".$nom.".".$ext;
       if(!move_uploaded_file($_FILES[$index]['tmp_name'],$chemin))return -1;
       $query= $bdd -> prepare('INSERT INTO files(chemin) VALUES (:chemin)');
       $query -> execute(array(
         'chemin' => $chemin,
       ));
       return $bdd ->lastInsertId();
  }


  function remove_file($bdd,$id){
  $query = $bdd -> prepare('SELECT * FROM files WHERE id= ?');
  $query -> execute(array($id));
  $Data = $query -> fetch();
  unlink($Data['chemin']);
  $query = $bdd -> prepare('DELETE FROM files WHERE id=?');
  $query -> execute(array($id));
}

  function warning($titre,$texte){ ?>
  <div class="alert alert-danger">
      <strong><?php echo $titre;?></strong>  -  <?php echo $texte; ?>
  </div> <?php
}
function success($titre,$texte){ ?>
  <div class="alert alert-success">
      <strong><?php echo $titre;?></strong>  -  <?php echo $texte; ?>
  </div> <?php
}

  ?>
