<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
				<title>Calendrier</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

	<?php 
		//Tableau des mois en latin
		  $mois = array('Januarius', 'Februarius', 'Martius', 'Aprilis', 'Maius', 'Junius', 'Julius', 'Augustus', 'September', 'October', 'November', 'December');
		//Tableau des jours de la semaine en latin  
		  $semaine = array('', 'Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus'); 
		//Tableau des jours en chiffre romain
		  $jour = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX', 'XX', 'XXI', 'XXII', 'XXIII', 'XXIV', 'XXV', 'XXVI', 'XXVII', 'XVIII', 'XXIX', 'XXX', 'XXXI'); ?>

	<h1>Calendrier</h1> 


		<?php 
		if(isset($_GET['mois'])){
			if ($_GET['mois']== 0) {
				$moisActuel = 12;
			}
			elseif ($_GET['mois'] == 13) {
					$moisActuel = 1;
			}
			else { $moisActuel = $_GET['mois']; 
			}
		}
		else { $moisActuel = date('n');} ?>

		<span><a href="?mois=<?php echo $moisActuel-1; ?>"><img src="gauche.png"></a> 

		<?php echo $mois[$moisActuel-1] . ' ' . date('Y'); ?>

		<a href="?mois=<?php echo $moisActuel+1; ?>"><img src="droite.png"></a></span>

		
		<TABLE> 
			<tr>
				<?php
				//Boucle sur le tableau des jours de la semaine pour les afficher dans des cases différentes mais sur la même ligne
				for ($j=0; $j < count($semaine) ; $j++)
					{ 
				echo '<th>' . $semaine[$j] . '</th>';
					} ?>
			</tr>
				
		<?php 
			//Calcul du numéro de la semaine (ex: Semaine 6) par rapport au premier du mois
			$semaine = date('W', strtotime('01-' .  $moisActuel .'-' . date('Y')));

			//Sert à connaitre le mois débute quel jour (ex: Mardi)
			$debut_de_mois = date('w', strtotime('01-' . $moisActuel .'-' . date('Y'))-1);

			//Calcul le nombre de jours de chaque mois
			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, $moisActuel, date('Y'));
			
			echo '<tr><th>' . $semaine++ . '</th>';
			
			//Boucle pour savoir combien il doit laisser de cases vides avant de commencer à écrire 
			for ($i=1; $i <= $debut_de_mois ; $i++) {

				//Les cases vides
				echo '<td></td>';
			}

			//Affiche les jours de la semaine en chiffre romain à l'aide du tableau $jour
			for ($j= 0; $j < $nombre_de_jours ; $j++, $i++) { 
				echo '<td> ' . $jour[$j] . '</td>';

				//Si la variable $b est égale à 7 elle ferme la ligne du tableau et en ouvre une autre, et ainsi elle retourne à 0 pour créer plusieurs lignes
				if ($i%7 == 0) {
					echo '</tr><tr><th>0' . $semaine++ . '</th>';
				}
			}
			//On ferme la dernière ligne et termine le tableau
			echo '</tr>';
		 ?>
		</TABLE> 
	</body>
</html>