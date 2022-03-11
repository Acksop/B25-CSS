<?php

global $header_title,$header_description,$header_identifier_url,$header_keywords;
$header_title = "Besançon 25 - Vos préférences d'affichage des Menus sur la Plate-forme ( Des manières de penser à plus de 88 Miles/h...)";
$header_description = "Les différents affichages du Besançon 25 ";
$header_identifier_url = PAGEB25FR."preferences";
$header_keywords = "Besançon, Besancon, 25000, 25, preferences, preferences, IHM, Interface Homme Machine, affichage, graphisme";


function LancerAffichageDuCorps()
{
    $dossier = array();
    $dossier = explode(".", __FILE__);
    $extension_fichier = array_pop($dossier);
    $chemin = implode(".", $dossier);
    $chemin = explode("/", $chemin);
    $nom_fichier = array_pop($chemin);
    $repertoire_apps_utilisateurs = implode(DIRECTORY_SEPARATOR, $chemin) . DIRECTORY_SEPARATOR . $nom_fichier . DIRECTORY_SEPARATOR;

    include $repertoire_apps_utilisateurs . "cookies.php";
    include $repertoire_apps_utilisateurs . "ihm.php";
}
