<meta charset="utf-8">
<?php
	extract($_POST);
	$errors = [];

	if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {
		# code...
		$errors['nom'] = "Vous n'avez pas renseigné votre nom";
	}

	if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		# code...
		$errors['email'] = "Vous n'avez pas renseigné une adresse mail valide";
	}

	if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
		# code...
		$errors['message'] = "Vous n'avez pas saisi de message";
	}

	session_start();

	if (!empty($errors)) {
		# code...
		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: contact-form.php#contact');
	}
	else{
		$_SESSION['success'] = 1;
		$to = 'audrey@gmail.com';
		$subject = 'Contact du site';
		$msg =
			"Salut, Audrey! Un visiteur du nom de $nom, dont l'adresse mail est $email a pris contact de ton site et son message est le suivant: \n
			$message";
		mail($to, $subject, $msg);
		header('Location: contact-form.php#contact');
	}

?>
