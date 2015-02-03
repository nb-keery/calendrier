<?php include("include/header.php");?>
				<h2>Annonces</h2>
				<br>

				<?php 	include ("include/maison.php"); 

					for ($i=0; $i < count($louer) ; $i++) 
					{ 
						
						echo '<li class="annonce"> 
				                  <a href=" ' . $louer[$i]['url'] . ' "target="_blank" ">  
				                    <img src="images/maison.jpg" id="home">
				                    <div id="ads">
					                    <h3>' . $louer[$i]['title'] . ' </h3>  
					                    <p>Surface : ' .  $louer[$i]['square_m']  . ' m² </p> 
					                    <p>Prix : ' . $louer[$i]['price'] .' €</p> <br><br>
					                    <button id="louer">Louer</button>
				                    </div>
				                  </a> 
				              	</li>';
				    }
       			?> 
			
			</section>

				<?php include("include/footer.php"); ?>