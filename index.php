<?php 
	// Je déclare mes tableaux ici
	$mois = array("Januarius", "Februarius", "Martius", "Aprilis", "Maius", "Junius", "Julius", "Augustus", "September", "October", "November", "December");
	$nomJour = array("","Lunae", "Martis", "Mercurii", "Jovis", "Veneris", "Saturni", "Dominicus");
	// Variable qui me servira à afficher les numéros de mes jours
	$j = 1;

	// Gestion de la date
		// si seulement si on appuie sur precedent ou suivant
	if(isset($_GET['mois'])):
		// si le mois est à janvier
		if($_GET['mois']==0){
			// le mois passe à décembre
			$moisEnCour = 12;
			// Et l'année passe à l'année précèdente
			$anneEnCour = $_GET['annee']-1;
		// si le mois est à décembre
		}else if($_GET['mois']==13){
			// le mois passe à janvier
			$moisEnCour = 1;
			// Et l'année passe à l'année suivante
			$anneEnCour = $_GET['annee']+1;
		// si l'année n'est ni janvier ni févier
		}else{
			// je passe au mois précèdent
			$moisEnCour = $_GET['mois'];
			// je garde l'année en cours
			$anneEnCour = $_GET['annee'];
		}
	// si on n'appuie ni sur précèdent ni sur suivant
	else:
		// je garde le mois en cours
		$moisEnCour = date('n');
		// je garde l'année en cours
		$anneEnCour = date('Y');
	endif;
	
	// Je recupère le nombre de jour du mois en cour
	$number = cal_days_in_month(CAL_GREGORIAN, $moisEnCour, $anneEnCour);
	// Je récupère le numero de semaine dans l'année
	$semaineDeLannee = date("W", strtotime('01-'.$moisEnCour."-".$anneEnCour));
?>



<!-- Ouverture de html -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- J'affiche le mois et l'année en cours en me servant du tableau mois et de la fonction date() -->
	<h1>
		<!-- J'envoie le mois précèdent et l'année -->
		<a href="?mois=<?php echo $moisEnCour-1; ?>&annee=<?php echo $anneEnCour; ?>">
			<!-- Indique le retour au mois précèdent -->
			<b>  <  </b>
		</a>
			<!-- J'affiche le mois et année -->
			<?php echo $mois[$moisEnCour-1]." ".$anneEnCour; ?>
		<!-- J'envoie le mois suivant et l'année -->
		<a href='?mois=<?php echo $moisEnCour+1; ?>&annee=<?php echo $anneEnCour; ?>'>
			<!-- Indique lenvoie au mois suivant -->
			<b>  >  </b>
		</a>
	</h1>
	<table>
		<tr>
			<!-- une case vide qui correspondra au semaine de l'année -->
			<td></td>
			<?php 
				// Je boucle sur le nombre de jours de la semaine
				for ($a=1; $a < count($nomJour) ; $a++) { 
					// J'affiche le jour de la semaine
					echo "<td>".$nomJour[$a]."</td>";
				}
			?>
		</tr>
		<?php
		// J'ouvre la première ligne et j'indique de quelle semaine il s'agit
		echo "<tr><td>".$semaineDeLannee++."</td>";
			// date("N", strtotime('01-'.date('n-Y'))) == Me retourne le jour de la semaine du 1er du mois  (ex: lundi=>1, mardi=>2)
			for ($b=0; $b < date("N", strtotime('01-'.$moisEnCour."-".$anneEnCour))-1 ; $b++) { 
				// Insertion de colonne vide
				echo "<td></td>";
			}
			// Tant que $j est inférieur au nombre de jours du mois
			while($j  <= $number) { 
				// Je ferme et ouvre mon tr quand b est différent de zéro et qu'il est multiple de 7
				// puis j'indique la semaine de l'année correspondante 
				if($b%7 == 0 && $b != 0) echo "</tr><tr><td>".$semaineDeLannee++."</td>";
				echo "<td>".$j."</td>";
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