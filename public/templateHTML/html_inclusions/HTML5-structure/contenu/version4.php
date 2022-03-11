<div class='corps'>

	<a name="corpsPage" href="#"></a>
	<?php $debut_pic_memoire = memory_get_peak_usage();?>

		<div id='contenu' class='contenu'>


            <?php
            if (!estActifOuPasDoNotTrackHeader()
                &&
                (isset($_COOKIE['CookieApp_CA']) && $_COOKIE['CookieApp_CA'] == 1)
                &&
                (isset($_COOKIE['CookieApp_CA_Gadverts']) && $_COOKIE['CookieApp_CA_Gadverts'] == 1)
            ) {
                if(isset($_SESSION['nbr_connection'])){
                    if($_SESSION['nbr_connection'] < 6 && $_SESSION['nbr_connection']%2 == 0){
                        $echo_pub = true;
                    }else if($_SESSION['nbr_connection']>6 && $_SESSION['nbr_connection']< 25 && $_SESSION['nbr_connection']%5 == 0){
                        $echo_pub =  true;
                    }else{
                        $echo_pub = false;
                    }

                    if($echo_pub) {
                        
                    }
                }
            }
            ?>

			<?php
            $notAtable = TRUE;
			echo "<div id='contenu-principal'";
			if(!$notAtable){ echo " class='permanent-table' ";}
			echo ">";

            /**
             * CONTENU DE LA PAGE
             */
            echo "<br /><br />";
            echo $content;
            /**
             * FIN DU CONTENU DE LA PAGE
             */

			?>
			</div>
		</div>

	<br /><br /><br /><br /><br />
	<?php

	   $fin_pic_memoire = memory_get_peak_usage();
	   AfficheFooter_V4();
	   include dirname(__FILE__) . '/plancher/footer_informational.phtml';
	
	?>