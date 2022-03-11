<?php

	$couleur = recuperationCouleurInterface();
	//echo $couleur;
	$tabCouleur = array("#663333","#FE642E","#B45F04","#FFBF00","#F3F781","#4B610B"
										,"#5FB404","#31B404","#81F79F","#088A4B","#00FFBF","#58FAF4"
										,"#01A9DB","#81BEF7","#013ADF","#0B0B61","#8258FA","#4B088A"
										,"#D358F7","#8A0886","#FA58D0","#F5A9E1","#B40431","#FFFFFF","#CCCCCC","#000000");


	echo "<div id='en-tete' class='entete' style='background-color:".$tabCouleur[$couleur]."'>";
    /**Bandeau UKRAINE-RUSSIE GUERRE 2022*/
    //echo "<div class='bandeau-guerre-2022' style='position: absolute; display: block; z-index: 0; witdh: 100%; right: 0px; top: 0px;'><img alt='bandeau guerre ukraine' src='/images/Hors-serie/calque-ukraine-2022.png' width='100%'/></div>";
    /**FIN Bandeau UKRAINE-RUSSIE GUERRE 2022*/
	AfficheIcone();
	echo "</div>";
    AfficheHrSandBoxLimiteur();
	echo "<div id='menu' class='menu' style='height:auto;'>";
    AfficheMenu();
	echo "</div>";
    echo "<div id='sous-menu' class='sousmenu'>";
	AfficheSousMenu();
	echo "</div>";
	
if(isset($_COOKIE['fondIHM'])){
	switch( $_COOKIE['fondIHM'] ){
		case 0:
			echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd - demon0.png' width='1024' height='768' /></div>";
		break;
		case 1:
			echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd - demon1.png' width='1024' height='768' /></div>";
		break;
		case 2:
			echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd - demon2.png' width='1024' height='768' /></div>";
		break;
		case 3:
			echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd - demon3.png' width='1024' height='768' /></div>";
		break;
        case 4:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon4.png' width='1024' height='768' /></div>";
            break;
		default:
			echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
	}
}else{
	echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
}



function AfficheMenu(){

	echo "\n<div id='nav' class='boutonsMenu'>";
	echo "\n	<ul class='menu'>";

	if( !isset($_GET['page'])  || ($_GET['page'] === "index" ) ){
		echo "\n		<li><a href='".PAGEB25WIKINI."' >Informations Compl&eacute;mentaires <img src='images/aide_B25.gif' alt='Wikini explicatifs des tenants et aboutissants de la plate-forme (en stade de compl&eacute;ment incomplet.)' /></a></li>";
	}else{
		echo "\n		<li><a href='".link_rewrite('index')."' >Accueil</a></li>";
	}
        echo "\n		<li><a href='".link_rewrite('nouveaux')."' >Index des nouveaux</a></li>";
                echo "\n		<li><a href='".link_rewrite('artistes')."' >Artistes et Artisans</a></li>";
                echo "\n		<li><a href='".link_rewrite('associations')."' >Associations et Groupes</a></li>";
                echo "\n		<li><a href='".link_rewrite('sportifs')."' >Sportifs et Collectifs</a></li>";
                echo "\n		<li><a href='".link_rewrite('compagnies')."' >Compagnies et Maisons collectives</a></li>";
		echo "\n		<li><a href='".link_rewrite('Breves')."' >Brèves</a></li>";
	echo "\n		<li><a href='".link_rewrite('actualDossier')."' >Dossiers</a></li>";
	
	echo "\n	</ul>"
			."\n</div>\n";

	return;
}

function AfficheSousMenu(){
	$mobile = detection_mobile();
	echo "<ul id='sousmenu'>";
	if(!isset($_SESSION['id_utilisateur'])){
	    
		echo "<li>
		   <div id='compte_btn'>
		      <a href='".link_rewrite('identification')."'>Se Connecter</a>
		      <span onclick='quietVerbose(this.parentNode);'>///</span>
		      <a href='".link_rewrite('inscription')."'>S'incrire</a>
		   </div> 
		    
		    <!---<div href='#' class='infobulle'>
		              <div id='aep' name='compte_btn' class='aep'>
		                 <span onclick='quietVerbose(this.parentNode);'>Mon</span> <a href='".link_rewrite('inscription')."'>Compte</a>
		              </div>
                        <span class='txt_infobulle'>
                        <b class='ico_infobulle'></b>
                            Ce bouton, n'est pas comme les autres, il permet:
                            <ol>
                              <li><b>de trouver</b> la page/écran permettant de <a href='".link_rewrite('inscription')."'><i>s'incrire</i></a> sur la plate-forme</li>
                              <li><b>d'accéder</b> à la page/écran <a href='".link_rewrite('identification')."'><i>pour se connecter</i></a> à la plate-forme</li>
                              <li><b>d'accéder</b> aux <i>paramètres de gestion</i> de son compte lorsque l'on est connecté sur'l'B25</li>
                            </ol>
                            <br />
                            ( C'est un bouton multi-fonction, comme ceux des souris !)
                       </span>
            </div>-->";
				if( !$mobile ){
				echo "&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;"
						."<a href='".link_rewrite('preferences')."'>Mes Pr&eacute;f&eacute;rences d'affichage(s)</a>";
				}
		echo "</li>";
	}else{
		echo "<li>Bonjour <a href='index.php?page=compte'>".$_SESSION['identifiant']."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
				if( !$mobile ){
				echo "//&nbsp;&nbsp;&nbsp;&nbsp;"
						."<a href='".link_rewrite('preferences')."'>Mes Pr&eacute;f&eacute;rences d'affichage(s)</a>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;<a href='".link_rewrite('traitementDeconnexion',true)."'>Se D&eacute;connecter</a>";
				}
				echo "</li>";
	}
	if( !$mobile ){
		echo 	"<li><a id=\"signalement\"><img alt='bouton de signalement' src='/images/btn_signalement.png' width='16' height='16'></a><a href='".link_rewrite('FluxRSS',false,"",array('flux'=>'RSS'))."'><img alt='accès flux rss' src='/images/feed-icon-16x16.png'></a>&nbsp;&nbsp;<span id='HeureDate'>".AfficheDate()."</span>";
    }

    include dirname(__DIR__) . '/add-ons/translation_internationale.phtml';

    include dirname(__DIR__) . '/add-ons/socials_tracers.phtml';

    echo "</li>";
	
	echo "</ul>";
	return;
}

function AfficheIcone(){
echo <<<EOF
		
		<script type='text/javascript' language='javascript'>
		
		btn_logoNET_gauche = new Image();
		btn_logoNET_gauche = '/images/besancon25.net_gauche.png';
		btn_logoNET_droite = new Image();
		btn_logoNET_droite = '/images/besancon25.net_droite.png';
		btn_logoCOM_gauche = new Image();
		btn_logoCOM_gauche = '/images/besancon25.com_gauche.png';
		btn_logoCOM_droite = new Image();
		btn_logoCOM_droite = '/images/besancon25.com_droite.png';
		btn_logoFR_gauche = new Image();
		btn_logoFR_gauche = '/images/besancon25.fr_gauche.png';
		btn_logoFR_droite = new Image();
		btn_logoFR_droite = '/images/besancon25.fr_droite.png';
		
		function survolCOM( comment ){
			//alert('ok!');
			var gauche = selectionnerDIVimage('logo_gauche');
			var droite = selectionnerDIVimage('logo_droite');
		
			if( comment ){
				gauche.src=btn_logoCOM_gauche;
				droite.src=btn_logoCOM_droite;
			}else{
				gauche.src=btn_logoFR_gauche;
				droite.src=btn_logoFR_droite;
			}
			return;
		}
		
		function survolNET( comment ){
			//alert('ok!');
			var gauche = selectionnerDIVimage('logo_gauche');
			var droite = selectionnerDIVimage('logo_droite');
		
			if( comment ){
				gauche.src=btn_logoNET_gauche;
				droite.src=btn_logoNET_droite;
			}else{
				gauche.src=btn_logoFR_gauche;
				droite.src=btn_logoFR_droite;
			}
			return;
		}
		
		function selectionnerDIVimage(elem){
			if ( document.getElementById && document.getElementById( elem ) ){
				 Pdiv = document.getElementById( elem );
			}
			    // Pour les veilles versions
			else if ( document.all && document.all[ elem ] ){
				Pdiv = document.all[ elem ];
			}
			    // Pour les trés veilles versions
			else if ( document.layers && document.layers[ elem ] ){
				Pdiv = document.layers[ elem ];
			}
			else{
				return false;
			}
			return Pdiv;
		}

		</script>
		
EOF;
		
echo "<div class='logoMenu'>";
echo "\n	<center>"
	."\n		";
echo '<img style="cursor: pointer;" border="0" id="logo_gauche" height="400px" width="140" alt="logo de gauche pour aller sur le .com" src="/images/besancon25.fr_gauche.png" onMouseOver="survolCOM(true)" onMouseOut="survolCOM(false)" onClick="javascript:window.location.href=';
echo "'".PAGEB25COM."';";
echo '" >';
echo '<img style="cursor: pointer;" border="0" id="logo_droite" height="400px" width="140" alt="logo de droite pour aller sur le .net" src="/images/besancon25.fr_droite.png" onMouseOver="survolNET(true)" onMouseOut="survolNET(false)" onClick="javascript:window.location.href=';
echo "'".PAGEB25NET."';";
echo '" >';
echo "\n	</center>";
echo "\n</div>";
return;
}

