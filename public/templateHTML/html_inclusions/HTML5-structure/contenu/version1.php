<?php

function AfficheFooter_V1(){
echo <<<EOD
    <!-- STAY CONNECTED-->
    <div style="background-color: white;padding: 2rem 5rem;">
        <center>
        <!-- INVIT' -->
        <div>
            <h6>Come on ! Restez connecté sur la planête des réseaux sociaux !</h6>
        </div>
        <!-- /INVIT' -->

        <!-- LINKY LINKS -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <!--<a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>-->
            <!--Linkedin -->
            <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
                <i class="fab fa-instagram white-text"> </i>
            </a>
            <!--TikTok-->
            <a class="tik-ic">
                <i class="fab fa-tiktok white-text"> </i>
            </a>            

        </div>
        <!-- /LINKY LINKS -->
        </center>
    </div>
    <!-- /STAY CONNECTED-->

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

}
?>


<div class='corps'>
	<a name="corpsPage" href="#"></a>
	<?php

    $debut_pic_memoire = memory_get_peak_usage();?>
	<div style=' display:table; margin-top: 25px; width:100%;'>
		
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
			/*if( ( ( ( !isset($page) || $page == 'index') && $interface < 6 ) || (isset($page) &&  $page == 'preferences') || $interface == 9 || $interface == 11 ) ){
				echo "<div class='permanent-table'>";
				$visibility = TRUE;
				if( (isset($page) && $page == 'preferences' ) && ( $interface != 9 && $interface != 11 ) ){
						$visibility = FALSE;
					}
				echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
				AfficheGueuloir($visibility,'gauche');
				echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"	
						."</div>";
			}

			if( ( !isset($page) || $page == 'index' || $interface == 9 || $interface == 11  )|| ($page == 'preferences' && ($interface == 9 || $interface == 11) ) ){
				$notAtable = FALSE;
			}else{
				$notAtable = TRUE;
			}*/
			
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
			echo "</div>";
			
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
	
	</div>
	
	<br /><br /><br /><br /><br />
	
	<?php
        
	   AfficheExplications($page);

	   AfficheFooter_V1();

	   $fin_pic_memoire = memory_get_peak_usage();
	   include dirname(__FILE__) . '/plancher/footer_informational.phtml';
	   
	?>
</div>