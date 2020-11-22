<?php 
    $h1 = 'team';
    $h2 = 'unser';
    // For newlines put \n into the marked spaces
    // WARNING: All text has to be between <<<EOT and EOT. after <<<EOT there HAS TO BE a new line!
    
    $text =
<<<EOT
Fachwissen, Erfahrung und Menschlichkeit sind der Schlüssel zu einer präzisen Diagnosefindung und bestmöglichen Behandlung. Unseres eingespielten Team begegnet unseren Patientinnen und Patienten auf Augenhöhe und versteht sich als Partner für eine an Ihren persönlichen Bedürfnissen ausgerichtete Versorgung. 
\nZwölf Ärztinnen und Ärzte mit unterschiedlichen Facharzt-Qualifikationen verteilen sich effektiv auf unsere drei Disziplinen Radiologie, Nuklearmedizin und Strahlentherapie. Durch ständigen interdisziplinären Austausch betrachten wir Erkrankungen aus unterschiedlichen Blickwinkeln und finden patientenorientierte Lösungen.
EOT
?>

<section class="row  team_startpage padding_top_bottom">
    <div class="container col-8">
        <div class="row row-cols-lg-2 row-cols-sm-1">
            <div class="col-5 hidden-sm-down">
                <img src="images/Fotos/Start/team.jpg" alt="">
            </div>
            <div class="col-7">
                <h2>
                    <?php echo $h2; ?>    
                </h2>
                <h1>
                    <?php echo $h1; ?>    
                </h1>
                <p>
                    <?php echo nl2br($text); ?>    
                </p>
            </div>
        </div>
    </div>
</section>
