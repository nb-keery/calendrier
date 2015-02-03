		<footer>
			<div id="bas">	
				<div class="foot">
					<h3 class="fitre">Menu</h3>
						<ul id="foot1">
							<div id="secondnav">
								<li><a href="index.php">Accueil</a></li>
								<li><a href="annonces.php">Acheter</a></li>
								<li><a href="louer.php">Louer</a></li>
								<li><a href="contact.php">Contact</a></li>
							</div>
						</ul>
				</div>
				<div class="foot">
					<h3 class="fitre">Réseaux sociaux</h3>
					<ul id="foot2">
						<li><img src="images/rss.png" width="35"></li>
						<li><img src="images/facebook.png" width="35"></li>
						<li><img src="images/twitter.png" width="35"></li>
						<li><img src="images/google.png" width="35"></li>
					</ul>

				</div>
				<div id="foot3">
						<div id="date">
							<?php 
							setlocale(LC_ALL, 'FRA');
							$date = strftime("%A %d %B %Y");
							$dates = utf8_decode($date);  
							echo ucfirst($dates); ?>
						</div>
						<p>Copyright © 2014 Esnault Guillaume - Tous droits réservés</p>
				</div>
			</div>
		</footer>

	</body>
</html>