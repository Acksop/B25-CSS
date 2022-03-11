<?php
global $header_title,$header_description,$header_identifier_url,$header_keywords;
$header_title = "Besan&ccedil;on 25 - Vos pr&eacute;f&eacute;rences d'affichage des Menus sur la Plate-forme ( 600 diff&eacute;rentes mani&egrave;res de penser ...)";
$header_description = "Les diff&eacute;rents affichages du Besan&ccedil;on 25 ";
$header_identifier_url = "besancon25.fr/preferences";
$header_keywords = "Besan&ccedil;on, Besancon, 25000, 25, preferences, preferences, IHM, Interface Homme Machine, affichage, graphisme";


function estInactifOuPas($val)
{
    if ($val == 0) {
        return "disabled";
    } else {
        return "";
    }
}

function estCocherOuPas($val)
{
    if ($val == 1) {
        return "checked";
    } else {
        return "";
    }
}

function estEnLectureSeuleOuPas($val)
{
    if ($val == 0) {
        return "readonly";
    } else {
        return "";
    }
}