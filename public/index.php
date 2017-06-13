<?php 
include('fonctionCourante.php');
session_start();
$ip = $_SERVER['REMOTE_ADDR'];

//TODO: modifier l'instanciation de la variable page par un réécriture des liens et une traduction de l'URL
// dans cette même fonction réévaluer les variables _GET en fonction du lien de la page .
// par exemple les variable venant de CrawlTrack
// $page = Url::traductionURL();

//initialisation de la variable page pour eviter les erreurs 404
if(!isset($_GET['page'])){
	$page = "index";
}else{
	$page = $_GET['page'];
}
//chargement des variables pour un meilleur réferencement
ChargerVariablesInitialesHeader($page);
//chargement du modele et de ses fonctions pour la page courante
ChargerModeleEtFonctionsDeLaPage($page);
//convertir les variables du header pour que Google les affichent lisiblement
ConvertirVariablesHeader($page);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html/loose.dtd">
<html>
<head>
<title><?php echo $header_title ?></title>
	<!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
	<!--						BALISES DE META-RECHERCHES								-->
	
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	
	<!-- 																				 -->
	
	<META NAME="Category" CONTENT="Plate-forme">
	<META NAME="Publisher" CONTENT="INFO[ARTS]MEDIA">
	<META NAME="Copyright" CONTENT="© - 2010 - Info[ARTS]Media">
	<META NAME="Expires" CONTENT="Never Maybe!">
	<META NAME="Distribution" CONTENT="Global">
	<META NAME='Description' lang='fr' CONTENT="<?php echo $header_description ?>">
	<META NAME='Identifier-URL' CONTENT="<?php echo $header_identifier_url ?>">
	<META NAME='Keywords' lang='fr' CONTENT="<?php echo $header_keywords ?>">		
	<META NAME="Author" CONTENT="Emmanuel ROY & More ...">
	<META NAME="Reply-to" CONTENT="contact@besancon25.info">
	<META NAME="Date-Creation-yyyymmdd" CONTENT="20090317">
	<META NAME="Date-Revision-yyyymmdd" CONTENT="20100712">
	<META NAME="Revisit-After" CONTENT="30 days">
	<META NAME="Robots" CONTENT="index, nofollow">
	<META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
	<!--																	-->
	<!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
	<!--																	-->
	<META HTTP-EQUIV="Content-Language" CONTENT="fr">
	<META HTTP-EQUIV="Refresh" CONTENT="NO">
	<link REL="shortcut icon" HREF="images/logoo.ico" />
	<link rel="alternate" type="application/rss+xml" href="fluxRSS.php?flux=RSS" title="Flux RSS du (B25) - La plate-forme des Artistes,Artisans,Groupes et Associations">
	<link rel="alternate" type="application/rss+xml" href="fluxRSS.php?flux=ATOM" title="Flux ATOM du (B25) - La plate-forme des Artistes,Artisans,Groupes et Associations">
	<!--																	-->
	<!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
<?php PositionneCSS(); ?>
<script type='text/javascript' src='scriptJS/ajax.js'></script>
<script type='text/javascript' src='scriptJS/horloge.js'></script>
</head>

<body onLoad='Horloge_Start()'>

<div class='menu'>
	<?php AfficheMenu(); ?>
</div>

<div class='sousmenu'>
	<?php AfficheSousMenu(); ?>
</div>

<div class='limiteur'>&nbsp;</div>
<?php
$interface = recuperationCookieInterface();

?>
<div class='corps'><a name="corpsPage" href="#"></a>
	<div class='contenu'>
		<?php
		 AffichePage($page);	
		?>
	</div>
	<div class='piedDePage'>
		<center>
		<br /><br /><br /><br />
		<p>Besan&ccedil;on 25 c'est aussi d'autres terminaisons de domaines,et des sous-domaines afin de simplifier l'utilisation du m&eacute;dia Internet:</p>
			<ul>
			<li>Une page r&eacute;serv&eacute;e aux <a href='http://besancon25.com'>petites-annonces</a> des artistes et artisans sur le .com</li>
			<li>Un agenda r&eacute;serv&eacute; aux <a href='http://besancon25.net/index.php'>&eacute;v&egrave;nements</a> des associations et groupes musicaux sur le .net</li>
			<li>Une page de <a href='http://besancon25.biz'>publicit&eacute;s</a> r&eacute;serv&eacute;e aux annonceurs, commerces et m&eacute;c&egrave;nes sur le .biz</li>
			<li>Une page informative sur le porte-feuille des marques <a href='http://unilever.besancon25.fr'>Unilever</a></li>
			</ul>
		</p>		
		<p>
		Besan&ccedil;on 25 est un site &eacute;dit&eacute; par <a href='http://infoartsmedia.fr'>Info[ARTS]Media</a>.
		<br /><br />
		Le serveur est h&eacute;berg&eacute; en contrat avec <a href="https://www.1and1.fr/?kwk=20117144" target="_blank">1 and 1</a> (1&1 Internet SARL / 7, place de la Gare / BP 70109 / 57201 Sarreguemines Cedex ), dans un de ses centres de donn&eacute;es.
		<br />
		Ce site respecte les droits des Internautes r&eacute;gis par les articles de la loi <i>Informatique et Libert&eacute;es</i> accessible sur le site de la <a href='http://www.cnil.fr'>CNIL</a>
		<br />
		Les <a href='http://www.cnil.fr/vos-obligations/sites-web-cookies-et-autres-traceurs/' >"Cookies informatiques"</a> sont uniquements utilis&eacute;s afin que chaque poste-logiciel ait la possibilit&eacute; de choisir sa propre <a href='index.php?page=preferences'>interface</a> .
		</p>
		</center>
	</div>
</div>
</body>
</html>
