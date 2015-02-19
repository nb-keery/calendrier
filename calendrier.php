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
			function chif_rome($num)
			{
			  //I V X  L  C   D   M
			  //1 5 10 50 100 500 1k
			  $rome =array("","I","II","III","IV","V","VI","VII","VIII","IX");
			  $rome2=array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC");
			  $rome3=array("","C","CC","CCC","CD","D","DC","DCC","DCCC","CM");
			  $rome4=array("","M","MM","MMM","IVM","VM","VIM","VIIM","VIIIM","IXM");
			  $str=$rome[$num%10];
			  $num-=($num%10);
			  $num/=10;
			  $str=$rome2[$num%10].$str;
			  $num-=($num%10);
			  $num/=10;
			  $str=$rome3[$num%10].$str;
			  $num-=($num%10);
			  $num/=10;
			  $str=$rome4[$num%10].$str;
			  return $str;
			}?>


	<h1>Calendrier</h1> 

		<span><img src="gauche.png"><?php echo date('F Y'); ?><img src="droite.png"></span>
		
		<TABLE> 
			<tr>
				<?php $semaine = array('','Lunae', 'Martis', 'Mercurii', 'Jovis', 'Veneris', 'Saturni', 'Dominicus');
				for ($j=0; $j < count($semaine) ; $j++)
					{ 
				echo '<th><div>' . $semaine[$j] . '</div></th>';
					} ?>
			</tr>
				
		<?php 
			$semaine = date('W', strtotime('01-02-2015'));
			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
			echo '<tr><th>' . $semaine++ . '</th>';

			$debut_de_mois = date('w', strtotime('01-' . date('n-Y'))-1);
			
			for ($i=0; $i < $debut_de_mois ; $i++) {

				echo '<td></td>';
			}
			
			$a=0;
			$b=0;
			for ($j= 1; $j <= $nombre_de_jours ; $j++, $b++) { 
				echo '<td> ' . chif_rome($j) . '</td>';
				if ($b%7 == 0) {
					echo '</tr><tr><th>0' . $semaine++ . '</th>';
				}
			}
			echo '</tr>';
		 ?>
		</TABLE> 
	</body>
</html>