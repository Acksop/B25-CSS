<?php

require dirname(__FILE__) . "/../localisation_Domaines_externes_B25.php";

define('SCRIPTPHPPATH',dirname(__FILE__) . "/scriptPHP");
include SCRIPTPHPPATH. DIRECTORY_SEPARATOR . 'cookies.php';

function AfficheSousMenu(){
echo "<ul id='sousmenu'>";
	if(!isset($_SESSION['id_utilisateur'])){
		echo "<li><a href='index.php?page=identification'>Mon Compte</a>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php?page=preferences'>Mes Pr&eacute;f&eacute;rences d'affichage(s)</a></li>";
	}else{
		echo "<li>Bonjour <a href='index.php?page=compte'>".$_SESSION['identifiant']."</a>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php?page=preferences'>Mes Pr&eacute;f&eacute;rences d'affichage(s)</a>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;<a href='controlleurs/traitementDeconnexion.php'>Se D&eacute;connecter</a></li>";
	}
	return;
}

function AfficheIcone(){
echo "<script type='text/javascript' language='javascript'>\n"
		."

		
		btn_logoNET_gauche = new Image();
		btn_logoNET_gauche = 'images/besancon25.net_gauche.png';
		btn_logoNET_droite = new Image();
		btn_logoNET_droite = 'images/besancon25.net_droite.png';
		btn_logoCOM_gauche = new Image();
		btn_logoCOM_gauche = 'images/besancon25.com_gauche.png';
		btn_logoCOM_droite = new Image();
		btn_logoCOM_droite = 'images/besancon25.com_droite.png';
		btn_logoFR_gauche = new Image();
		btn_logoFR_gauche = 'images/besancon25.fr_gauche.png';
		btn_logoFR_droite = new Image();
		btn_logoFR_droite = 'images/besancon25.fr_droite.png';
		
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

		</script>\n";
echo "<div class='logoMenu'>";
echo "\n	<center>"
	."\n		";
echo '<img style="cursor: pointer;" border="0" id="logo_gauche" height="400px" width="140" src="images/besancon25.fr_gauche.png" onMouseOver="survolCOM(true)" onMouseOut="survolCOM(false)" onClick="javascript:window.location.href=';
echo "'".PAGEB25COM."';";
echo '" >';
echo '<img style="cursor: pointer;" border="0" id="logo_droite" height="400px" width="140" src="images/besancon25.fr_droite.png" onMouseOver="survolNET(true)" onMouseOut="survolNET(false)" onClick="javascript:window.location.href=';
echo "'".PAGEB25NET."';";
echo '" >';
echo "\n	</center>";
echo "\n</div>";
return;
}

function AfficheMenu(){
AfficheIcone();
echo "\n<div class='boutonsMenu'>";
echo "\n	<ul id='menu'>";


if( !isset($_GET['page'])  || ($_GET['page'] === "accueil" ) ){
	echo "\n		<li><a href='http://wikini.besancon25.fr' >Informations Compl&eacute;mentaires <img src='images/aide_B25.gif' alt='Wikini explicatifs des tenants et aboutissants de la plate-forme (en stade de compl&eacute;ment incomplet.)' /></a></li>";
}else{
	echo "\n		<li><a href='index.php?page=accueil' >Accueil</a></li>";
}

echo "\n		<li><a href='index.php?page=artistes' >Artistes et Artisans</a></li>"
	."\n		<li><a href='index.php?page=associations' >Associations et Groupes</a></li>";

if(isset($_SESSION['type_compte'])){
	echo "\n		<li><a href='index.php?page=articles' >Articles</a></li>";
}

echo "\n		<li><a href='index.php?page=dossiers' >Dossiers</a></li>"
	."\n	</ul>";
echo "\n</div>";
	return;
}

function PositionneCSS(){
echo "<link type='text/css' rel='stylesheet' href='stylesCSS/baseCorps.css'>";
echo "<link type='text/css' rel='stylesheet' href='stylesCSS/baseMenus.css'>";
echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface03.css'>";
echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture03.css'>";
echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie01.css'>";
echo "<script type='text/javascript' src='scriptJS/live.js'></script>";
echo "<script type='text/javascript' src='scriptJS/changerCSS.js'></script>";
return;
}

function AffichePage($page){
	
	//chargement de la fonction d'affichage
	if( $page !== "index" && $page !== "accueil" ){
		LancerAffichageDuCorps();
    }else{
		AfficheIndex();
	}
	return;
}
function ChargerVariablesInitialesHeader($page){
	//initialisation
	global $header_title,$header_description,$header_identifier_url,$header_keywords;
	$header_title = "Besan&ccedil;on 25 - La plate-Forme des artistes/Artisans et des groupes/Associations de Besan&ccedil;on - v3.0c - &#948; version";
	$header_description = "Site communautaire pour les artistes/Artisans et les Groupes/Associations de Besan&ccedil;on";
	$header_identifier_url = "besancon25.fr";
	$header_keywords = "Journal, Doubs, Besan&ccedil;on, Besancon, 25000, 25, artiste, artistes, artisant, artisants, association, associations, article, articles, dossier, dossiers, arts, art";
	return;
}

function ChargerModeleEtFonctionsDeLaPage($page){
	//chargement du modele contenant la fonction d'affichage
	if(isset($page)){
		if( file_exists('modeles/accesseurs/'.$page.'.accesseur.php')){
    		include 'modeles/accesseurs/'.$page.'.accesseur.php';
    	}
    	if( file_exists('modeles/vues/'.$page.'.php')){
    		include 'modeles/vues/'.$page.'.php';
    }
	}
	return;
}
function ConvertirVariablesHeader($page){
	global $header_title,$header_description,$header_identifier_url,$header_keywords;
	$header_title = html_entity_decode(str_replace("&apos;","'",$header_title),ENT_QUOTES,"ISO-8859-15");
	$header_description = html_entity_decode(str_replace("&apos;","'",$header_description),ENT_QUOTES,"ISO-8859-15");
	$header_identifier_url = html_entity_decode(str_replace("&apos;","'",$header_identifier_url),ENT_QUOTES,"ISO-8859-15");
	$header_keywords = html_entity_decode(str_replace("&apos;","'",$header_keywords),ENT_QUOTES,"ISO-8859-15");
	return;
}


function AfficheIndex(){
	echo "<table border='0' align='center'>"
	."<tr>"
	."<td valign='top' align='center' class='article' >"
	."<img src='images/articles/souveraines.jpg' width='200px' height='500px'>"
	."<p align='left' class='titre'>BESANCON 25 </br>&nbsp;&nbsp;&nbsp;- le Ya-Ka-F&ocirc;-Kon</p>"
	."<p align='center' class='article'></p><hr/><p align='center' class='article'>Cette Plate-Forme d'annuaire s'adresse &agrave; tous les artistes et associations en mal de devenir ...</br>&Agrave; toutes celles et ceux qui se battent pour se faire conna&icirc;tre et reconna&icirc;tre au sein de Besan&ccedil;on</br>Ici il y a la possiblit&eacute; de se faire appeler pour peu que l'on veuille bien <a href='index.php?page=inscription'>s'incrire</a>.</br>Car si certains peuvent essayer de passer par le systeme du bouche &agrave; oreille, il est quelques-fois plus simple de laisser des coordonn&eacute;es au milieu de toutes les autres, car cela permet de tisser des liens que l'on aurait p&ucirc; peu imaginer.</br>Il ne reste plus qu'alors &agrave; attendre que le bouleversement des mentalit&eacute;s s'op&egrave;re et qu'il devienne un effet boule de neige pour ceux qui auront bien voulu croire en ce site.</br></p>"
	."<p align='right' class='date'>le 21/06/2010</p>"
	."<p align='right' class='post'>l'Administrateur</p>"
	."</td>"
	."<td>&nbsp;&nbsp;</td>"
	."<td valign='top' align='center' class='article' >"
	."<img src='images/articles/attentives.jpg' width='200px' height='500px'>"
	."<p align='left' class='titre'>BESANCON 25 </br>&nbsp;&nbsp;&nbsp;- le Pourquoi du Comment ?!?</p>"
	."<p align='center' class='article'></p><hr/><p align='center' class='article'><b>Pourquoi avoir fait cet annuaire ?</b></br>La premi&egrave;re et la moins couteuse de toutes les communications provient du web d'internet car la culture du libre et du gratuit y est incrite toujours dans les plus charmantes m&eacute;moires de nos programmeurs. Aujourd'hui tout coute le moindre euros que la plupart des artistes n'ont la possibilit&eacute; de payer pour une communication qui ne leurs semblent pas famili&egrave;re ou n&eacute;cessaire. Cet annuaire est gratuit pour tous et toutes qui veulent avoir une place sur ce site.</br><b>Comment participer ?</b></br>Il suffit de s'incrire via le bouton <a href='index.php?page=inscription'>Mon Compte</a> en haut du site puis de remplir vos noms, prenoms, pseudos, num&eacute;ro de t&eacute;l&eacute;phone, et adresse de courriel ainsi que la description de votre art pr&eacute;f&eacute;r&eacute; pour pourvoir appara&icirc;tre sur ce site. Attention tout compte mal-rempli ne sera pas valid&eacute; par l'administrateur...</br></p>"
	."<p align='right' class='date'>le 30/06/2010</p>"
	."<p align='right' class='post'>l'Administrateur</p>"
	."</td><td bgcolor='#CCCCCC' valign='top'>&nbsp;&nbsp;<img src='images/dernierArticleParu.gif'/></td>"
	."<td>";
	echo "</td></tr>"
	."</table>";
}
