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

	<?php $mois = array('Januarius', 'Februarius', 'Martius', 'Aprilis', 'Maius', 'Junius', 'Augustus', 'September', 'October', 'November', 'December');
		  $semaine = array('Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus'); ?>


	<h1>Calendrier</h1> 

		<span><?php echo date('F Y'); ?></span>
		
		<TABLE> 
			<tr>
				<?php $semaine = array('Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus');
				for ($j=0; $j < count($semaine) ; $j++)
					{ 
				echo '<th><div>' . $semaine[$j] . '</div></th>';
					} ?>
			</tr>
				
		<?php 
			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
			echo '<tr>';
			$semaine = date('W');

			$debut_de_mois = date('w', strtotime('01-' . date('n-Y'))-1);

			
			for ($i=0; $i < $debut_de_mois ; $i++) {

				echo '<td></td>';
			}

			$b=0;
			for ($j=1; $j <= $nombre_de_jours ; $j++, $b++) { 
				echo '<td> ' . $j . '</td>';
				if ($b%7 == 0) {
					echo '</tr><td>' . $semaine . '</td><tr>';
					$semaine++;
				}
			}
			echo '</tr>';
		 ?>
		</TABLE> 
	</body>
</html>