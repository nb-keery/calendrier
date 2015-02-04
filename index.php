<?php 
	// Je déclare mes tableaux ici
	$mois = array("Januarius", "Februarius", "Martius", "Aprilis", "Maius", "Junius", "Julius", "Augustus", "September", "October", "November", "December");
	$nomJour = array("","Lunae", "Martis", "Mercurii", "Jovis", "Veneris", "Saturni", "Dominicus");
	$numeroJour = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", " ");
	// Variable qui me servira à afficher les numéros de mes jours
	$j = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- J'affiche le mois et l'année en cours en me servant du tableau mois et de la fonction date() -->
	<h1><?php echo $mois[date('n')-1]." ".date('Y'); ?></h1>
	<table>
		<tr>
			<?php 
				// Je boucle sur le nombre de jours de la semaine
				for ($a=1; $a < count($nomJour) ; $a++) { 
					// J'affiche le jour de la semaine
					echo "<td>".$nomJour[$a]."</td>";
				}
			?>
		</tr>
		<?php
		// Je recupère le nombre de jour du mois en cour
		$number = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
		// J'ouvre la première ligne
		echo "<tr>";
			// date("N", strtotime('01-'.date('n-Y'))) == Me retourne le jour de la semaine du 1er du mois  (ex: lundi=>1, mardi=>2)
			for ($b=0; $b < date("N", strtotime('01-'.date('n-Y')))-1 ; $b++) { 
				// Insertion de colonne vide
				echo "<td></td>";
			}
			// Tant que $j est inférieur au nombre de jours du mois
			while($j  < $number) { 
				// Je ferme et ouvre mon tr quand b est différent de zéro et qu'il est multiple de 7
				if($b%7 == 0 && $b != 0) echo "</tr><tr>";
				echo "<td>".$numeroJour[$j]."</td>";
				// j'incrémente le $b pour le tr
				$b++;
				// j'incrémente le $j pour les jours et pour que la condition du while soit vrai.
				$j++;
			}
			// Je ferme la dernierre ligne
		echo "</tr>";
		?>
	</table>
</body>
</html>