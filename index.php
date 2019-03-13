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
	<div class="header" style="background: url(images/cover.jpg) no-repeat center center; background-size: cover;">
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
			<div class="accueil">

				<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1076.1 181.2">
			    <defs>
			        <clipPath id="clip-path" transform="translate(-386 -369.5)">
			            <path id="outik" d="M980.2,442.4l11.1-15.5,11.2-15.1a54.1,54.1,0,0,0,3.6-5,61.6,61.6,0,0,1-9.2,1,55.2,55.2,0,0,1-8.8-1l-52.8,74.1-7.7,11.3-.4.5c-21.5,25.6-36.5,38.3-45.1,38.3-4.5,0-6.7-1.8-6.7-5.4s2.3-8.6,7-15.1l32.7-44.9c-4.7.5-8.4.8-11,.8a46.5,46.5,0,0,1-7-.8l-18.5,26.3-.9.8C857,518.3,842.2,531,833.5,531c-4.5,0-6.8-1.8-6.8-5.4s2-7.7,5.9-13.3l32.1-45.9h18.9l1.1-1.8H865.9l16.5-23.4a41.7,41.7,0,0,1-8.3,1,39.9,39.9,0,0,1-8.2-1L849,464.6H834.6l-1.4,1.8h14.7l-19.4,27.2-1.7,1.8-4.5,5.2C805,520.9,792.6,531,784.9,531c-4,0-5.9-1.7-5.9-5.2s5.4-13.8,16.4-28.8l23-31.4a99.8,99.8,0,0,1-10.2.8,48,48,0,0,1-7.5-.8l-14.1,20Q754.5,531.1,740,531c-3.7,0-5.5-1.8-5.5-5.4s1.7-8,5.2-12.8l34.2-47.2c-4.7.5-7.9.8-9.7.8a55.6,55.6,0,0,1-7.7-.8L737.7,492l-1.4,1.3a48.1,48.1,0,0,1-14.1,12.2c-5.8,3.3-10.8,5-15.2,5a14.7,14.7,0,0,1-6.4-1.4c11.6-13,17.4-24.2,17.4-33.4,0-7.4-4.1-11.1-12.4-11.1s-20,4-33.7,12.2q-28.9,17.3-29,35.8a19.3,19.3,0,0,0,6.1,14.3,20.7,20.7,0,0,0,14.8,5.9q16.7,0,35.7-22.5a21.4,21.4,0,0,0,7.9,1.4c7.1,0,14.9-3.5,23.3-10.6l1.4-1.2-1.8,2.5c-4.3,6.1-6.4,11.4-6.4,16.1a13.6,13.6,0,0,0,4.3,10.2,15,15,0,0,0,10.6,4.1c4.1,0,8.3-1.8,12.8-5.4s10.6-9.6,19.5-19.1l2.8-3.2c-3.7,5.6-5.6,10-5.6,13.1a13.8,13.8,0,0,0,4.4,10.3,14.6,14.6,0,0,0,10.8,4.3q10.1,0,27.3-17.1l9-9.1c-2.5,4.6-3.7,8.5-3.7,11.9a13.1,13.1,0,0,0,4.5,10.2,16.1,16.1,0,0,0,11.3,4.1c8.8,0,21.6-9.6,38.6-29-3.9,6.4-5.8,11.4-5.8,14.9a12.8,12.8,0,0,0,4.6,10.1,16.1,16.1,0,0,0,11.3,4q13.5,0,38.8-28.6l-12,17.4c-2.6,3.9-5.1,7.5-7.3,10.6a81,81,0,0,1,9.4-.7,40.6,40.6,0,0,1,7.6.7l1.8-2.4c4-5.5,9.2-13.4,15.6-23.5s12.7-19.2,21-30.4ZM699.4,489.2c-3.7,4.2-5.6,8.2-5.6,12.2s1.4,5.3,4.2,7.9c-12.3,14.3-23.6,21.5-34,21.5-6.3,0-9.5-2.8-9.5-8.3q0-14.4,18.9-35.4c12.5-14,23.2-20.9,31.9-20.9,7,0,10.5,3.2,10.5,9.7a19.5,19.5,0,0,1-2.3,9.4,3.2,3.2,0,0,0-3.1-2.4C706.8,482.9,703.2,485,699.4,489.2Z" fill="none"/>
			        </clipPath>
			        <clipPath id="clip-path-2" transform="translate(-386 -369.5)">
			            <path id="k" d="M1017.6,494.3c0-.5-.3-.8-1-.8a2.6,2.6,0,0,0-1.8,1.2c-20.5,25.6-35.2,38.3-44.2,38.3-3.2,0-4.7-1-4.7-3.1s1-3.6,3-7c4.7-8.1,7-13.5,7-16.3,0-5.1-5-9.6-14.9-13.4,4.9-1.9,11.4-6.6,19.4-14.2,6.2-6.1,11.4-9.2,15.5-9.2s4.5,1,4.5,2.9-1.3,4.5-3.9,5.8c-6.2,3.3-9.4,6.4-9.4,9.3s2.1,4.7,6.2,4.7,7.3-1.9,11-5.7,5.6-7.7,5.6-11.5c0-5.8-3.7-8.7-11-8.7s-11.7,2.7-17.4,8.2c-10.5,10.2-18.2,16.1-23,17.9a28.6,28.6,0,0,0-8.5-1.2c-3.1,0-4.7.7-4.7,2s1.7,2.4,5,2.4a28.4,28.4,0,0,0,9.1-1.9c3.1,1.5,4.7,3.2,4.7,5s-.9,3.6-2.7,6.6v.5c-5.4,8.9-8.1,14.7-8.1,17.3s1.6,5.6,4.7,7.9a17.8,17.8,0,0,0,11,3.5q13.8,0,41-31.5l6.2-7.1Z" fill="none"/>
			        </clipPath>
			        <clipPath id="clip-path-3" transform="translate(-386 -369.5)">
			            <path d="M912.9,456a13.6,13.6,0,0,0,9.3-3.7c2.8-2.4,4.2-5.1,4.2-7.9s-2-5.2-6.1-5.2a14.4,14.4,0,0,0-9.4,3.7c-3,2.5-4.5,5-4.5,7.7S908.6,456,912.9,456Z" fill="none"/>
			        </clipPath>
			        <clipPath id="clip-path-4" transform="translate(-386 -369.5)">
			            <path id="mo" d="M1450.3,493.7c-.5,0-1.2.5-2.3,1.6a49.4,49.4,0,0,1-14.1,12.2c-5.8,3.3-10.9,5-15.2,5a14.7,14.7,0,0,1-6.4-1.4c11.6-13,17.4-24.2,17.4-33.4,0-7.4-4.2-11.1-12.4-11.1s-20.1,4-33.7,12.2a89.2,89.2,0,0,0-19.4,14.8,2.8,2.8,0,0,0-1.1,1.1l-2.6,2.7-4.4,5.2q-25.9,30.4-37.2,30.4c-3.9,0-5.9-1.6-5.9-4.9s2.3-7.5,7-13.3l12.4-15.4c4.7-6.7,7.1-12.5,7.1-17.5a15.4,15.4,0,0,0-4.3-10.9,14,14,0,0,0-10.4-4.4q-13.6,0-41,31.8c5.1-7.1,7.6-12.9,7.6-17.5a14.1,14.1,0,0,0-3.9-10.2,13.2,13.2,0,0,0-9.9-4.1q-12.6,0-38.6,31.8c5.7-8.3,8.5-14.7,8.5-19.4a12.4,12.4,0,0,0-3.3-8.7,10.1,10.1,0,0,0-7.9-3.7c-4.7,0-11.4,4.5-20,13.6s-13.3,14.3-13.3,15,.2.7.6.7,1.3-.5,2.3-1.6c14.8-17.3,24.5-25.9,29.3-25.9q3.3,0,3.3,3.6c0,4.4-7.1,16-21.3,34.6l-20.6,27.1a93.7,93.7,0,0,1,9.8-.4,67.1,67.1,0,0,1,8.5.4c11.8-18.1,23.7-33.6,35.7-46.3s20.6-19,25.8-19q5.4,0,5.4,5.4c0,4-6.7,15-20,32.8l-20.5,27.1a98.6,98.6,0,0,1,10.1-.4,54.5,54.5,0,0,1,7.9.4q46.2-65.3,65.2-65.3c3.9,0,5.9,1.6,5.9,4.9s-4,9.3-12.1,19q-9.5,11.4-10.5,12.9c-3.6,5.2-5.5,10.1-5.5,14.6a14.4,14.4,0,0,0,4.4,10.8q4.2,4.2,11.1,4.2,12.6,0,38.9-30.3a25.8,25.8,0,0,0-2.1,10.1,19.3,19.3,0,0,0,6.1,14.3,20.6,20.6,0,0,0,14.7,5.9q16.8,0,35.7-22.5a22,22,0,0,0,8,1.4c7.1,0,14.8-3.5,23.3-10.6,5.6-4.7,8.5-7.7,8.5-9S1450.7,493.7,1450.3,493.7Zm-39.2-2.5c-3.7,4.2-5.6,8.2-5.6,12.2s1.4,5.3,4.2,7.9c-12.3,14.3-23.6,21.5-34,21.5-6.3,0-9.5-2.8-9.5-8.3q0-14.4,18.9-35.4c12.5-14,23.2-20.9,31.9-20.9,7,0,10.5,3.2,10.5,9.7a19.5,19.5,0,0,1-2.3,9.4,3.2,3.2,0,0,0-3.2-2.4C1418.5,484.9,1414.8,487,1411.1,491.2Z" fill="none"/>
			        </clipPath>
			    </defs>
			    <path id="B" d="M619,386.9c16.8-8.8,33.1-13.1,49-13.1,11.8,0,21.3,3,28.5,9.2s10.8,14.3,10.8,24.4a42.8,42.8,0,0,1-3.9,18.2,3,3,0,0,0-.3,1.1c0,.8.5,1.2,1.4,1.2s2.5-2.5,3.9-7.5a54.6,54.6,0,0,0,2-13.7c0-10.6-3.9-19-11.8-25.5s-18.1-9.6-31-9.6c-16.4,0-33.3,4.6-50.9,13.7q-29.2-15.7-71.1-15.8-55.7,0-101.6,28.2c-30.6,18.8-46,39.5-46,62.3,0,11.2,4,20.2,12.1,26.9s18.6,10.1,32,10.1q30.6,0,62.1-23.9t31.5-47.3c0-12.7-8.2-19.1-24.7-19.1s-34.1,5.9-50.5,17.7-24.6,24-24.6,36.5a18.7,18.7,0,0,0,4.7,12.8,15.2,15.2,0,0,0,11.7,5.2c1.8,0,2.7-.3,2.7-1s-.8-.8-2.4-1a11.6,11.6,0,0,1-8.1-3.1,9.8,9.8,0,0,1-3.4-7.5c0-11.7,8.1-24.2,24.5-37.5s31.7-20,45.9-20,21.5,5.9,21.5,17.5c0,14.7-10.3,29.7-30.9,45.2s-40.5,23.3-59.8,23.3c-11.7,0-21.1-2.7-28-8s-10.4-12.4-10.4-21.4q0-26.7,36.9-56.8,44.8-36.7,105.6-36.8c28.7,0,50.7,5.4,65.8,16.1-9,5.2-20.1,14-33.5,26.4a324.7,324.7,0,0,0-34.2,36.5q-29.4,37.6-37.6,46.8a131.7,131.7,0,0,1-19.2,17.7q-25.6,19.5-57.1,19.5c-11.9,0-21.8-2.2-29.6-6.6s-11.7-10-11.7-16.6c0-4.3.7-6.4,2.3-6.4s.6.8.5,2.6c-.2,4.4,2.2,6.5,7.2,6.5a9.8,9.8,0,0,0,7.3-2.9,9.1,9.1,0,0,0,2.9-7c0-5.4-2.9-8.2-8.7-8.2a14.2,14.2,0,0,0-10.5,4.5,14.6,14.6,0,0,0-4.3,10.6c0,7.4,4.2,13.6,12.8,18.5s19.2,7.4,32,7.4q23.7,0,53.7-12.3c17-7,30.1-14.9,39.3-23.5s19.9-23.3,31.3-43.1q27.8-48.4,59.3-68.7c7.4,6.5,11.1,13.7,11.1,21.8a32.4,32.4,0,0,1-8.7,22.2q-8.7,9.6-23.7,13.5a86.4,86.4,0,0,0-17.1-2.2c-6,0-9.1.7-9.1,2.2s3.7,3,11,3a53.2,53.2,0,0,0,6.9-.4l8.3-.8c15.4,6.2,23,16,23,29.4s-6.1,27.4-18.3,39.3-25.6,17.9-40.3,17.9c-6.4,0-11.7-1.7-16-5.3A16.1,16.1,0,0,1,535,517c0-10,5.2-19.8,15.5-29.3s20.9-14.4,31.7-14.4c5.8,0,10.4,1.4,13.9,4.3a13.3,13.3,0,0,1,5.4,11c0,5-2.5,10.5-7.5,16.6a3,3,0,0,0-.6,1.4c0,.7.5,1,1.6,1s3.3-2.4,5.6-7,3.4-8.6,3.4-11.7a15.9,15.9,0,0,0-6-12.8c-4-3.4-9.2-5.1-15.5-5.1-11.4,0-22.8,5.1-34.1,15.2s-16.9,20.3-16.9,30.5a18.7,18.7,0,0,0,8,15.9c5.3,3.9,12.5,5.8,21.5,5.8,18.8,0,35.3-5.1,49.3-15.5s21.1-22.5,21.1-36.3c0-18.6-12-31.5-35.8-38.5,29-3.3,43.5-14,43.5-31.9C639.1,405,632.4,395.3,619,386.9Z" transform="translate(-386 -369.5)"/>
			    <g id="outik_mask">
			        <g clip-path="url(#clip-path)">
			            <path id="outik4" d="M822.5,524.5l9,8,13.7-6.4,10.1-8.5,6.9-6.9s7.3-8.2,13.3-12.2,10-3,10-3,12-29,18-26-27,37-31,44-4,11-1,14a11.8,11.8,0,0,0,6.7,3.3,8.6,8.6,0,0,0,7.7,1.1c4.6-1.4,9.4-6.8,9.4-6.8l9.3-8,8.7-8.6a43.7,43.7,0,0,1,9.2-8c6-4,5,1,10-2s16-23,16-23l13-19,15-25s21-38,13-16-78,119-78,119" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10"/>
			            <polyline id="outik3" points="451.2 95 476.5 95 495.8 95" fill="none" stroke="#000" stroke-miterlimit="10"/>
			            <path id="outik2" d="M708.5,485.5s-8,7-10,11-4,5-1,9,4.3,4.1,4.3,4.1,10.4,2.2,12.5,1.1,18.2-11.2,18.2-11.2l13-6,19-24s-31,34-33,41-2,9,0,15,.5,4.8,4.8,6.9,11-3.6,11-3.6l17.2-15s8-9.3,14-14.3,6,0,13-6,17-24,17-24-32,39-34,46-2,7,2,12,7,5,7,5,10.5-1.9,14.8-5.9,12-12.7,12-12.7,7.7-9.4,9.9-10.9,3.3,2.5,14.3-4.5,20-32,20-32,12-33,16-30-48,72-48,80-3,2,1,8" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10" />
			            <path id="outik1" d="M705.5,464.5s-10,3-15,5-13,5-20,13-17,15-21,24-3,10,1,18,8,6,8,6l9.8,1.9,14.2-8.5s13.2-8.7,15.6-12,17.4-27.4,17.4-27.4,3.7-9.4,1.9-13.2-12-5.9-12-5.9" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10" />
			        </g>
			    </g>
			    <g id="k_mask">
			        <g clip-path="url(#clip-path-2)">
			            <path id="k2" d="M961.5,493.5s5,2,6,6,0,8-1,13-6,8-6,15,1,4,4,5a15.8,15.8,0,0,0,4,1h5s6-2,9-4a23.4,23.4,0,0,0,7-7c2-3,8-8,8-8l6-7,8-7,4-6" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10"/><path id="k1" d="M988.5,489.5s4,1,10-3,7-6,7-11,1-3-3-6-5-2-7-2-8,4-8,4l-6,5-8,7-8,6s-4,4-5,4h-13" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10" />
			        </g>
			    </g>
			    <path id="I" d="M1234.9,435.5c0-.7-.3-1-.9-1s-1.2.7-1.6,2c-2.1,8.5-8.1,15.7-18,21.8a60.8,60.8,0,0,1-32.3,9l-4.1-.2,2.4-3.6q35.1-55,70.9-76.5a221.7,221.7,0,0,0,27.1-8c7.9-2.9,11.9-5.1,11.9-6.4s-.9-1.2-2.5-1.2c-3.2,0-8.9,1.5-17.2,4.7a124.5,124.5,0,0,0-20.2,9.6l-13.5,2.4-15.8,2.2c-23.5,3.3-40.7,6.9-51.7,11-21.6,7.7-32.4,19.7-32.4,35.8,0,13.2,8.2,22.8,24.5,28.8-11.5,14.9-20.7,26-27.5,33.1q-34.6,36.3-77.9,36.3c-12,0-22.1-2.3-30.1-7.1s-12.1-10.5-12.1-17.4c0-4.1.9-6.1,2.6-6.1a1,1,0,0,1,.9,1.2v2.4c0,3.6,2.2,5.4,6.7,5.4a11.2,11.2,0,0,0,7.6-2.7,9.1,9.1,0,0,0,3.1-6.8c0-5.5-3.2-8.2-9.4-8.2a14.1,14.1,0,0,0-10.3,4.4,14.9,14.9,0,0,0-4.2,10.7c0,7.8,4.6,14.2,13.7,19.1s20.8,7.5,34.9,7.5q37.8,0,74-21.4c8.6-5.2,15.4-10.3,20.4-15.5s11.5-13.8,18.5-25l4.1-6.7a40.7,40.7,0,0,0,5,.3c17.9,0,32.6-5.7,43.9-17.2C1231.7,446,1234.9,440.4,1234.9,435.5Zm-72.2,28.9c-11.8-4.2-17.7-11.3-17.7-21.4s6.9-20.3,20.7-29.4,32.5-15.8,55.9-20.5l15.6-3.2,9.8-2C1216.2,405,1188.1,430.4,1162.7,464.4Z" transform="translate(-386 -369.5)"/>
			    <g clip-path="url(#clip-path-3)">
			        <path id="point1" d="M909.5,448.5c-2-5,7.2-8.3,11-7s2,7,2,7-4,7-10,4C912.5,452.5,911.5,453.5,909.5,448.5Z" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10"/>
			    </g>
			    <g id="m_mask">
			        <g clip-path="url(#clip-path-4)">
			            <path id="mo3" d="M1420,488s-13,11-13,16,6.5,9.1,6.5,9.1l14-.9,13.1-7.6L1451,494" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10"/>
			            <path id="mo2" d="M1368,501s-6,13-6,20,1,5,4,9,9,5,9,5,14.9-3.1,16.4-5,14-13.9,14-13.9S1427,491,1428,486s4-5.7,1.5-10.9-4.7-6.9-4.7-6.9L1417,467l-15.8,3" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10" />
			            <path id="mo1" d="M1204,493.7l14.8-13.6,10.2-10.9,7-2.2s8.3,2.2,9.6,5.1S1234,491,1234,491s-6,12-12,19-22,26-12,19,29-31,29-31l7.9-6.6L1254,481l11-7,6.3-5.8s7.1-2.2,9.9-1.2,8.8,9,6.8,14-7,7-11,13-38,43-24,35,31.9-32.1,31.9-32.1l11-9.3,11.5-12.8,14.1-7.8s6.3-1.7,9.9,1.2S1340,484,1335,490s-10,5-14,11-12,14-13,19,0,10.5,3,12.8,8,.2,8,.2l13.4-4.6,8.2-9.1L1360,501s31-20,35-25,12.4-5.4,12.4-5.4" transform="translate(-386 -369.5)" fill="none" stroke="#000" stroke-miterlimit="10"/>
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
						<p>CopyRight © 2018 Name</p>
					</div> <!-- End Col -->
				</div>
</footer>

</body>
</html>
