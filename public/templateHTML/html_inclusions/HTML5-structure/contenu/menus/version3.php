<?php

$couleur = recuperationCouleurInterface();
//echo $couleur;
$tabCouleur = array("#663333","#FE642E","#B45F04","#FFBF00","#F3F781","#4B610B"
										,"#5FB404","#31B404","#81F79F","#088A4B","#00FFBF","#58FAF4"
										,"#01A9DB","#81BEF7","#013ADF","#0B0B61","#8258FA","#4B088A"
										,"#D358F7","#8A0886","#FA58D0","#F5A9E1","#B40431","#FFFFFF","#CCCCCC","#000000");

echo "<header id='en-tete' style='background-color:".$tabCouleur[$couleur]."' >";

/**Bandeau UKRAINE-RUSSIE GUERRE 2022*/
//echo "<div class='bandeau-guerre-2022' style='position: absolute; display: block; z-index: 3; witdh: 100%; right: -680px; top: 130px;'><img alt='bandeau guerre ukraine' src='/images/Hors-serie/calque-ukraine-2022_1.png' width='50%'/></div>";
/**FIN Bandeau UKRAINE-RUSSIE GUERRE 2022*/

AfficheIcone();
echo "</header>";
if(isset($_COOKIE['fondIHM'])){
    switch( $_COOKIE['fondIHM'] ){
        case 0:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon0.png' width='1024' height='768' /></div>";
            break;
        case 1:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon1.png' width='1024' height='768' /></div>";
            break;
        case 2:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon2.png' width='1024' height='768' /></div>";
            break;
        case 3:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon3.png' width='1024' height='768' /></div>";
            break;
        case 4:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon4.png' width='1024' height='768' /></div>";
            break;
        default:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
    }
}else{
    echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
}
AfficheHrSandBoxLimiteur();
AfficheMenuV3();
AfficheSousMenuV3();






function AfficheMenuV3(){
echo "\n<div id='nav' class='boutonsMenu'>";
echo "\n	<ul class='menu'>";
if( !isset($_GET['page'])  || ($_GET['page'] === "index" ) ){
	echo "\n		<li>"
	."\n			<a href='".PAGEB25WIKINI."' >"
	."\n				<span class='menu-icone'><i class=\"fas fa-question-circle\"></i></span>"
	."\n				<div class='menu-contenu' >"
	."\n					<span class='h2-menu menu-titre'>Informations / Aide</span>"
	."\n					<span class='h3-menu menu-description'>Wikini explicatif de la plate-forme...</span>"
	."\n				</div>"
	."\n			</a>"
	."\n		</li>";

	}else{

	echo "\n		<li>"
	."\n			<a href='/index.php?page=index' >"
	."\n				<span class='menu-icone'><i class=\"fas fa-home\"></i></span>"
	."\n				<div class='menu-contenu' >"
	."\n					<span class='h2-menu menu-titre'>Accueil</span>"
	."\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la 'HomePage'</span>"
	."\n				</div>"
	."\n			</a>"
	."\n		</li>";
	
	}
        //Liste des nouveaux
        echo "\n		<li class='private-menu'>"
            . "\n			<a href='/index.php?page=nouveaux' >"
            . "\n				<span class='menu-icone'><i class=\"fas fa-project-diagram\"></i></span>"
            . "\n				<div class='menu-contenu' >"
            . "\n					<span class='h2-menu menu-titre'>Index des Nouveaux</span>"
            . "\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la liste (privée aux inscrits) et aux pages perso</span>"
            . "\n				</div>"
            . "\n			</a>"
            . "\n		</li>";
            //Adhésion
            echo "\n		<li class='private-menu'>"
                . "\n			<a class='submodal-570-500' href='/controlleursMODAL/adhesionPlateForme.paypal.html' >"
                . "\n				<span class='menu-icone'><i class='fas fa-credit-card'></i></span>"
                . "\n				<div class='menu-contenu' >"
                . "\n					<span class='h2-menu menu-titre'>Adhérer à la plate-forme du B25</span>"
                . "\n					<span class='h3-menu menu-description'>Prix Libre</span>"
                . "\n				</div>"
                . "\n			</a>"
                . "\n		</li>";
	            //B25_ADMIN
	            echo "\n		<li>"
                	."\n			<a href='".link_rewrite('artistes')."' >"
                	."\n				<span class='menu-icone'><i class=\"fas fa-user\"></i></span>"
                	."\n				<div class='menu-contenu' >"
                	."\n					<span class='h2-menu menu-titre'>Artistes et Artisans</span>"
                	."\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la liste et aux pages perso</span>"
                	."\n				</div>"
                	."\n			</a>"
                	."\n		</li>"
                	."\n		<li>"
	                ."\n			<a href='".link_rewrite('associations')."' >"
	                ."\n				<span class='menu-icone' ><i class=\"fas fa-users\"></i></span>"
	                ."\n				<div class='menu-contenu'>"
	                ."\n					<span class='h2-menu menu-titre'>Associations et Groupes</span>"
	                ."\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la liste et aux informations</span>"
	                ."\n				</div>"
	                ."\n			</a>"
	                ."\n		</li>"
                    ."\n		<li>"
                    ."\n			<a href='".link_rewrite('sportifs')."' >"
                    ."\n				<span class='menu-icone'><i class=\"fas fa-user-friends\"></i></span>"
                    ."\n				<div class='menu-contenu' >"
                    ."\n					<span class='h2-menu menu-titre'>Sportifs et Collectifs</span>"
                    ."\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la liste et aux pages perso</span>"
                    ."\n				</div>"
                    ."\n			</a>"
                    ."\n		</li>"
                    ."\n		<li>"
                    ."\n			<a href='".link_rewrite('compagnies')."' >"
                    ."\n				<span class='menu-icone'><i class=\"fas fa-house-user\"></i></i></span>"
                    ."\n				<div class='menu-contenu' >"
                    ."\n					<span class='h2-menu menu-titre'>Compagnies et Maisons collectives</span>"
                    ."\n					<span class='h3-menu menu-description'>Acc&eacute;der &agrave; la liste et aux pages perso</span>"
                    ."\n				</div>"
                    ."\n			</a>"
                    ."\n		</li>";
	echo "\n		<li>"
	."\n			<a href='".link_rewrite('Breves')."' >"
	."\n				<span class='menu-icone' ><i class=\"far fa-file-alt\"></i></span>"
	."\n				<div class='menu-contenu'>"
	."\n					<span class='h2-menu menu-titre'>Brèves</span>"
	."\n					<span class='h3-menu menu-description'>Les 4 dernières brèves du (B25)</span>"
	."\n				</div>"
	."\n			</a>"
	."\n		</li>"
	."\n		<li>"
	."\n			<a href='".link_rewrite('actualDossier')."' >"
	."\n				<span class='menu-icone' ><i class=\"fas fa-newspaper\"></i></span>"
	."\n				<div class='menu-contenu'>"
	."\n					<span class='h2-menu menu-titre'>Dossier</span>"
	."\n					<span class='h3-menu menu-description'>Le dossier actuel du (B25)</span>"
	."\n				</div>"
	."\n			</a>"
	."\n		</li>"
	."\n	</ul>";
echo "\n</div>";
	return;
}


function AfficheSousMenuV3(){
	
	$mobile = detection_mobile();
echo "\n<div id='sous-menu' class='boutonsSousmenu'>";
	echo "<ul class='sousmenu '>";
	if(!isset($_SESSION['id_utilisateur'])){
		echo "<li>"

        //."\n	<div href='#' class='sousmenu-lien1 infobulle'>"
        ."\n	<div class='sousmenu-lien1'>"
        ."\n		<span style='cursor: pointer;' class='sousmenu-icone' onclick='quietVerbose(this.nextElementSibling);'><i class=\"fas fa-sign-in-alt\"></i></span>"

		."\n      <div id='compte_btn' style='display:none;'>"
		."\n	    <span class='h2-sousmenu sousmenu-titre'>"
        ."\n             <a href='".link_rewrite('identification')."'>Mon Compte</a>"
		."\n	    </span>"
		."\n        <span class='h3-sousmenu sousmenu-description'>S'incrire ou Se connecter</span>"
		."\n	   </div>"

        ."\n		    <div id='aep' name='compte_btn' class='sousmenu-contenu'>"
        ."\n                <span class='h2-sousmenu sousmenu-titre'>"
		."\n		            <a href='".link_rewrite('identification')."'>Se Connecter</a>"
		."\n		            , "
		."\n		            <a href='".link_rewrite('inscription')."'>S'incrire</a>"
		."\n	            </span>"
        ."\n				<span class='h3-sousmenu sousmenu-description'> à votre Compte</span>"
        ."\n			</div>"
        //."\n        </a>"
        /*."\n         <span style='width:200%;' class='txt_infobulle'>
                            <b class='ico_infobulle'></b>
                            Ce bouton, n'est pas comme les autres, il permet:
                            <ol style='list-style: decimal outside none; !important'>
                              <li style='width:100%;'><b>de trouver</b> la page/écran permettant de <a href='".\B25\Classe\Url::link_rewrite('inscription')."'><i>s'incrire</i></a> sur la plate-forme</li>
                              <li style='width:100%;'><b>d'accéder</b> à la page/écran <a href='".\B25\Classe\Url::link_rewrite('identification')."'><i>pour se connecter</i></a> à la plate-forme</li>
                              <li style='width:100%;'><b>d'accéder</b> aux <i>paramètres de gestion</i> de son compte lorsque l'on est connecté sur'l'B25</li>
                            </ol>
                            <br />
                            ( C'est un bouton multi-fonction, comme ceux des souris !)
                     </span>"*/
		."\n	</div>";

		if( !$mobile ){
		//echo "\n	<span class='sousmenu-texte'>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;</span>"
		echo "\n	<div class='sousmenu-lien2'>"
		."\n	<a href='".link_rewrite('preferences')."' class='boutons'>"
		."\n		<span style='cursor: pointer;' class='sousmenu-icone' ><i class=\"fas fa-cogs\"></i></span>"
		."\n				<div class='sousmenu-contenu'>"
		."\n					<span class='h2-sousmenu sousmenu-titre'>Mes Pr&eacute;f&eacute;rences d'affichage</span>"
		."\n					<span class='h3-sousmenu sousmenu-description'>Modifier l'apparence du site</span>"
		."\n				</div>"
		."\n	</a>"
		."\n	</div>";
		}
		echo "\n </li>";
	}else{
		echo "<li>"
		."\n	<div class='sousmenu-lien1'>"
		."\n	<a href='".link_rewrite('compte')."' class='boutons'>"
		."\n		<span class='sousmenu-icone' ><i class=\"fas fa-user-astronaut\"></i></span>"
		."\n				<div class='sousmenu-contenu'>"
		."\n					<span class='h2-sousmenu sousmenu-titre'>Bonjour {$_SESSION['identifiant']}</span>"
		."\n					<span class='h3-sousmenu sousmenu-description'>Renseigner ses informations</span>"
		."\n				</div>"
		."\n	</a>"
		."\n	</div>"
		."\n	<div class='sousmenu-lien3'>"
		."\n	<a href='/index.php?page=traitementDeconnexion' class='boutons'>"
		."\n		<span class='sousmenu-icone' ><i class=\"fas fa-sign-out-alt\"></i></span>"
		."\n	</a>"
		."\n	</div>";
		if( !$mobile ){
		echo "\n	<div class='sousmenu-lien2'>"
		."\n	<a href='".link_rewrite('preferences')."' class='boutons'>"
		."\n		<span class='sousmenu-icone' ><i class=\"fas fa-cogs\"></i></span>"
		."\n				<div class='sousmenu-contenu'>"
		."\n					<span class='h2-sousmenu sousmenu-titre'>Mes Pr&eacute;f&eacute;rences d'affichage</span>"
		."\n					<span class='h3-sousmenu sousmenu-description'>Modifier l'Interface-Homme-Machine du site</span>"
		."\n				</div>"
		."\n	</a>"
		."\n	</div>";
		}
		echo "\n </li>";
	}	
	echo "<li>";
	
	if( !$mobile ){
	    echo "<span style='position:relative;left:10px;top:6px;' class='sousmenu-liensReseautage'>"
        ."<a href='/index.php?page=FluxRSS'>"
		."<img alt='accès flux rss' src='/images/feed-icon-16x16.png'>"
		."</a>";

	}

    include dirname(__DIR__) . '/add-ons/translation_internationale.phtml';

    include dirname(__DIR__) . '/add-ons/socials_tracers.phtml';

    /*if(!$mobile) {
        echo "</span>";
        echo "&nbsp;&nbsp;<span id='HeureDate' class='sousmenu-horloge'>" . AfficheDate() . "</span>";
    }*/
    echo "<span style='float:right;'><a id=\"signalement\" href='#'><img alt='bouton de signalement' src='/images/btn_signalement.png' width='16' height='16'></a></span>";

    echo "</li>"
        ."</ul>"
        ."</div>";

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
			    // Pour les tr�s veilles versions
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
