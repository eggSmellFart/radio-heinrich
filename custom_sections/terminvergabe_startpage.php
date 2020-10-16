<?php 
	$button_text = "zur online terminvergabe";
	$text_block1 = "Sie brauchen einen Termin?";
	$text_block2 = "Testen Sie jetzt unsere Online-Terminvergabe - bequem, schnell, immer erreichbar.";
?>
<section class="row terminvergabe-startpage ">
	<div class=" conatiner col-12 terminvergabe-img-container parallax-window" data-parallax="scroll" data-image-src="images/terminvergabe.png">
		<div class="row">
			<div class="col-6"></div>
			<!-- <img src="images/parallax/2.jpg" alt=""> -->
			<div class="terminvergabe-floating-button-container col-sm-12 col-lg-4">
				<h3><?php echo $text_block1; ?></h3>
				<h4><?php echo $text_block2; ?></h4>
				<button class="terminvergabe-floating-button">
					<?php echo $button_text; ?>
				</button>
			</div>
		</div>	
	</div>
</section>