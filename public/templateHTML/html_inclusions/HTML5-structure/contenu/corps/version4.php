<div class='corps'>

	<a name="corpsPage" href="#"></a>
	<?php $debut_pic_memoire = memory_get_peak_usage();?>

		<div id='contenu' class='contenu'>


			<?php
            $notAtable = TRUE;
			echo "<div id='contenu-principal'";
			if(!$notAtable){ echo " class='permanent-table' ";}
			echo ">";
            echo $content;
            /**
             * FIN DU CONTENU DE LA PAGE
             */

            //AfficheExplications($this->page);

			?>
			</div>
		</div>

	<br /><br /><br /><br /><br />
	<?php

	   $fin_pic_memoire = memory_get_peak_usage();
        echo "
<!-- Footer SOCIAL -->
<div>";

AfficheHeroSocial('','','','','','','',true);

        echo <<<EOD
</div>
<!-- Footer SOCIAL -->

<!-- Copyright -->
<!--<div class="footer-copyright text-center text-light py-2">
    <p>
        <a href="http://infoartsmedia.fr" class="" >Info[ARTS]Media</a>
                                            -
        <a href="http://www.1and1.fr/?kwk=20117144" class=""                                                                                                         target="_blank">1and1</a>
        <br>
        Ce site respecte les droits des Internautes régis par les articles de la loi <i>Informatique et
        Libertées</i> accessible sur le site de la <a href="http://www.cnil.fr">CNIL</a>
    </p>
</div>-->
<!-- Copyright -->
EOD;
	   include dirname(__DIR__) . '/plancher/footer_informational.phtml';
	
	?>