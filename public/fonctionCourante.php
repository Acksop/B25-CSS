<?php

require dirname(__FILE__) . "/../localisation_Domaines_externes_B25.php";

define('SCRIPTPHP_PATH',dirname(__FILE__) . "/scriptPHP");
define('PUBLIC_PATH',dirname(__FILE__));

include SCRIPTPHP_PATH. DIRECTORY_SEPARATOR . 'cookies.php';
include SCRIPTPHP_PATH. DIRECTORY_SEPARATOR . 'mobile.php';

function AfficheHrSandBoxLimiteur()
{
    $couleur = recuperationCouleurInterface();
//echo $couleur;
    $tabCouleur = array("#663333", "#FE642E", "#B45F04", "#FFBF00", "#F3F781", "#4B610B"
    , "#5FB404", "#31B404", "#81F79F", "#088A4B", "#00FFBF", "#58FAF4"
    , "#01A9DB", "#81BEF7", "#013ADF", "#0B0B61", "#8258FA", "#4B088A"
    , "#D358F7", "#8A0886", "#FA58D0", "#F5A9E1", "#B40431", "#FFFFFF", "#CCCCCC", "#000000");

    echo "<div id='limiteur' class='limiteur'>";
    //echo $version;
    $interface = recuperationCookieVersionInterface();
    if ($interface == 2) {
        if ($_GET['page'] == "preferences" || recuperationCookieInterface() > 9) {
            if (isset($_COOKIE['statusMenu'])) {
                $status_menu = $_COOKIE['statusMenu'];
            } else {
                $status_menu = 0;
            }
            echo "<img id='btn_empilerMenu' src='/images/menu_empiler.png' onclick=";
            echo '"javascript:empilerMenu()"';
            echo "style='position:relative; display:block; top:15px; left:5px; ";
            if ($interface > 10 || $status_menu == 1) {
                echo " display:none;'";
            } else {
                echo "'";
            }
            echo " width='25' height='25' alt='boutons permettant de cacher le haut de page'>";
            echo "<img id='btn_depilerMenu' src='/images/menu_depiler.png' onclick=";
            echo '"javascript:depilerMenu()" ';
            echo "style='position:relative; display:block; top:15px; left:5px;";
            if ($interface > 10 || $status_menu == 0) {
                echo "  display:none;'";
            } else {
                echo "'";
            }
            echo " width='25' height='25' alt='boutons permettant de faire apparaitre le haut de page'></div>";
        }
    }
    echo "<div style='background-color:{$tabCouleur[(($couleur)%28)]}' class='limiteur mini-limiteur' ></div>";
    echo "</div>";

}


function AfficheExplications($page = "index")
{
    $flag = FALSE;
    if (isset($page)) {
        if ($page == "index") {
            $flag = TRUE;
        }
    } else {
        $flag = TRUE;
    }
    if ($flag) {
        echo <<<EOD
<style>
.table-explication{
display:table;column-count:2;width:100%; background-image:url('/images/background_simple-1.png');margin-bottom:50px;
}
.cell-explication{
display:table-cell;padding:30px;width:45%;
}
.p-explication-titre{
font-variant:small-caps;font-size:large;text-align:right;
}
.p-explication-corps{
text-align:justify;font-size:small;
}
@media ( max-width:850px ) {
    .table-explication{
        padding: 1rem;
    }
    .cell-explication{
        display:block;
        width:100%;
    }
</style>
EOD;


        echo "<div class='table-explication'>"
            . "<section class='cell-explication'><p class='p-explication-titre'><b>BESANCON 25&nbsp;&nbsp;&nbsp;- le Ya-Ka-F&ocirc;-Kon</b></p>"
            . "<hr /><p class='p-explication-corps'>Cette Plate-Forme d'annuaire collaboratif s'adresse &agrave; tous les artistes et associations en mal de devenir ...<br />&Agrave; toutes celles et ceux qui se battent pour se faire conna&icirc;tre ou reconna&icirc;tre au sein de Besan&ccedil;on<br />Ici il y a la possiblit&eacute; de laisser un contact permettant de se faire appeler pour peu que l'on veuille bien <a href='index.php?page=inscription'>s'incrire</a>.<br />Car si certains peuvent essayer de passer par le systeme du bouche &agrave; oreille, il est quelques-fois plus simple de laisser des coordonn&eacute;es au milieu de toutes les autres, car cela permet de tisser des liens que l'on aurait p&ucirc; peu imaginer.<br />Il ne reste plus qu'alors &agrave; attendre que le bouleversement des mentalit&eacute;s s'op&egrave;re et qu'il devienne un effet boule de neige pour ceux qui auront bien voulu croire aux possibles donn&eacute;s par ces pages.<br /></p>"
            . "</section>"
            . "<section class='cell-explication'><p class='p-explication-titre'><b>BESANCON 25&nbsp;&nbsp;&nbsp;- le Pourquoi du Comment ?!?</b></p>"
            . "<hr /><p class='p-explication-corps'><span style='display:block;text-align:center;'><i>Pourquoi avoir fait cet annuaire ?</i></span>La premi&egrave;re et la moins couteuse de toutes les communications provient du web car, sur Internet, la culture du libre et du gratuit y est incrite depuis toujours dans les plus anciennes et charmantes m&eacute;moires de nos programmeurs. Aujourd'hui tout coute le moindre &euro;uros que la plupart des artistes n'ont la possibilit&eacute; de payer pour une communication qui ne leurs semblent pas famili&egrave;re ou n&eacute;cessaire. Cet annuaire est un lien gratuit pour toutes et ceux qui veulent avoir une place sur ce site.<br /><br /><span style='display:block;text-align:center;'><i>Comment participer ?</i></span>Il suffit de s'incrire via le bouton <a href='index.php?page=inscription'>Mon Compte</a> en haut du site puis de remplir vos noms, prenoms, pseudos, num&eacute;ro de t&eacute;l&eacute;phone, et adresse de courriel ainsi que la description de votre art pr&eacute;f&eacute;r&eacute; pour pourvoir appara&icirc;tre sur ce site. Attention tout compte mal-rempli ne sera pas valid&eacute; par l'administrateur...<br /></p>"
            . "</section>" . "</div>";
    }
    return;
}

function AfficheLandingPage()
{

    $linkInscription = \B25\Classe\Url::link_rewrite('inscription');

    echo <<<EOD
		<div style="background-image:url('/images/background_simple-1.png');padding-bottom:25px;margin-bottom:50px;width:100%;">
		     <!-- Image Section - set the background image for the header in the line below -->
	    <div style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
		&nbsp;
		<div style='transform: rotate(-2deg);visibility: visible; position:relative; top: -45px;left:-10px;' ><section class="bg-image-full" style="background-image: url('/images/landingPage/b25_1.png');">
	      <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">-->
	      <div style="height: 200px; transform: rotate(-2deg);"></div>
	    </section></div>
		&nbsp;
	</div>
	    <!-- Content section -->
	    <section>
	      <div class="container" style='text-align:center;display:block;margin:auto;width:75%;'>
		<h1 style='font-variant:small-caps;font-size:large;'>Qu’es-ce que le (B25) ?</h1>
		<h5 style='font-size:small;'>Besancon25 est un annuaire pour les artisans, artistes, sportifs, associations, collectifs et groupes musicaux de Besançon, il permet à ceux ci d'apparaître dans une liste simple et accessible afin d'avoir une page personnelle entièrement configurable.
		<br />
		Cette plate-forme a été créée dans le but de simplifier le Média de masse qu'est Internet.</h5>
		<br />
		<a href="$linkInscription" class="button">Je veux participer !</a>
		<br /><br />
	      </div>
	    </section>

	     <!-- Image Section - set the background image for the header in the line below -->
	    <div style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
		&nbsp;
		<div style='transform: rotate(-2deg);visibility: visible; position:relative; top: -45px;left:-10px;' ><section class="bg-image-full" style="background-image: url('/images/landingPage/b25_2.png');">
	      <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">-->
	      <div style="height: 200px; transform: rotate(-2deg);"></div>
	    </section></div>
		&nbsp;
	</div>
	    <!-- Content section -->
	    <section>
	      <div class="container" style='text-align:center;display:block;margin:auto;width:75%;'>
		<h1 style='font-variant:small-caps;font-size:large;'>Pourquoi s’inscrire sur le (B25) ?</h1>
		<h5 style='font-size:small;'>Cette plate-forme permet d’avoir un compte paramètrable pour le référencement de votre activité sur Internet. Elle permet d’afficher sa page sur une liste et cela permet d’être plus visible auprès des internautes de la communauté Bisontine et de la région. Un site comme celui-là permet de trouver un artiste ou artisan, un groupe musical ou une association plus facilement sur Internet.</h5>
		<a href="$linkInscription" class="button">Je veux participer !</a>
		<br /><br />
	      </div>
	    </section>
	    
	     <!-- Image Section - set the background image for the header in the line below -->
	    <div style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
		&nbsp;
		<div style='transform: rotate(-2deg);visibility: visible; position:relative; top: -45px;left:-10px;' ><section class="bg-image-full" style="background-image: url('/images/landingPage/b25_3.png');">
	      <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">-->
	      <div style="height: 200px; transform: rotate(-2deg);"></div>
	    </section></div>
		&nbsp;
	</div>

	    <!-- Content section -->
	    <section>
	      <div class="container" style='text-align:center;display:block;margin:auto;width:75%;'>
		<h1 style='font-variant:small-caps;font-size:large;'>Quel est le bénéfice ?</h1>
		<h5 style='font-size:small;'>Le (B25) essaye d’être le plus respectueux possible envers ses utilisateurs, c’est pourquoi aucun accord commercial sur l’utilisation des informations entrées par ses utilisateurs ne sera conclu. De plus cette Plate-Forme respecte intégralement le droit inaliénable de l'auteur et surtout se veut de militer contre l'appropriation de son propre travail par un autre. Pour cela, La plate-forme propose la mise en place d'une maison de Droit Commun aux Utilisateurs d'Internet respectant les règles de la Convention Informatique et Liberté, ainsi que la mise en place d'un sous-domaine internet acceuillant tous les upload-utilisateurs de Besancon25 sous la forme <a href='https://radieurae.xn--besanon25-u3a.fr'>RADIEURAE</a>. Il faut savoir qu'une information pertinente sur votre activité vous attend sur la partie privée de la plate-forme.</h5>
		<a href="$linkInscription" class="button">Je veux participer !</a>
		<br /><br />
	      </div>
	    </section>
	    
	     <!-- Image Section - set the background image for the header in the line below -->
	    <div style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
		&nbsp;
		<div style='transform: rotate(-2deg);visibility: visible; position:relative; top: -45px;left:-10px;' ><section class="bg-image-full" style="background-image: url('/images/landingPage/b25_6.png');">
	      <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">-->
	      <div style="height: 200px; transform: rotate(-2deg);"></div>
	    </section></div>
		&nbsp;
	</div>
	    <!-- Content section -->
	    <section>
	      <div class="container" style='text-align:center;display:block;margin:auto;width:75%;'>
		<h1 style='font-variant:small-caps;font-size:large;'>Que permettent les pages personnelles ?</h1>
		<h5 style='font-size:small;'>Chaque type de compte est différent et donc chaque compte possède différentes actions paramétrables sur la plate-forme. Les artistes, sportifs et collectifs ont une sorte de mur affichable sous deux formes différentes. Les associations ont la possibilité de se présenter et de mettre des liens de curations, les artisans peuvent présenter leurs créations et leur donner un prix tout en continuant leurs activités. Les sportifs peuvent présenter leurs résultats ainsi que leurs différentes activités. Les groupes musicaux peuvent ajouter de courts extraits de leurs morceaux classés par album et date de parution. L’idée principale est de se présenter sur Internet afin que tout internaute-visiteur de la plate-forme ait un apercu de ce qui se fait au sein de la communauté bisontine.</h5>
		<a href="$linkInscription" class="button">Je veux participer !</a>
		<br /><br />
	      </div>
	    </section>
	    
	     <!-- Image Section - set the background image for the header in the line below -->
	    <div style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
		&nbsp;
		<div style='transform: rotate(-2deg);visibility: visible; position:relative; top: -45px;left:-10px;' ><section class="bg-image-full" style="background-image: url('/images/landingPage/b25_5.png');">
	      <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">-->
	      <div style="height: 200px; transform: rotate(-2deg);"></div>
	    </section></div>
		&nbsp;
	</div>
	    <!-- Content section -->
	    <section>
	      <div class="container" style='text-align:center;display:block;margin:auto;width:75%;'>
		<h1 style='font-variant:small-caps;font-size:large;'>Quel est le plus ?</h1>
		<h5 style='font-size:small;'>La plate-forme du B25 s’articule autour de 5 noms de domaines.</h5>
		<!--<ul>
		<li>d'une page de petite annonces sur http://besancon25.com</li>
		<li>d'une page d'évènements sur http://besancon25.net</li>
		<li>d'une page d'informations sur http://besancon25.info</li>
		<li>d'une page de publicité sur http://besancon25.biz</li>
		<li>d’un wikini explicatif sur http://wikini.xn--besanon25-u3a.fr</li>
		<li>de la plate-forme mère sur https://xn--besanon25-u3a.fr</li>
		</ul>-->
		<h5>Cela permet de mieux identifier les activités de chacune des pages et d’avoir un accès direct à l’information que l’on recherche, simplement et rapidement.</h5>
		<br /><br /><br />
		<a href="$linkInscription" class="button">Je veux participer !</a>
		<br /><br /><br /><br />
	      </div>
	    </section>
 	   </div>
EOD;
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



function link_rewrite($page = '', $isControlPatern = false, $controlPaternType = '', $params = array())
{
	if ($isControlPatern) {
		return controlLink_rewrite($page, $controlPaternType, $params);
	} else {
		return link_rewrite_slashParam($page, $params);
	}
}

function link_rewrite_slashParam($page, $params = array())
{
	$stringParams = '';
	foreach ($params as $key => $values) {
		$stringParams .= "&" . $key . "=" . $values;
	}
	if ($page == "index") {
		$stringParams = substr($stringParams, 1);
		return '/index.php?' . $stringParams;
	} else {
		return '/index.php?page=' . $page . $stringParams;
	}
}

function controlLink_rewrite($page, $controlPaternType = '', $params = array())
{
	$stringParams = '';
	foreach ($params as $key => $values) {
		$stringParams .= "&" . $key . "=" . $values;
	}
	$stringParams = substr($stringParams,1);
	if(strlen($stringParams)>0) {
		$stringParams = '?' . $stringParams;
	}
	
	return '/' . 'controlleurs' . $controlPaternType . '/' . $page . ".php" . $stringParams;
}

function AfficheIndex(){
}
