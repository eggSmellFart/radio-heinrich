<?php
	$h1 = 'Disziplinen';
	$h2 = 'Unsere';
	$text = "Unsere Praxis bietet sowohl Leistungen aus dem diagnostischen als auch aus dem therapeutischen Bereich an. Immer abgestimmt auf Ihre individuellen Bedürfnisse wählt unser erfahrenes Ärzteteam die für Sie passende Untersuchung und Behandlung.";
	$disziplinen = [
					"1" => "Radiologie",
					"2" => "Nuklearmedizin",
					"3" => "Strahlentherapie",
				];
	$text_block_1 = "Die Abteilung der Radiologie deckt nahezu alle gängigen Untersuchungstechniken ab, vom konventionellen Röntgen mit oder Ultraschall (Sonographie) bis hin zur Computertomographie (CT) und Magnetresonanztomographie (MRT).";
	$text_block_2 = "Die Nuklearmedizin bildet die dritte Abteilung und deckt die gesamte Schilddrüsen-, Herz- und Skelettdiagnostik ab. Unser Schwerpunkt liegt hier auf der Darstellung des Herzes mittels der Myokardszintigraphie.";
	$text_block_3 = "Die Strahlentherapie ist Teil unseres Spektrums der Schmerztherapie. Dazu gehört die Röntgentiefenbestrahlung genauso wie die mittels CT durchgeführte Schmerztherapie der Wirbelsäule sowie die Behandlung von Gelenkerkrankungen.";
?>

<section class="disziplinen-startpage row">
	<div class="margin-top-bottom container col-8 ">

		<h2><?php echo $h2; ?></h2>
		<h1><?php echo $h1; ?></h1>

		<div class="row">
			<div class="text col-12">
				<p><?php echo $text; ?></p>
				
			</div>
		</div>

		<div class="row row-cols-lg-3 row-cols-sm-1">

			<div class=" col ">
				<div class=" disziplinen-container-startpage">

					<div class="icon-container">
						<img src="images/icons/disziplinen/radiologie.svg" alt="">
					</div>
					<h4>
						<?php echo $disziplinen["1"]; ?>
					</h4>
					<p><?php echo $text_block_1; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

			<div class=" col ">
				<div class="disziplinen-container-startpage">
					<div class="icon-container">
						<img src="images/icons/disziplinen/nuklearmedizin.svg" alt="">
					</div>	
					<h4>
						<?php echo $disziplinen["2"]; ?>
					</h4>
					<p><?php echo $text_block_2; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

			<div class=" col ">
				<div class="disziplinen-container-startpage">
					<div class="icon-container">
						<img src="images/icons/disziplinen/strahlentherapie.svg" alt="">
					</div>	
					<h4>
						<?php echo $disziplinen["3"]; ?>
					</h4>
					<p><?php echo $text_block_3; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

		</div>
	</div>	
</section>
