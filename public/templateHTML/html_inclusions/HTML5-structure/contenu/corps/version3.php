<div class='corps'>

	<a name="corpsPage" href="#"></a>
	<?php $debut_pic_memoire = memory_get_peak_usage();?>

		<div id='contenu' class='contenu' style=' display:table; margin-top:20px; width:100%;'>

			<?php
            $notAtable = TRUE;
            /*if(isset($this->page) && $this->page !== 'index'){
                if( ( ( ( !isset($this->page) || $this->page == 'index') && $interface < 6 ) || (isset($this->page) &&  $this->page == 'preferences') || $interface == 9 || $interface == 11 ) ){
                    echo "<div class='permanent-table'>";
                    $visibility = TRUE;
                    if ((isset($this->page) && $this->page == 'preferences') && ($interface != 9 && $interface != 11)) {
                        $visibility = FALSE;
                    }
                    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
                    AfficheGueuloir($visibility, 'gauche');
                    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"
                        . "</div>";
                }
			if( (!isset($this->page) || $this->page == 'index') || $this->page == 'preferences' || $interface == 6 || $interface >= 9 ){
				$notAtable = FALSE;
			}
            }*/
            ?>
			<div id='contenu-principal' <?php if(!$notAtable){ echo " class='permanent-table' ";}?> >
                <?php
                    /**
                     * CONTENU DE LA PAGE
                     */
					echo $content;
                    /**
                     * FIN DU CONTENU DE LA PAGE
                     */

                    //AfficheExplications($this->page);
                    //AfficheHeroSocial('','','','','','','',true);

                ?>
			</div>
			<?php
				/*if( (isset($this->page) &&  $this->page == 'preferences') || $interface == 6 || $interface == 10 || $interface == 12 ){
					echo "<div class='permanent-table'";
					$visibility = TRUE;
					if( ( isset($this->page) && $this->page == 'preferences' ) && ( $interface != 6 && $interface != 10 && $interface != 12 ) ){
						$visibility = FALSE;
					}
					echo ">"
							."<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
					AfficheGueuloir($visibility,'droite');
					echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"	
							."</div>";
				}*/
			?>

        <br /><br /><br /><br /><br />
        <?php

           $fin_pic_memoire = memory_get_peak_usage();
           include dirname(__DIR__) . '/plancher/footer_informational.phtml';

        ?>
        </div>