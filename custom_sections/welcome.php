<?php 
	$h1 = "Willkommen";
	$h2 = "Herzlich";
	$h3 = "Ihre Radiologie in Aachen";
	$text_block1 = "Unsere Praxis in der Heinrichsallee in Aachen bietet Ihnen Untersuchungen und Therapien aus dem Spektrum der Radiologie, Strahlentherapie und Nuklearmedizin. Das Ziel unserer im Jahre 1992 gegründeten Gemeinschaftspraxis war und ist es, unter besonderer Berücksichtigung der Patientinnen und Patienten mithilfe modernster Gerätetechnik die bestmöglichen Untersuchungsergebnisse zu erzielen.";
	$text_block2 = "Der Zusammenschluss der Radiologie, der Nuklearmedizin und der Strahlentherapie ermöglicht ein Betrachten der Patienten und deren Erkrankungen aus unterschiedlichen Blickwinkeln und gestattet dank des Austauschs unter den Abteilungen eine präzise Diagnosefindung.Das Team besteht aus 13 Ärztinnen und Ärzten mit unterschiedlichen Facharzt-Qualifikationen und kann somit optimal auf Ihre individuellen Bedürfnisse eingehen.";

?>

<section class="welcome-startpage row no-gutters">
	<div class="container col-8">
		<div class="welcome-subcontainer row row-cols-lg-2 row-cols-sm-1">
			<div class="container col welcome-container-text">
				<h2><?php echo $h2; ?></h2>
				<h1><?php echo $h1; ?></h1>
				<p><?php echo $text_block1; ?></p>
				<h3><?php echo $h3; ?></h3>
				<p><?php echo $text_block2; ?></p>
				<span class="bottom-link">
					<a href="#">lernen sie uns kennen ></a>
				</span>
			</div>
			<div class="col welcome-container-image hidden-sm-down">
				<img src="images/Fotos/Start/intro.jpg" alt="">
			</div>
		</div>
	</div>
</section>
