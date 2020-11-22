<?php 
	$col1_h3 = 'FÜR KOLLEGINNEN & KOLLEGEN';
	$col2_h3 = 'FÜR PATIENTINNEN & PATIENTEN';
	$col3_h3 = 'WIR SIND ZERTIFIZIERT';
	$col4_h3 = 'RECHTLICHES';

	$col_1_link1 = 'Informationen für Überweiser';
	$col_1_link2 = 'Leistungsspektrum';
	$col_1_link3 = 'Fortbildungen & Veranstaltungen';
	
	$col_2_link1 = 'Online Terminvergabe';
	$col_2_link2 = 'Kontakt';
	$col_2_link3 = 'Anfahrt';

	$col_3_link1 = 'veritatis';
	$col_3_link2 = 'distinctio';
	$col_3_link3 = 'facere';

	$col_4_link1 = 'Impressum';
	$col_4_link2 = 'Datenschutz';
	$col_4_link3 = '© Radiologie Heinrichsallee';

	$col_1_href1 = '#';
	$col_1_href2 = '#';
	$col_1_href3 = '#';
	
	$col_2_href1 = '#';
	$col_2_href2 = '#';
	$col_2_href3 = '#';

	$col_3_href1 = '#';
	$col_3_href2 = '#';
	$col_3_href3 = '#';

	$col_4_href1 = '#';
	$col_4_href2 = '#';
	$col_4_href3 = '#';



?>
<footer id="footer" class="dark row">
	<div class="col-8 container">
		<div class="row row-cols-4 ">
			<div class="col container">
				<h3 class="footer_col_h3"><?php echo($col1_h3); ?></h3>	
				<?php 
					echo '<a href="' . $col_1_href1 . '">' . $col_1_link1 . '</a>';
					echo '<a href="' . $col_1_href2 . '">' . $col_1_link2 . '</a>';
					echo '<a href="' . $col_1_href3 . '">' . $col_1_link3 . '</a>';
				?>
			</div>
			<div class="col container">
				<h3 class="footer_col_h3"><?php echo($col2_h3); ?></h3>	
				<?php 
					echo '<a href="' . $col_2_href1 . '">' . $col_2_link1 . '</a>';
					echo '<a href="' . $col_2_href2 . '">' . $col_2_link2 . '</a>';
					echo '<a href="' . $col_2_href3 . '">' . $col_2_link3 . '</a>';
				?>
			</div>
			<div class="col container">
				<h3 class="footer_col_h3"><?php echo($col3_h3); ?></h3>	
				<img src="images/Fotos/Start/footer/medzert.png" alt="">
			</div>
			<div class="col container">
				<h3 class="footer_col_h3"><?php echo($col4_h3); ?></h3>	
				<?php 
					echo '<a href="' . $col_4_href1 . '">' . $col_4_link1 . '</a>';
					echo '<a href="' . $col_4_href2 . '">' . $col_4_link2 . '</a>';
					echo '<a href="' . $col_4_href3 . '">' . $col_4_link3 . '</a>';
				?>
			</div>
		</div>
	</div>
	<div class="col-8 container">
		<div class="row row-cols-1 container">
			<div class="col footer-logo-wrp">
				<img class="footer-logo" src="images/Fotos/Start/logo_plain_white.svg" alt="">
			</div>
		</div>
	</div>

			
</footer>
