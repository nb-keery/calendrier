<?php if (isset($_POST['formulaire']))
	{
		echo '<p id="message">Votre message a bien été envoyé, merci. </p>';
	}	?>



				<h2>Coordonnées</h2>

				<div id="contact">
					<div id="left">
						<h3 id="nom">IMMOBILIER.FR</h3>
						<ul id="info">
							<li>18 rue des chevaliers saint jean</li>
							<li>91100</li>
							<li>Corbeil-Essonnes</li>
							<li>France</li>
							<li>0611909382</li>
						</ul>
					</div>


					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2638.1479244918737!2d2.4766337999999997!3d48.6070117!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e72963605cab%3A0x9c4b0347361d6234!2s18+Rue+des+Chevaliers+Saint-Jean%2C+91100+Corbeil-Essonnes!5e0!3m2!1sfr!2sfr!4v1421933369357"
					 width="300" height="190" frameborder="0" id="map"></iframe>

					<div id="right">
						<FORM method="POST" action="">
							<input type"text" placeholder="Nom" required>
							<input type"text" placeholder="Mail" required>
							<input type"text" placeholder="Téléphone">
							<textarea placeholder="Message" required></textarea>
							<button type="submit" name="formulaire">Envoyer</button>
						</FORM>
					</div>
				</div>
			</section>
			
				<?php include("include/footer.php"); ?>