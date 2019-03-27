<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/x-svg" href="icons/logo-bleu.svg">
	<meta name="author" content="Domi and Thomas">
	<meta name="description" content="Entreprise, Agence immobilière">
	<meta name="keywords" content="istres, immobilier, martigues, Audrey Brezout, Entreprise, immo, BoutikImo,">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>index</title>
</head>
<body>

<style>
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
	background-color: #3C7AB3;
	opacity: .8;
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
	<div class="header" style="background: url(images/img1.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit; margin-top: .80em;"><a class="slist" href="annonce/vente.php" style="color:white;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/location.php" style="color:white;">Locations</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/locationp.php" style="color:white;">Loca</a></il>
					</ul>
				</il>
				<a href="contact-form.php" class="selt" onclick="myFunction()">Contact</a>
				<?php if(!empty($_SESSION['admin'])){ echo "
					<il class='selt' id='smenul'onclick='myFunction()'>Espace Admin
					<ul class='smenu'>
						<il style='display: inherit; margin-top: .80em;'><a class='slist' href='annonce/ajout.php' style='color:white;'>Biens</a></il>
						<il style='display: inherit;'><a class='slist' href='annonce/ajout_villes.php' style='color:white;'>Villes</a></il>

					</ul>
				</il> " ;} ?>
				<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
			else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
			</div>
		</nav>
		<div>
			<div class="accueil">

				<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="280" width="400" viewBox="-70 -50 400 100.3">
	    <defs>
	        <clipPath id="clip-path" transform="translate(-760.2 -436.9)">
	            <path id="outik" d="M941.9,465.9l3.4-6.2c1.5-2.7,2.6-4.7,3.4-6s.9-1.5,1.1-2a13,13,0,0,1-2.8.4,11.6,11.6,0,0,1-2.7-.4l-16.1,29.5-2.4,4.5c0,.1-.1.1-.1.2q-9.9,15.3-13.8,15.3c-1.4,0-2.1-.7-2.1-2.2s.7-3.4,2.2-6l10-17.9-3.4.3-2.1-.3-5.7,10.5-.3.3q-9.4,15.3-13.5,15.3c-1.4,0-2-.7-2-2.2s.6-3,1.8-5.3l9.8-18.3h5.7l.4-.7h-5.8l5.1-9.3a8.2,8.2,0,0,1-2.6.4,7.7,7.7,0,0,1-2.5-.4l-5.1,9.3h-4.4l-.5.7h4.5l-5.9,10.9-.5.7-1.4,2.1c-5.3,8-9.1,12.1-11.4,12.1s-1.8-.7-1.8-2.1,1.6-5.5,5-11.5l7-12.5-3.1.3-2.3-.3-4.3,8c-6.5,12.1-11.3,18.1-14.3,18.1-1.1,0-1.6-.7-1.6-2.2a10.9,10.9,0,0,1,1.6-5.1l10.4-18.8-3,.3-2.3-.3-5.7,10.6-.5.5A15.2,15.2,0,0,1,863,491a7.8,7.8,0,0,1-4.6,2,3.4,3.4,0,0,1-2-.6c3.5-5.1,5.3-9.6,5.3-13.3s-1.2-4.4-3.8-4.4-6.1,1.6-10.3,4.9c-5.9,4.6-8.8,9.3-8.8,14.2a9.2,9.2,0,0,0,1.8,5.7,5.7,5.7,0,0,0,4.5,2.4c3.4,0,7.1-3,11-9a4.8,4.8,0,0,0,2.4.6c2.1,0,4.5-1.4,7.1-4.2l.4-.5-.5,1a13.8,13.8,0,0,0-2,6.4,7.1,7.1,0,0,0,1.3,4.1,4.1,4.1,0,0,0,3.3,1.6c1.2,0,2.5-.7,3.9-2.2a64.9,64.9,0,0,0,5.9-7.5l.9-1.3a12.8,12.8,0,0,0-1.7,5.2,6.9,6.9,0,0,0,1.3,4.1,4.2,4.2,0,0,0,3.3,1.7c2.1,0,4.9-2.3,8.4-6.8l2.7-3.6a13.7,13.7,0,0,0-1.1,4.7,6.4,6.4,0,0,0,1.4,4.1,4.3,4.3,0,0,0,3.4,1.6c2.7,0,6.6-3.8,11.8-11.5a16.4,16.4,0,0,0-1.7,5.9,6,6,0,0,0,1.3,4,4.4,4.4,0,0,0,3.5,1.6c2.8,0,6.7-3.8,11.9-11.4l-3.7,6.9-2.2,4.3,2.8-.3a9.9,9.9,0,0,1,2.4.3l.5-1c1.2-2.2,2.8-5.3,4.8-9.4s3.9-7.6,6.4-12.1ZM856,484.5a9.1,9.1,0,0,0-1.7,4.9,5,5,0,0,0,1.3,3.1c-3.7,5.7-7.2,8.6-10.4,8.6s-2.9-1.1-2.9-3.3c0-3.8,1.9-8.5,5.8-14.1s7.1-8.4,9.7-8.4,3.3,1.3,3.3,3.9a11.2,11.2,0,0,1-.7,3.8c-.2-.7-.5-1-1-1S857.2,482.9,856,484.5Z" fill="none"/>
	        </clipPath>
	        <clipPath id="clip-path-2" transform="translate(-760.2 -436.9)">
	            <path id="k" d="M953.3,486.5c0-.1-.1-.2-.3-.2a.7.7,0,0,0-.6.4Q943.1,502,938.9,502c-.9,0-1.4-.4-1.4-1.3a9.1,9.1,0,0,1,.9-2.8c1.4-3.2,2.2-5.3,2.2-6.5s-1.6-3.8-4.6-5.3c1.5-.7,3.5-2.6,5.9-5.6s3.5-3.7,4.8-3.7,1.3.4,1.3,1.2a2.7,2.7,0,0,1-1.2,2.3c-1.9,1.3-2.8,2.5-2.8,3.7s.6,1.8,1.9,1.8,2.2-.7,3.3-2.2a7.5,7.5,0,0,0,1.7-4.6c0-2.3-1.1-3.5-3.3-3.5s-3.6,1.1-5.3,3.3c-3.3,4-5.6,6.4-7.1,7.1a7.1,7.1,0,0,0-2.6-.5c-.9,0-1.4.3-1.4.9s.5.9,1.5.9a5.7,5.7,0,0,0,2.8-.8c1,.7,1.4,1.3,1.4,2a6.4,6.4,0,0,1-.8,2.7v.2c-1.7,3.5-2.5,5.8-2.5,6.8a4.2,4.2,0,0,0,1.5,3.2,4.5,4.5,0,0,0,3.3,1.4c2.8,0,7-4.2,12.5-12.6l1.9-2.8A2.8,2.8,0,0,0,953.3,486.5Z" fill="none"/>
	        </clipPath>
	        <clipPath id="clip-path-3" transform="translate(-760.2 -436.9)">
	            <path d="M921.3,471.3a3.6,3.6,0,0,0,2.8-1.5,4.3,4.3,0,0,0,1.3-3.1c0-1.4-.6-2.1-1.9-2.1a3.8,3.8,0,0,0-2.8,1.5,4.6,4.6,0,0,0-1.4,3C919.3,470.6,920,471.3,921.3,471.3Z" fill="none"/>
	        </clipPath>
	        <clipPath id="clip-path-4" transform="translate(-760.2 -436.9)">
	            <path id="mo" d="M1085.5,486.3l-.7.7a15.2,15.2,0,0,1-4.3,4.8,8.2,8.2,0,0,1-4.6,2,3.6,3.6,0,0,1-2-.6c3.6-5.1,5.3-9.6,5.3-13.3s-1.2-4.4-3.7-4.4-6.2,1.6-10.3,4.9a30.6,30.6,0,0,0-6,5.9c-.1,0-.2.2-.3.4l-.8,1.1-1.4,2.1c-5.2,8-9,12.1-11.3,12.1s-1.8-.7-1.8-2,.7-3,2.1-5.3l3.8-6.1a16,16,0,0,0,2.2-7,7.5,7.5,0,0,0-1.3-4.3,4,4,0,0,0-3.2-1.8c-2.8,0-7,4.2-12.6,12.7,1.6-2.8,2.4-5.1,2.4-7a6.3,6.3,0,0,0-1.2-4,3.6,3.6,0,0,0-3-1.7c-2.6,0-6.6,4.2-11.8,12.7,1.7-3.3,2.6-5.9,2.6-7.7a6.5,6.5,0,0,0-1-3.5,3,3,0,0,0-2.5-1.5c-1.4,0-3.4,1.8-6.1,5.4s-4,5.7-4,6,0,.3.1.3.4-.2.7-.7c4.6-6.8,7.5-10.3,9-10.3s1,.5,1,1.5-2.2,6.3-6.5,13.8l-6.3,10.8a13.7,13.7,0,0,1,3-.2,10.2,10.2,0,0,1,2.6.2,127.5,127.5,0,0,1,10.9-18.5c3.7-5,6.3-7.6,7.9-7.6s1.6.8,1.6,2.2-2,6-6.1,13.1l-6.2,10.8a14.2,14.2,0,0,1,3.1-.2,8.2,8.2,0,0,1,2.4.2c9.4-17.4,16-26.1,19.9-26.1,1.2,0,1.8.7,1.8,2s-1.2,3.7-3.7,7.5l-3.2,5.2a12.7,12.7,0,0,0-1.7,5.8,7.1,7.1,0,0,0,1.3,4.3,4.4,4.4,0,0,0,3.4,1.7c2.6,0,6.6-4,11.9-12.1a14.4,14.4,0,0,0-.6,4,8.7,8.7,0,0,0,1.9,5.7,5.4,5.4,0,0,0,4.5,2.4c3.4,0,7-3,10.9-9a4.8,4.8,0,0,0,2.4.6c2.2,0,4.5-1.4,7.1-4.2s2.6-3.1,2.6-3.6S1085.7,486.3,1085.5,486.3Zm-11.9-1a8.5,8.5,0,0,0-1.8,4.9,5,5,0,0,0,1.3,3.1c-3.7,5.7-7.2,8.6-10.4,8.6s-2.9-1.1-2.9-3.3c0-3.8,2-8.5,5.8-14.1s7.1-8.4,9.8-8.4,3.2,1.3,3.2,3.9a11.2,11.2,0,0,1-.7,3.8c-.2-.7-.5-1-1-1S1074.7,483.7,1073.6,485.3Z" fill="none"/>
	        </clipPath>
	    </defs>
	    <path id="B" d="M831.5,443.8c5.1-3.5,10.1-5.3,14.9-5.3a11.3,11.3,0,0,1,8.7,3.7,14.1,14.1,0,0,1,3.3,9.7,24.8,24.8,0,0,1-1.1,7.3.8.8,0,0,0-.1.4c0,.3.1.5.4.5s.8-1,1.2-3a28,28,0,0,0,.6-5.5,14.4,14.4,0,0,0-3.6-10.1,12.5,12.5,0,0,0-9.5-3.8c-5,0-10.2,1.8-15.5,5.4-6-4.1-13.2-6.2-21.8-6.2a48.3,48.3,0,0,0-31,11.2c-9.4,7.4-14.1,15.7-14.1,24.8a15.4,15.4,0,0,0,3.7,10.7c2.4,2.7,5.7,4,9.8,4,6.2,0,12.6-3.1,19-9.5s9.6-12.6,9.6-18.8-2.5-7.7-7.6-7.7S788,454,783,458.7s-7.5,9.6-7.5,14.5a9.4,9.4,0,0,0,1.4,5.2,4.5,4.5,0,0,0,3.6,2c.6,0,.8-.1.8-.4s-.2-.3-.7-.4a3.3,3.3,0,0,1-2.5-1.2,4.5,4.5,0,0,1-1-3c0-4.7,2.5-9.6,7.5-14.9s9.7-8,14-8,6.6,2.3,6.6,7-3.2,11.8-9.5,18-12.3,9.3-18.2,9.3A11,11,0,0,1,765.7,475c0-7,3.8-14.6,11.3-22.6,9.1-9.7,19.9-14.6,32.3-14.6,8.8,0,15.5,2.1,20.1,6.4q-4.2,3-10.2,10.5a125,125,0,0,0-10.5,14.5c-6,10-9.8,16.2-11.5,18.7a47.6,47.6,0,0,1-5.9,7q-7.8,7.8-17.4,7.8a15.3,15.3,0,0,1-9.1-2.6,8.1,8.1,0,0,1-3.6-6.7c0-1.7.3-2.5.8-2.5s.2.3.1,1,.7,2.6,2.2,2.6a2.5,2.5,0,0,0,2.2-1.1,4.5,4.5,0,0,0,.9-2.8c0-2.2-.8-3.3-2.6-3.3a3.8,3.8,0,0,0-3.2,1.8,6.8,6.8,0,0,0-1.4,4.2,8.9,8.9,0,0,0,3.9,7.4,16,16,0,0,0,9.9,3c4.8,0,10.2-1.7,16.4-4.9a44.4,44.4,0,0,0,12-9.4c2.9-3.6,6.1-9.3,9.5-17.2,5.7-12.9,11.7-22,18.2-27.4a13.1,13.1,0,0,1,3.3,8.7,15,15,0,0,1-2.6,8.9,14.2,14.2,0,0,1-7.2,5.3,26.2,26.2,0,0,0-5.3-.8c-1.8,0-2.8.3-2.8.8s1.2,1.2,3.4,1.2H821l2.6-.3a12.5,12.5,0,0,1,7,11.7,25.2,25.2,0,0,1-5.6,15.7c-3.7,4.7-7.8,7.1-12.3,7.1a6.4,6.4,0,0,1-4.9-2.1,7.2,7.2,0,0,1-2-5.3c0-4,1.6-7.9,4.7-11.7s6.4-5.7,9.7-5.7a5.8,5.8,0,0,1,4.3,1.7,6,6,0,0,1,1.6,4.4,12.8,12.8,0,0,1-2.3,6.6,1.4,1.4,0,0,0-.2.6c0,.2.2.3.5.3s1-.9,1.7-2.7a14.2,14.2,0,0,0,1.1-4.7,6.9,6.9,0,0,0-1.9-5.1,6.2,6.2,0,0,0-4.7-2c-3.5,0-7,2-10.4,6s-5.2,8.1-5.2,12.2a7.9,7.9,0,0,0,2.5,6.3,8.8,8.8,0,0,0,6.5,2.3,20.8,20.8,0,0,0,15.1-6.2,19.2,19.2,0,0,0,6.4-14.4c0-7.4-3.6-12.5-10.9-15.3,8.9-1.4,13.3-5.6,13.3-12.8C837.6,451,835.6,447.1,831.5,443.8Z" transform="translate(-760.2 -436.9)" fill="#fff"/>
	    <g id="outik_mask">
	        <g clip-path="url(#clip-path)">
	            <path id="outik4" d="M893.7,498.6l2.7,3.2,4.2-2.6,3.1-3.4,2.1-2.7a29.1,29.1,0,0,1,4.1-4.9c1.8-1.6,3-1.2,3-1.2s3.7-11.5,5.5-10.3-8.2,14.7-9.5,17.5-1.2,4.4-.3,5.6a3.4,3.4,0,0,0,2.1,1.3,2,2,0,0,0,2.3.4c1.4-.5,2.9-2.7,2.9-2.7l2.9-3.1,2.6-3.5a16.5,16.5,0,0,1,2.8-3.2c1.9-1.6,1.6.4,3.1-.8s4.9-9.1,4.9-9.1l3.9-7.6,4.6-10s6.4-15.1,4-6.3-23.8,47.4-23.8,47.4" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	            <polyline id="outik3" points="137.9 37.9 145.7 37.8 151.5 37.9" fill="none" stroke="#fff" stroke-miterlimit="10"/>
	            <path id="outik2" d="M858.8,483.1a20.5,20.5,0,0,0-3,4.3c-.6,1.6-1.3,2-.3,3.6s1.3,1.7,1.3,1.7,3.1.8,3.8.4l5.6-4.5,3.9-2.4,5.8-9.5s-9.4,13.5-10.1,16.3a10.2,10.2,0,0,0,0,6c.7,2.4.2,1.9,1.5,2.7s3.4-1.4,3.4-1.4l5.2-6a67.3,67.3,0,0,1,4.3-5.7c1.8-2,1.8,0,4-2.4s5.2-9.5,5.2-9.5S879.6,492.2,879,495s-.6,2.8.6,4.8,2.1,2,2.1,2,3.3-.8,4.6-2.4l3.6-5A42,42,0,0,1,893,490c.7-.6,1,1,4.3-1.8s6.1-12.7,6.1-12.7,3.7-13.2,4.9-12-14.6,28.7-14.6,31.9-1,.8.3,3.2" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10"/>
	            <path id="outik1" d="M857.9,474.7s-3.1,1.2-4.6,2a14.7,14.7,0,0,0-6.1,5.2c-2.1,3.1-5.2,5.9-6.4,9.5s-.9,4,.3,7.2,2.4,2.4,2.4,2.4l3,.7,4.4-3.3s4-3.5,4.7-4.8,5.4-10.9,5.4-10.9,1.1-3.8.5-5.3-3.6-2.4-3.6-2.4" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	        </g>
	    </g>
	    <g id="k_mask">
	        <g clip-path="url(#clip-path-2)">
	            <path id="k2" d="M936.1,486.2a3.8,3.8,0,0,1,1.9,2.4,15.7,15.7,0,0,1-.3,5.2c-.3,2-1.9,3.2-1.9,6s.3,1.6,1.3,2l1.2.4h1.5a16,16,0,0,0,2.8-1.6,8.6,8.6,0,0,0,2.1-2.8,20.9,20.9,0,0,1,2.4-3.2l1.9-2.8,2.4-2.8,1.2-2.4" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	            <path id="k1" d="M944.4,484.6s1.2.4,3.1-1.1,2.1-2.4,2.1-4.4.3-1.2-.9-2.4-1.6-.8-2.2-.8-2.4,1.6-2.4,1.6l-1.8,2-2.5,2.8-2.4,2.3s-1.3,1.6-1.6,1.6h-3.9" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	        </g>
	    </g>
	    <path id="I" d="M1019.7,463.1c0-.2-.1-.4-.3-.4s-.3.3-.4.8a14.7,14.7,0,0,1-5.5,8.7,15.9,15.9,0,0,1-9.9,3.6h-1.3l.7-1.4c7.2-14.7,14.4-24.8,21.7-30.5a49.6,49.6,0,0,0,8.3-3.2c2.4-1.1,3.6-2,3.6-2.5s-.2-.5-.7-.5-2.7.6-5.3,1.9a31.7,31.7,0,0,0-6.2,3.8l-4.1,1-4.8.8c-7.2,1.3-12.5,2.8-15.8,4.4-6.6,3.1-9.9,7.8-9.9,14.3s2.5,9.1,7.5,11.4a147.9,147.9,0,0,1-8.4,13.2c-7.1,9.7-15,14.5-23.9,14.5a14.3,14.3,0,0,1-9.1-2.8,8.4,8.4,0,0,1-3.7-7c0-1.6.2-2.4.8-2.4s.2.2.2.5v.9c0,1.5.7,2.2,2.1,2.2a3,3,0,0,0,2.3-1.1,4,4,0,0,0,.9-2.7c0-2.2-.9-3.3-2.8-3.3a3.8,3.8,0,0,0-3.2,1.8,7.5,7.5,0,0,0-1.3,4.2,9.1,9.1,0,0,0,4.2,7.7,18,18,0,0,0,10.7,3c7.7,0,15.2-2.9,22.6-8.6a32.7,32.7,0,0,0,6.2-6.1,54.8,54.8,0,0,0,5.7-10l1.2-2.7h1.6a16,16,0,0,0,13.4-6.8C1018.7,467.3,1019.7,465.1,1019.7,463.1Zm-22.1,11.6a8.8,8.8,0,0,1-5.4-8.6c0-4.2,2.1-8.1,6.4-11.7s9.9-6.3,17.1-8.2l4.7-1.3,3-.7C1014,451,1005.4,461.1,997.6,474.7Z" transform="translate(-760.2 -436.9)" fill="#fff"/>
	    <g clip-path="url(#clip-path-3)">
	        <path id="point1" d="M920.3,468.3c-.7-2,2.2-3.3,3.3-2.8s.6,2.8.6,2.8-1.2,2.8-3,1.6C921.2,469.9,920.9,470.3,920.3,468.3Z" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	    </g>
	    <g id="m_mask">
	        <g clip-path="url(#clip-path-4)">
	            <path id="mo3" d="M1076.3,484.1s-4,4.3-4,6.3,2,3.6,2,3.6l4.3-.3,4-3,3.2-4.3" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10" />
	            <path id="mo2" d="M1060.4,489.2s-1.8,5.2-1.8,8,.3,2,1.2,3.6a4.5,4.5,0,0,0,2.7,2s4.6-1.3,5.1-2,4.2-5.6,4.2-5.6,6.6-10,6.9-11.9,1.2-2.3.5-4.4a13.5,13.5,0,0,0-1.4-2.8l-2.4-.4-4.9,1.2" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10"/>
	            <path id="mo1" d="M1010.3,486.3l4.5-5.4,3.1-4.4,2.1-.8s2.6.9,3,2-3.6,7.5-3.6,7.5a50.4,50.4,0,0,1-3.6,7.6c-1.9,2.8-6.8,10.4-3.7,7.6S1021,488,1021,488l2.4-2.6,2.1-4.1,3.4-2.8,1.9-2.4s2.2-.8,3.1-.4,2.6,3.6,2,5.6-2.1,2.8-3.3,5.1-11.6,17.2-7.4,14,9.8-12.8,9.8-12.8l3.4-3.7,3.5-5.1,4.3-3.1s1.9-.7,3,.4,2.6,6.4,1.1,8.7-3.1,2-4.3,4.4-3.6,5.6-4,7.6,0,4.2,1,5.1,2.4.1,2.4.1l4.1-1.9,2.5-3.6,5.9-7.3s9.5-7.9,10.7-9.9a5.4,5.4,0,0,1,3.8-2.2" transform="translate(-760.2 -436.9)" fill="none" stroke="#fff" stroke-miterlimit="10"/>
	        </g>
	    </g>
	      </svg>
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
	<article style="margin: 0;">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Salutations! </h3>
		  <p class="phrase">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<hr class="separator" style="margin-left: 47%;">
	</acticle>
	<article style="">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Présentement! </h3>
		  <p class="phrase">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<hr class="separator" style="margin-left: 47%;">
		<h3 style="text-align:center; border:0; margin-bottom:0; margin-top: 5%;"> Au revoir, merci! </h3>
			<p class="phrase">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	</article>

	<!-- pied de page -->
<footer class="footer" style="margin-bottom: 0px;">
			<div class="row">
            			<a class="case" rel="follow" href="https://twitter.com/">
              			<img class="icon" alt="Twitter" title="Twitter" src="twitter-icon.svg"></a></td>

            			<a class="case" rel="follow" href="https://www.linkedin.com/">
              			<img class="icon" alt="LinkedIn" title="LinkedIn" src="linkedin-icon.svg"></a>

            			<a class="case" rel="follow" href="https://www.instagram.com/">
          				<img class="icon" alt="Instagram" title="Instagram" src="instagram-icon.svg"></a>

          				<a class="case" rel="follow" href="https://www.facebook.com/">
          				<img class="icon" alt="Facebook" title="Facebook" src="facebook-icon.svg"></a>
          	</div>

				<hr class="separator" style="margin-left: 47%;">

				<div class="footer-bottom">
					<div class="copyright-text">
						<p>CopyRight © 2019 Name</p>
					</div> <!-- End Col -->
				</div>
</footer>

</body>
</html>
