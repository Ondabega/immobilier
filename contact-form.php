<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>footer</title>
</head>
<body>
  <!-- debut de la zone contact********************* -->
  	<section class="contact" id="contact">
  		<div class="container">
  			<h2 id="contact-me">Contactez moi</h2>
  			<hr class="separator">
  				<div class="row">
  		        	<div class="margfoot">
  		        		<fieldset>
  		            		<legend>Envoyez moi un message</legend>

  		        			<form class="form-horizontal" action="contact.php" method="post">

  		        				<!-- deco de message d'alerte -->
  		        				<style type="text/css">
  		        					.contact .alert {
  									    padding: .75rem 1.25rem;
  									    margin-bottom: 1rem;
  									    border: 1px solid transparent;
  									    border-radius: .25rem;
  									    box-sizing: border-box;
  									}
  									.contact .alert-danger {
  										color: #721c24;
  									    background-color: #f8d7da;
  									    border-color: #f5c6cb;
  									}
  									.contact .alert-success {
  										color: #155724;
  									    background-color: #d4edda;
  									    border-color: #c3e6cb;
  									}
  		        				</style>

  		        				<!-- message d'echec -->
  		        				<div class="starter-template errors">
  		        					<?php if (array_key_exists('errors', $_SESSION)): ?>
  		        						<div class="alert alert-danger">
  		        						<?= implode('<br>', $_SESSION['errors']); ?>
  		        						</div>
  		        					<?php  endif; ?>
  		        				</div>

  		        				<!-- message de succes -->
  		        				<div class="starter-template success">
  		        					<?php if (array_key_exists('success', $_SESSION)): ?>
  		        						<div class="alert alert-success">
  		        						Votre message a bien été envoyé !
  		        						</div>
  		        					<?php endif; ?>
  		        				</div>

  					            <!-- Saisie du nom-->
  					            <div class="form-group">
  					              <div class="col">
  					                <input required id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''; ?>">
  					              </div> <br>
  					            </div>

  					            <!-- Email -->
  					            <div class="form-group">
  					              <div class="col">
  					                <input required id="email" name="email" type="email" placeholder="Votre email" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
  					              </div><br>
  					            </div>

  					            <!-- Message -->
  					            <div class="form-group">
  					              <div class="col">
  					                <textarea required class="form-control" id="message" name="message" placeholder="Saisissez votre message ici..." rows="5"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
  					              </div><br>
  					            </div>

  					            <!-- Form actions -->
  					            <div class="form-group">
  					              <div class="col">
  					              	<button class="btn-custom" id="envoyer"> Soumettre </button>
  					              </div><br>
  					            </div>
  		         			</form>
  		         		</fieldset>
  		      		</div>

  		      		<!-- tout effacer après actualisation********** -->
  		      		<?php
  		      		unset($_SESSION['errors']);
  		      		unset($_SESSION['inputs']);
  		      		unset($_SESSION['success']);
  		      		?>
  <!-- fin de fonction du formulaire******************** -->

<!-- STyle du pied de page -->
	<style type="text/css">

		* {
			margin: 0;
			padding: 0;
		}

		.footer {
			background-color: green;
			text-align: center;
			padding-left: 20%;
			padding-right: 20%;
			padding-bottom: 10px;
			padding-top: 10px;
		}

		.row {
			display: block;
		}

		.icon {
			display: inline-block;
			margin: 4%;
			height: 20px;
			width: 20px;
		}

		.copyright-text {
			margin: 10px;
		}

	</style>
	<!-- pied de page -->
	<footer class="footer">
				<div class="row">
					<h3> Réseaux sociaux </h3>
            			<a class="case" rel="follow" href="https://twitter.com/">
              			<img class="icon" alt="Twitter" title="Twitter" src="icons/twitter-icon.svg"></a></td>

            			<a class="case" rel="follow" href="https://www.linkedin.com/">
              			<img class="icon" alt="LinkedIn" title="LinkedIn" src="icons/linkedin-icon.svg"></a>

            			<a class="case" rel="follow" href="https://www.instagram.com/">
          				<img class="icon" alt="Instagram" title="Instagram" src="icons/instagram-icon.svg"></a>

          				<a class="case" rel="follow" href="https://www.facebook.com/">
          				<img class="icon" alt="Facebook" title="Facebook" src="icons/facebook-icon.svg"></a>

      			</div>

				<hr class="separator">

				<div class="footer-bottom">
					<div class="copyright-text">
						<p>CopyRight © 2018 Name</p>
					</div> <!-- End Col -->
				</div>

		</footer>

</body>
</html>
