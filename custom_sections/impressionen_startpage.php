<?php 
 $h1 = 'Impressionen';
 $h2 = 'Praxis';
 $text_block1 = "Unsere Praxis bietet sowohl Leistungen aus dem diagnostischen als auch aus dem therapeutischen Bereich an. Immer abgestimmt auf Ihre individuellen Bedürfnisse wählt unser erfahrenes Ärzteteam die für Sie passende Untersuchung und Behandlung.";
 $img_src1 = 'images/Fotos/Start/impressionen/carousel-s01.jpg';
 $img_src2 = 'images/Fotos/Start/impressionen/carousel-s02.jpg';
 $img_src3 = 'images/Fotos/Start/impressionen/carousel-w01.jpg';
 $img_src4 = 'images/Fotos/Start/impressionen/carousel-s03.jpg';
 $img_src5 = 'images/Fotos/Start/impressionen/carousel-s04.jpg';
 $img_src6 = 'images/Fotos/Start/impressionen/carousel-w02.jpg';
 $img_src7 = 'images/Fotos/Start/impressionen/carousel-s05.jpg';
 $img_src8 = 'images/Fotos/Start/impressionen/carousel-s07.jpg';
 $img_src9 = 'images/Fotos/Start/impressionen/carousel-w03.jpg';
?>
<section class="row  praxis_impressionen">
	<div class="container col-8">
		<div class="row row-cols-lg-1 row-cols-sm-1">
			<div class="col">
				<h2>
					<?php echo $h2; ?>    
				</h2>
				<h1>
					<?php echo $h1; ?>    
				</h1>
				<p>
					<?php echo $text_block1; ?>
				</p>
			</div>
		</div>
	</div>
	<div class="margin-top-bottom container col-12">
		<div id="oc-slider-2" class="row owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots">
			<div class="item"><img style="width:250px"  src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src4; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src5; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src6; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src7; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src8; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src9; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
		</div>
	</div>
	
</section>
