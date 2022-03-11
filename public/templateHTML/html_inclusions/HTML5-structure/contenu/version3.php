<div class='corps'>

	<a name="corpsPage" href="#"></a>
	<?php $debut_pic_memoire = memory_get_peak_usage();?>

		<div id='contenu' class='contenu' style=' display:table; margin-top:-15px; width:100%;'>

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
            /*if(isset($page) && $page !== 'index'){
                if( ( ( ( !isset($page) || $page == 'index') && $interface < 6 ) || (isset($page) &&  $page == 'preferences') || $interface == 9 || $interface == 11 ) ){
                    echo "<div class='permanent-table'>";
                    $visibility = TRUE;
                    if ((isset($page) && $page == 'preferences') && ($interface != 9 && $interface != 11)) {
                        $visibility = FALSE;
                    }
                    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
                    AfficheGueuloir($visibility, 'gauche');
                    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"
                        . "</div>";
                }
			if( (!isset($page) || $page == 'index') || $page == 'preferences' || $interface == 6 || $interface >= 9 ){
				$notAtable = FALSE;
			}
            }*/
			echo "<div id='contenu-principal'";
			if(!$notAtable){ echo " class='permanent-table' ";}
			echo ">";

            /**
             * CONTENU DE LA PAGE
             */
            echo $content;
            /**
             * FIN DU CONTENU DE LA PAGE
             */

			?>
			</div>
			<?php
				/*if( (isset($page) &&  $page == 'preferences') || $interface == 6 || $interface == 10 || $interface == 12 ){
					echo "<div class='permanent-table'";
					$visibility = TRUE;
					if( ( isset($page) && $page == 'preferences' ) && ( $interface != 6 && $interface != 10 && $interface != 12 ) ){
						$visibility = FALSE;
					}
					echo ">"
							."<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
					AfficheGueuloir($visibility,'droite');
					echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"	
							."</div>";
				}*/
			?>
		</div>

	<br /><br /><br /><br /><br />
	<?php

	   $fin_pic_memoire = memory_get_peak_usage();
	   include dirname(__FILE__) . '/plancher/footer_informational.phtml';
	
	?>