<?php
echo '

	<script>
	$(function () {

	        $(\'#counterContainer\').hover(function() {
	           $(\'.arrow_box\').toggle();
	        });
	    });	
	</script>
	
	<div id="headerContainer" style="z-index:10;">
		<div id="logoLeftSpace"></div>
		<div id="logoContainer">
			<a href="index.php"><img src="assets/logo.png" width="450" height="62" alt="AED-Pointer Logo"></a>		
		</div>
		
		<div id="counterContainer">
			<img src="assets/picto_compteur.png" width="59" height="60" alt="Picto Compteur">
			<div id="aedCount"> &nbsp;716</div>
		
			<div class="arrow_box">
				
				<div id="arrow_box_title">LAST AED ADDED</div>
			
				<div id="last_added_outer_container">
				
					<div class="last_added_container">
						<div class="pointer_img_opened">
							<img src="images/pointer.png" width="66" height="75" alt="Pointer">
							<div class="last_added_container_availability">OPENED
							</div>
						</div>	
						<div class="last_added_container_name">GALERIES ST LAMBERT<br /><br />
						</div>
						<div class="last_added_container_address">Place Saint Lambert, 27, 4000  Liège
						</div>	
					</div>
				
					<div class="last_added_container">
						<div class="pointer_img_closed">
							<img src="images/pointer_red.png" width="66" height="75" alt="Pointer">
							<div class="last_added_container_availability">CLOSED
							</div>
						</div>	
						<div class="last_added_container_name">PROV-LG INSTITUT ERNEST MALVOZ<br /><br />
						</div>
						<div class="last_added_container_address">Quai du Barbou, 4, 4000  Liège
						</div>	
					</div>
			
			
					<div class="last_added_container">
						<div class="pointer_img_opened">
							<img src="images/pointer.png" width="66" height="75" alt="Pointer">
							<div class="last_added_container_availability">OPENED
							</div>
						</div>	
						<div class="last_added_container_name">PISCINE HUY<br /><br />
						</div>
						<div class="last_added_container_address">Avenue Godin-Parnajon, 5, 4500  Huy
						</div>	
					</div>
					
					<div class="last_added_container">
						<div class="pointer_img_opened">
							<img src="images/pointer.png" width="66" height="75" alt="Pointer">
							<div class="last_added_container_availability">OPENED
							</div>
						</div>	
						<div class="last_added_container_name">CENTRE SPORTIF D\'AWANS<br /><br />
						</div>
						<div class="last_added_container_address">Rue de l\'Eglise 21, 4340  Awans
						</div>	
					</div>
				
					<div class="last_added_container">
						<div class="pointer_img_closed">
							<img src="images/pointer_red.png" width="66" height="75" alt="Pointer">
							<div class="last_added_container_availability">CLOSED
							</div>
						</div>	
						<div class="last_added_container_name">AGISCA FOOTBALL<br /><br />
						</div>
						<div class="last_added_container_address">Avenue de la Porallée, 4920  Aywaille
						</div>	
					</div>	
				</div>		
			</div>
		</div>
		
	</div>


'


?>