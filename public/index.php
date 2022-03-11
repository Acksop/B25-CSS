<?php 
session_start();
include('fonctionCourante.php');
$ip = $_SERVER['REMOTE_ADDR'];

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

$version = recuperationCookieVersionInterface();
$interface = recuperationCookieInterface();

ob_start();
AffichePage($page);
$content = ob_get_clean();

ob_start();	
include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templateHTML/template.phtml.php';
$ecran = ob_get_clean();

 echo $ecran;
