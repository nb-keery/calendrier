	<?php	$url = $_SERVER['REQUEST_URI'];
			$page = explode("/", $url);
			$nav = end($page); ?>
				<nav>
					<ul>
						<li class="<?php echo $nav == 'index.php' ? "actif" : " " ; ?>"><a href="index.php">Accueil</a></li>
						<li class="<?php echo $nav == 'annonces.php' ? "actif" : " " ; ?>"><a href="annonces.php">Acheter</a></li>
						<li class="<?php echo $nav == 'louer.php' ? "actif" : " " ; ?>"><a href="louer.php">Louer</a></li>
						<li class="<?php echo $nav == 'contact.php' ? "actif" : " " ; ?>"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>