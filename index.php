<?php
include_once "needed.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
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
	background-color: orange;
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
	<div class="header" style="background: url(images/cover3.jpg) no-repeat center center; background-size: cover;">
		<nav class="nav" id="nav">
			<div class="element">
				<a href= <?php echo $url ?> class="selt" onclick="myFunction()">Accueil</a>
				<il class="selt" id="smenul">Annonces
					<ul class="smenu">
						<il style="display: inherit; margin-top: .80em;"><a class="slist" href="annonce/vente.php" style="color:black;">Ventes</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/location.php" style="color:black;">Locations</a></il>
						<il style="display: inherit;"><a class="slist" href="annonce/locationp.php" style="color:black;">Loca</a></il>
					</ul>
				</il>
				<a href="contact-form.php" class="selt" onclick="myFunction()">Contact</a>
				<?php if(!empty($_SESSION['login'])){ echo "<a href='../moncompte/deconnexion.php' class='selt' id='connect' onclick='myFunction()'>Deconnexion</a>" ;}
			else{ echo "<a href='../moncompte/identification.php' class='selt' id='connect' onclick='myFunction()'>Connexion</a>"; }?>
			<?php if(!empty($_SESSION['admin'])){ echo "<a href='annonce/ajout.php' class='selt' id='connect' onclick='myFunction()'>Espace admin</a>" ;} ?>
			</div>
			<div class="logow">
				<a href="#index" class="logo" > Audrey Brezout </a>

			</div>
		</nav>
		<div>
			<div>

		<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 737 241.2">
		    <defs>
		        <clipPath id="clip-path" transform="translate(-430.3 -285.8)">
		            <path id="point" d="M742.9,413.2c2.8,0,5.5-2.1,7.9-6.3s3.8-8.2,3.8-11.7a10.3,10.3,0,0,0-1.8-6.5,5.9,5.9,0,0,0-4.6-2.3q-4.1,0-7.8,6.6c-2.6,4.4-3.8,8.4-3.8,12a8.5,8.5,0,0,0,2,5.9A5.5,5.5,0,0,0,742.9,413.2Z" fill="none"/>
		        </clipPath>
		        <clipPath id="clip-path-2" transform="translate(-430.3 -285.8)">
		            <path id="mmo" d="M1145.4,472.9a19.9,19.9,0,0,1-2.7,2.2,5.3,5.3,0,0,1-3,1.1h-1.3l-1.7-2.2a92,92,0,0,0,5.6-16.8,73.1,73.1,0,0,0,2-14.8c0-4-.4-6.8-1.2-8.3a7.5,7.5,0,0,0-4.7-3.2,11.5,11.5,0,0,0,2-5.7,5.8,5.8,0,0,0-2.4-4.9,11.1,11.1,0,0,0-6.7-1.8q-6,0-12.9,5.1a59.2,59.2,0,0,0-13.1,13.3,82.1,82.1,0,0,0-10,17.8,51,51,0,0,0-3.7,14.4c-4.5,5.4-7.9,9.3-10.1,11.5s-4.6,3.7-6.3,3.7a4.9,4.9,0,0,1-3.9-2.1,8,8,0,0,1-1.6-5.3,22,22,0,0,1,2.8-10.8c1.9-3.4,4.8-8,8.6-13.7s5.8-9.5,5.8-11a35.7,35.7,0,0,0-1.9-9.5c-1.3-4-2.6-5.9-4-5.8s-2.4,1.5-5,4.4-5.6,6.5-9,10.8l-14.1,17.4c-5.9,7.4-13.1,16.1-21.4,26,5.5-9.8,9.9-18.1,13.4-25a188.6,188.6,0,0,0,7.9-17.4c1.8-4.7,2.7-7.9,2.7-9.7a12.1,12.1,0,0,0-1.7-6.8,5.2,5.2,0,0,0-4.5-2.8c-3,0-6.6,2.2-10.8,6.7a159.2,159.2,0,0,0-13.9,16.8l-13.7,18.6c-4.1,5.8-6.7,8.6-7.7,8.6s-1.9-1.1-1.9-3.3.8-4,2.4-7.5a42.6,42.6,0,0,1,5.2-8.8,90.4,90.4,0,0,0,8.3-12.1q3.3-5.8,3.3-8.4a4.6,4.6,0,0,0-1.8-3.9,7.2,7.2,0,0,0-4.4-1.4q-4.3,0-8.1,5.1c-2.6,3.4-5.9,9-9.9,16.9-2.6,5.5-4.5,10.1-5.8,13.7a39.6,39.6,0,0,0-1.2,5.2c-4.5,5.4-7.9,9.2-10.1,11.4s-4.5,3.7-6.3,3.7a4.9,4.9,0,0,1-3.9-2.1,8,8,0,0,1-1.6-5.3,22.1,22.1,0,0,1,2.9-10.8c1.9-3.4,4.7-8,8.6-13.7s5.7-9.5,5.7-11a32.1,32.1,0,0,0-1.9-9.5c-1.3-4-2.6-5.9-4-5.8s-2.4,1.5-5,4.4-5.6,6.5-9,10.8l-14,17.4c-6,7.4-13.2,16.1-21.5,26,5.5-9.8,10-18.1,13.5-25s6.1-12.7,7.9-17.4,2.7-7.9,2.7-9.7a12.1,12.1,0,0,0-1.8-6.8c-1.2-1.9-2.6-2.8-4.5-2.8s-6.5,2.2-10.8,6.7a173.1,173.1,0,0,0-13.8,16.8c-5,6.7-9.6,12.9-13.7,18.6s-6.8,8.6-7.8,8.6-1.9-1.1-1.9-3.3.8-4,2.4-7.5a53.8,53.8,0,0,1,5.2-8.8A83,83,0,0,0,915,442q3.3-5.8,3.3-8.4a4.6,4.6,0,0,0-1.8-3.9,7.5,7.5,0,0,0-4.5-1.4q-4.2,0-8.1,5.1a138.6,138.6,0,0,0-9.9,16.9,128.8,128.8,0,0,0-5.7,13.7,39.8,39.8,0,0,0-1.9,13.1,53.3,53.3,0,0,0,2.8,18.3c1.9,5.2,3.9,7.8,6.1,7.8s2.2-.8,3.2-2.4a107.5,107.5,0,0,0,5.4-9.8c2.5-4.8,4.8-8.7,6.8-11.8,7.1-10.7,12-17.8,14.5-21.2s4.4-5.1,5.7-5.1,1.8.8,1.8,2.5a6,6,0,0,1-.5,3c-4.3,9.8-7.7,17.9-10,24.2s-3.6,10.7-3.6,13.2c0,6,1.6,9,4.7,9s6.1-2.5,9.4-7.6l7.2-11.1c3-4.6,6.9-10.1,11.7-16.4s10.2-12.8,16.3-19.6l-6.7,15.1c-2.5,5.5-4.5,10.2-6,14.2s-2.6,7.3-3.4,10.1a35.8,35.8,0,0,0-1,8.5,12.3,12.3,0,0,0,1.9,7.1,5.5,5.5,0,0,0,4.7,2.9c2.1,0,4.7-1.2,7.9-3.6a84.1,84.1,0,0,0,11.2-10.9c3.7-4.2,7.8-9.1,12.2-14.7a52.4,52.4,0,0,0,2.8,16.6c1.8,5.2,3.9,7.8,6,7.8s2.2-.8,3.3-2.4a107.5,107.5,0,0,0,5.4-9.8c2.5-4.8,4.7-8.7,6.7-11.8,7.2-10.7,12-17.8,14.6-21.2s4.4-5.1,5.7-5.1,1.8.8,1.8,2.5a7.4,7.4,0,0,1-.5,3c-4.4,9.8-7.7,17.9-10.1,24.2s-3.5,10.7-3.5,13.2c0,6,1.6,9,4.7,9s6-2.5,9.4-7.6l7.2-11.1c3-4.6,6.9-10.1,11.6-16.4s10.3-12.8,16.4-19.6c-2,4.6-4.3,9.6-6.8,15.1s-4.4,10.2-6,14.2a89.2,89.2,0,0,0-3.3,10.1,36.1,36.1,0,0,0-1.1,8.5,12.3,12.3,0,0,0,1.9,7.1c1.3,1.9,2.9,2.9,4.7,2.9s4.8-1.2,7.9-3.6a78.5,78.5,0,0,0,11.2-10.9c3.9-4.5,8.3-9.7,13-15.7a52.5,52.5,0,0,0,2.3,11.8,31,31,0,0,0,6.6,12.4c2.8,3,5.9,4.5,9.2,4.5,6,0,12.9-6.2,20.8-18.8,4.5.3,8-.3,10.4-2s5.6-4.9,9.6-9.8v-8.2Zm-20.4-19a55.1,55.1,0,0,0-2.4,15.8,43.4,43.4,0,0,0,1.5,11c-6,6-10.4,9.1-13,9.1-5.5,0-8.3-2.7-8.3-8.1,0-.8.7-5.7,2.3-14.8a29.4,29.4,0,0,1,4.9-10.3,74.9,74.9,0,0,1,9.1-10c3.5-3.3,7.8-7,12.8-11.1A158.5,158.5,0,0,0,1125,453.9Z" fill="none"/>
		        </clipPath>
		        <clipPath id="clip-path-3" transform="translate(-430.3 -285.8)">
		            <path id="outik" d="M802.5,390.1c10.7-18.7,16-29.6,16-32.6s-1.4-5.3-4.3-5.3-5.3,1.9-8.8,5.5-7.7,9-12.5,16.2-10.4,16.3-17,27.6c-4.7,8.1-9,16-12.9,23.4s-6.9,14.5-9.4,20.9a122.3,122.3,0,0,0-5.6,19.9c-.3,1.4-.5,2.8-.7,4.2a114.2,114.2,0,0,1-11.5,11.6c-3.4,2.8-6.5,4.2-9.4,4.2a7.9,7.9,0,0,1-6.3-2.9,11.4,11.4,0,0,1-2.5-7.4,17.2,17.2,0,0,1,2.4-9.1c1.6-2.7,5.1-7.5,10.3-14.4,1.9-2.3,4-6.3,6.4-11.9s3.6-9.6,3.6-12.2-1.9-5.8-5.6-5.8c-7.1,0-14.9,9.1-23.5,27.1-1.8,4-3,6.9-3.7,8.8a42.7,42.7,0,0,0-1.7,7.2c-.2,1.1-.3,2.2-.4,3.3-6,6.5-10.7,11.4-14.3,14.6s-6.7,4.9-9,4.9-5-2.8-5-8.4a52.3,52.3,0,0,1,1.8-13.2,113.5,113.5,0,0,1,5-15.4c2.2-5.6,5-12,8.2-19.1l4.3.5,3.5.3,4.3.5a222.2,222.2,0,0,0,12.9-26.6l-3.8-.6-5.4-.9c1.3-2.9,3.3-6.5,5.8-10.9s3.9-7,3.9-7.9-1.6-3.1-4.9-3.1-6.3,1.6-8.9,4.8-5.5,8.8-8.7,16.5h-3.9a38.3,38.3,0,0,0-10.8,1.2,12.5,12.5,0,0,0-6.5,4.4,45,45,0,0,0-5.7,10.2c-2.4,5.4-3.7,9.4-3.7,12.1,0,.5.1.8.4.8l1.3-.5,2-.8a26.6,26.6,0,0,1,8-.9H679l2.5.2c-9,18-16.6,30.7-23,37.8v.6c-4.7,5-8.3,8.5-10.7,10.6s-5.1,3.4-7.2,3.4-3.7-2.1-3.7-6.4a30.4,30.4,0,0,1,1.9-8.7,70.2,70.2,0,0,1,4.5-10.7c3.1-6.1,5.8-11.5,8.1-15.9s3.8-7.6,4.6-9.3a37,37,0,0,0,1.5-4.1,22.6,22.6,0,0,0,.3-4.2c0-3.7-.2-6.2-.7-7.4a3.1,3.1,0,0,0-3-1.9c-1.5,0-3.1,1-4.7,2.9s-4.7,6.1-9.1,12.4c-2,2.8-4.5,7-7.6,12.5a80.1,80.1,0,0,1-8.2,12.4l-10.8,12.7c-4,4.8-6.9,8-8.5,9.7s-2.9,2.5-3.7,2.5-3-1.8-3-5.3a49.7,49.7,0,0,1,1.8-11A143.7,143.7,0,0,0,614,447.5a99,99,0,0,0,8.6-14.1c1.8-3.8,2.6-6.5,2.6-7.9s-.8-1.5-2.6-2.2a14.5,14.5,0,0,0-5.5-1c-2.7,0-4.6.3-5.7,1a12.1,12.1,0,0,0-3.7,4l-4.5,7.2c-3.1,4.7-5.6,8.9-7.7,12.5a94.5,94.5,0,0,0-5,10.2,46.1,46.1,0,0,0-2.6,8.7l-.3,2.6c-2.3,2.2-3.7,3.7-4.4,4.4a19.9,19.9,0,0,1-2.7,2.2,5.3,5.3,0,0,1-3,1.1h-1.4l-1.6-2.2a91.8,91.8,0,0,0,5.5-16.8,67.6,67.6,0,0,0,2.1-14.8c0-4-.4-6.8-1.3-8.3a7,7,0,0,0-4.7-3.2,10.9,10.9,0,0,0,2.1-5.7,5.6,5.6,0,0,0-2.5-4.9,10.9,10.9,0,0,0-6.7-1.8c-3.9,0-8.3,1.7-12.9,5.1A63.7,63.7,0,0,0,543,436.9a81.7,81.7,0,0,0-9.9,17.8q-3.9,9.6-3.9,17.4a59.1,59.1,0,0,0,2.5,17.5c1.7,5.3,3.9,9.4,6.7,12.4s5.8,4.5,9.2,4.5c6,0,12.9-6.2,20.7-18.8,4.5.3,8-.3,10.4-2a47.1,47.1,0,0,0,8.6-8.5,53.2,53.2,0,0,0,1.5,11.5,28.8,28.8,0,0,0,4.5,10.4q2.9,3.9,6.3,3.9c2.9,0,6.7-3.3,11.2-9.9s11.2-17.8,20-33.5c-3.4,10-5.9,17.6-7.4,22.9a47.5,47.5,0,0,0-2.2,12.5c0,8.2,2.5,12.3,7.6,12.3a10.9,10.9,0,0,0,7-3.1,64.8,64.8,0,0,0,8.8-9.1c3.4-3.9,8.6-10.4,15.7-19.2v-.6l.4-.5,2.1-2.5,2-2.6,2.4-2.8c-2.4,8.4-4.1,14.7-5,18.8a53.3,53.3,0,0,0-1.4,10.8c0,4.5.8,8.2,2.5,11s3.8,4.3,6.6,4.3c7.6,0,19.4-11.5,35.2-34.6a71,71,0,0,0,3.6,20c2.4,7.1,6.1,10.6,11,10.6s7.9-2.6,13-7.8,8.7-10.4,13.5-18.2c-.1,1.7-.1,3.4-.1,5.1a56.3,56.3,0,0,0,1,12.4c.8,2.8,1.9,4.2,3.6,4.2s1.6-.8,2.6-2.2,2.7-4.5,5.2-8.9,5.2-9.3,8.3-14.4c2.6,7.4,4.8,13.2,6.7,17.4a34.6,34.6,0,0,0,6.4,9.8,11.1,11.1,0,0,0,8.1,3.5c3,0,6.9-2.7,11.4-8.2s10.3-13.6,17.1-24.3V468c-4.7,5.8-8.2,10.1-10.5,12.7a57,57,0,0,1-6.6,6.5c-2.2,1.7-4.2,2.6-6.1,2.6a6.9,6.9,0,0,1-5.3-2.5,57.3,57.3,0,0,1-4.8-8.1Q799,466,806.6,455.8a36.2,36.2,0,0,0,7.6-22.2,32.6,32.6,0,0,0-1.5-10.4c-1.1-3-2.5-4.5-4.4-4.5-4.6,0-11,4.9-19.4,14.5s-19.4,24.4-33.1,44.2V466.9Q786.6,418.3,802.5,390.1ZM562.7,453.9a54.9,54.9,0,0,0-2.3,15.8,43.4,43.4,0,0,0,1.5,11c-6.1,6-10.4,9.1-13,9.1q-8.4,0-8.4-8.1c0-.8.8-5.7,2.3-14.8a28,28,0,0,1,5-10.3,81.2,81.2,0,0,1,9-10q5.4-5,12.9-11.1A161.1,161.1,0,0,0,562.7,453.9Zm225.8-7.1c5.6-6,9.6-9,11.9-9s1.2.7,1.2,2c0,3.1-1.2,7-3.6,11.6a84.3,84.3,0,0,1-8.7,13.3,73.8,73.8,0,0,1-8.6,9.5c-3.4-3-6.2-4.5-8.5-4.5A123.2,123.2,0,0,1,788.5,446.8Z" fill="none"/></clipPath>
		    </defs>
		    <g id="point_mask">
		        <g clip-path="url(#clip-path)">
		            <polyline id="point1" points="308.2 118.7 319.2 100.7 319.2 116.7 310.2 127.7" fill="none" stroke="#000" stroke-miterlimit="10"/>
		        </g>
		    </g>
		    <g id="mmo_mask">
		        <g clip-path="url(#clip-path-2)">
		            <polyline id="mmo5" points="699.2 194.7 699.2 184.7 708.2 195.7 727.2 186.7" fill="none" stroke="#000" troke-miterlimit="10" />
		            <line id="mmo4" x1="697.2" y1="178.7" x2="706.2" y2="137.7" fill="none" stroke="#000" stroke-miterlimit="10" />
		            <path id="mmo3" d="M1131.5,421.5s-29,26-33,36-4,24,0,34,5,8,12,10,12-14,12-14" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10" />
		            <path id="mmo2" d="M995.5,471.5s-1,21,1,27,22-39,27-46,23-35,26-26-12,37-12,37-15,32-13,36,25-30,25-30,30-44,31-39,0,15-5,23-11,18-13,23-6,24-2,27,23-22,23-22" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10" />
		            <path id="mmo1" d="M921.5,408.5c-16,29-37,79-30,87s18-23,25-33,30-47,29-30-6,24-6,24-17,29-17,36-1,9,4,6,23-33,23-33,26-36,29-33-9,20-12,31-16,35-10,40,33-29,33-29l32-55" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		        </g>
		    </g>
		    <path id="I" d="M858.5,485.2q19.2-40.3,28.5-70.5c6.1-20.1,9.2-35.4,9.2-46,0-8-1.2-14.3-3.7-18.7s-5.8-6.7-10.2-6.7-6.9,1.2-11.9,3.7a79,79,0,0,0-15.3,10.3,84.7,84.7,0,0,0-14.3,15,104.5,104.5,0,0,0-10.3,17.1,170.5,170.5,0,0,0-7.7,17.7c-1.9,5.2-2.8,8.5-2.8,9.9,0,3.6,1.7,7.6,5,12s6,6.5,7.8,6.5,5.6-2.7,10.2-8.1,6.9-8.8,6.9-10.1-.8-1.5-2.2-.5c-3.3,2.3-5.6,3.4-7.1,3.4a2.2,2.2,0,0,1-1.6-.5,2.9,2.9,0,0,1-.5-1.7c0-4.7,1.7-10,5-16.2A93,93,0,0,1,856,384.2a105.8,105.8,0,0,1,14.5-13.7c4.7-3.4,8.3-5.2,10.8-5.2s5.1,3,5.1,8.9-2.9,16.5-8.8,34.5c-2.5,7.8-5.3,15.9-8.3,24.1s-5.7,14.8-7.8,19.9-4.9,11.5-8.3,19.3l-8.3,18.5c-2.9,6.3-4.3,10-4.3,11a4.5,4.5,0,0,0,1.3,3.1l5.6,5.5a2.4,2.4,0,0,0,1.8,1c.8,0,1.5-.9,2.3-2.6l6.6-14.7a4.9,4.9,0,0,1,.4-1,9.1,9.1,0,0,0,.7-1.4,5.1,5.1,0,0,0,.2-.9,12.2,12.2,0,0,0-.3-2.6C858.9,486.9,858.7,486,858.5,485.2Z" transform="translate(-430.3 -285.8)" fill="black"/>
		    <g id="outik_mask">
		        <g clip-path="url(#clip-path-3)">
		            <path id="outik5" d="M750.5,476.5s-4,26,0,19,22-36,22-36,20-30,27-30,14-1,12,8-10,22-15,26-12,11-14,15-1,24,6,22,35-33,35-33" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		            <path id="outik4" d="M711.5,471.5s0,31,10,29,28-29,28-29a203.8,203.8,0,0,1,16-42c11-21,84-137,84-137" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		            <path id="outik3" d="M673.5,460.5c-5,41-4,38,5,38s28-27,28-27l40-68" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		            <path id="outik2" d="M566.5,477.5c14,3,26-5,26-5s22-57,21-45-22,40-21,52,2,18,8,15,47-76,51-69-26,57-25,66,6,7,6,7,31-29,46-45,40-90,40-90" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		            <path id="outik1" d="M576.5,415.5c-26,26-39,38-42,50s-2,21,5,28,8,9,16,5,11-20,11-20l10-67" transform="translate(-430.3 -285.8)" fill="none" stroke="#000" stroke-miterlimit="10"/>
		        </g>
		    </g>
		    <path id="B" d="M508.3,441.6a96,96,0,0,0-9.4-4.2c-3.6-1.3-7.5-2.6-11.8-3.7a119.1,119.1,0,0,0-14.3-2.6l4.6-7.3a150.7,150.7,0,0,0,31.4-8.1c8.9-3.5,16.1-7.6,21.7-12.3a49,49,0,0,0,12.3-14.8,35.9,35.9,0,0,0,3.9-16.3,27.6,27.6,0,0,0-8.6-20.7c-5.7-5.5-14.3-8.3-25.7-8.3a90.8,90.8,0,0,0-16.7,1.8c-6.2,1.3-12.4,2.8-18.5,4.6s-11.6,3.6-16.7,5.6-8.3,3.4-9.6,4.3c-4,2.6-8.4,8.6-13.3,17.9s-7.3,15.8-7.3,19.4,1.1,4.6,3.4,4.6,9.2-1.9,18.2-5.6,13.6-6.2,13.6-7.5-1.5-2.2-4.4-3.7c-.4-.3-.6-.5-.6-.7s1.9-2.1,5.5-3.9a108.3,108.3,0,0,1,12.5-5,154.2,154.2,0,0,1,15.7-4.1,75.8,75.8,0,0,1,15.3-1.9c8.1,0,14.1,1.3,18,3.7s5.9,6.4,5.9,11.9-1.9,8.6-5.5,12.2-9.2,6.9-16.4,9.5-16.5,5-27.8,7.1l10.8-16.6c3.1-4.6,5.3-8,6.6-10.1a13.4,13.4,0,0,0,2.1-3.9c0-.5-.3-.7-.9-.7l-1.6.2c-6,.8-11.6,3.9-16.8,9.5s-11.1,13.7-17.7,24.6L451.7,419a59.4,59.4,0,0,0-7.6,1.6,6.8,6.8,0,0,0-3.2,2.2,6.7,6.7,0,0,0-1.2,4.3,8.7,8.7,0,0,0,3.1,7q3.1,2.5,10.5,3a251.7,251.7,0,0,0-14.6,28c-3.1,7.6-4.7,14.1-4.7,19.6,0,8,2.6,14.3,7.7,19s12.3,6.9,21.5,6.9a53,53,0,0,0,18.3-3.8,83.9,83.9,0,0,0,19.6-10.3,58.8,58.8,0,0,0,15.5-15.1c4-5.6,6-11.4,6-17.2C522.6,454.5,517.9,447,508.3,441.6Zm-6.9,29.7a47,47,0,0,1-14.8,9.7,42.8,42.8,0,0,1-16.6,3.7c-5.7,0-10-1.5-12.9-4.6a14.3,14.3,0,0,1-4.5-10.4,17.2,17.2,0,0,1,1.6-7.3,69.1,69.1,0,0,1,5.2-9.4c2.5-3.9,5.2-8.4,8.4-13.4a180.3,180.3,0,0,1,21.7,4.8c6,1.7,10.5,3.8,13.5,6.1a10.4,10.4,0,0,1,4.4,8.6C507.4,463.2,505.4,467.3,501.4,471.3Z" transform="translate(-430.3 -285.8)" fill="black"/>
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
						<p>CopyRight © 2018 Name</p>
					</div> <!-- End Col -->
				</div>
</footer>

</body>
</html>
