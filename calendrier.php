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
		  $semaine = array('Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus'); 
		  $jour = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');
	?>


	<h1>Calendrier</h1> 
		
		<TABLE> 
			<tr>
				<?php $semaine = array('Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus');
				for ($j=0; $j < 7 ; $j++)
					{ 
				echo '<th>' . $semaine[$j] . '</th>';
					} ?>
			</tr>
				
		<?php 
			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, 3, 2015);
			echo '<tr>';

			$x = 1;			
			for ($i=1; $i <= $nombre_de_jours; $i++, $x++)
				{ 
				echo '<td>' . $i . '</td>';
						
				if ($x == 7){
				$x = 0;
				echo '</tr><tr>';}
				}
			echo '</tr>';
		 ?>
		</TABLE> 
	</body>
</html>