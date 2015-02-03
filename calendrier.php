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


	<h1>Calendrier</h1> 

		<form>
			<select>
					<?php $mois = array('Januarius', 'Februarius', 'Martius', 'Aprilis', 'Maius', 'Junius', 'Augustus', 'September', 'October', 'November', 'December'); 
					for ($i=0; $i < count($mois) ; $i++) 
						{ 
					echo '<option>' . $mois[$i] . '</option>';
						} ;?>
			</select>
		</form>
		
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

				for ($l=0; $l <6; $l++)
				{ 
						echo '</tr><tr>';
						for ($i=0; $i <7; $i++) { 
							echo '<td></td>';
						}
				} ?>
				
		</TABLE> 
	</body>

</html>