<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 $Error = $_GET['num'];
 switch ($Error){
 case 1:
 $image = '<img src="/erreurs/erreur401.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 3:
 $image = '<img src="/erreurs/erreur403.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 4:
 $image = '<img src="/erreurs/erreur404.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 26:
 $image = '<img src="/erreurs/erreur500.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 default:
 $image = '<img src="/erreurs/erreurBIG.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 }
 $title = Array('Erreur 400 - Syntaxe de requète Erronée',
 		'Erreur 401 - Authentification nécessaire pour accéder à la ressource',
 		'Erreur 402 - Paiement requis pour accéder à la ressource',
 		'Erreur 403 - Authentification refusée',
 		'Erreur 404 - Document Non Trouv&eacute;',
 		'Erreur 405 - Méthode de requête non autorisée',
 		'Erreur 406 - Toutes les réponses possibles seront refusées.',
 		'Erreur 407 - Accès à la ressource autorisé par identification avec le proxy',
 		'Erreur 408 - Temps d’attente d’une réponse du serveur écoulé',
 		'Erreur 409 - La requête ne peut être traitée à l’état actuel',
 		'Erreur 410 - La ressource est indisponible et aucune adresse de redirection n’est connue',
 		'Erreur 411 - La longueur de la requête n’a pas été précisée',
 		'Erreur 412 - Préconditions envoyées par la requête non-vérifiées',
 		'Erreur 413 - Traitement abandonné dû à une requête trop importante',
 		'Erreur 414 - URI trop longue',
 		'Erreur 415 - Format de requête non-supportée pour une méthode et une ressource données',
 		'Erreur 416 - Champs d’en-tête de requête « range » incorrect.',
 		'Erreur 417 - Comportement attendu et défini dans l’en-tête de la requête insatisfaisable',
 		'Erreur 418 - Je suis une théière',
 		'Erreur 422 - L’entité fournie avec la requête est incompréhensible ou incomplète.',
 		'Erreur 423 - L’opération ne peut avoir lieu car la ressource est verrouillée.',
 		'Erreur 424 - Une méthode de la transaction a échoué.',
 		'Erreur 425 - Unordered Collection',
 		'Erreur 426 - Upgrade Required',
 		'Erreur 449 - Retry With',
 		'Erreur 450 - Blocked by Windows Parental Controls',
 		'Erreur 500 - Erreur interne du serveur',
 		'Erreur 501 - Fonctionnalité réclamée non supportée par le serveur',
 		'Erreur 502 - Mauvaise réponse envoyée à un serveur intermédiaire par un autre serveur.',
 		'Erreur 503 - Service temporairement indisponible ou en maintenance',
 		'Erreur 504 - Temps d’attente d’une réponse d’un serveur à un serveur intermédiaire écoulé',
 		'Erreur 505 - Version HTTP non gérée par le serveur',
 		'Erreur 507 - Espace insuffisant pour modifier les propriétés ou construire la collection',
 		'Erreur 509 - Utilisé par de nombreux serveurs pour indiquer un dépassement de quota.');
?>
<html>
  <head>
    <title><?php echo $title[$Error]; ?></title>
  </head>
  <body>
	<h1><center><?php echo $image; ?>La recherche du document demand&eacute; n'as pas p&ucirc; aboutir, il se peut que le document ne soit plus sur le serveur, qu'il est &eacute;t&eacute; d&eacute;plac&eacute; ou que le lien est &eacute;rron&eacute;. Veuillez utiliser le bouton pr&eacute;c&eacute;dent de votre navigateur et contacter le dieu de ce site, son "Webmaster" ... </center></h1><br><br><h5>Et maintenant un peu de gymnatique c&eacute;r&eacute;brale...<h5><br>
	<script src="/erreurs/lorem.js"></script>
        <script>
            window.onload = function() {
                var lorem1 = new Lorem;
                lorem1.type = Lorem.TEXT;
                lorem1.query = '1p';
                lorem1.createLorem(document.getElementById('lorem1'));
                var lorem2 = new Lorem;
                lorem2.type = Lorem.TEXT;
                lorem2.query = '2p';
                lorem2.createLorem(document.getElementById('lorem2'));
                var lorem3 = new Lorem;
                lorem3.type = Lorem.TEXT;
                lorem3.query = '3p';
                lorem3.createLorem(document.getElementById('lorem3'));
                var lorem4 = new Lorem;
                lorem4.type = Lorem.TEXT;
                lorem4.query = '4p';
                lorem4.createLorem(document.getElementById('lorem4'));
            };
        </script>
<div id="lorem1"></div>
<div id="lorem2"></div>
<div id="lorem3"></div>
<div id="lorem4"></div>
Generated 10 paragraphs of Lorem ipsum ...
  </body>
</html>
