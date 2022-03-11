<?php 

$url_erreur = $_SERVER["REQUEST_URI"];
$serveur_erreur = $_SERVER["REDIRECT_STATUS"];
$message_erreur['401'] = "Authentification nécessaire";
$message_erreur['403'] = "Accès interdit";
$message_erreur['404'] = "La page spécifiée n'existe pas";
$message_erreur['500'] = "Erreur interne du serveur";
$libelle_erreur = "Erreur $message_erreur";
echo "$url_erreur : $libelle_erreur : $message_erreur[$serveur_erreur]";


?>
