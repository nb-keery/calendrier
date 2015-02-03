<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content=text/html; charset=UTF-8 />
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
				<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
				<?php $url = $_SERVER['REQUEST_URI'];
							 $page = explode("/", $url);
							 $titre = end($page);  ?>

				<title>	<?php echo $titre == 'index.php' ? "Immobilier - Accueil" : ""; ?>
						<?php echo $titre == 'annonces.php' ? "Immobilier - Annonces" : ""; ?>
						<?php echo $titre == 'louer.php' ? "Immobilier - Louer" : ""; ?>
						<?php echo $titre == 'contact.php' ? "Immobilier - Contact" : ""; ?></title>
			<link rel="stylesheet" type="text/css" href="css/immo.css">
	</head>


<body>
			
			<header>
				<div id="haut">
					<div id="tete">
						<img src="images/logo2.png" width="95" height="95" id="logo">
						<img src="images/titre.png" id="titre">
					</div>
					<?php include("include/nav.php"); ?>
				</div>
			</header>

			<section>
				<img src="images/projet.jpg" width="980" height="325">
