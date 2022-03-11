<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 $Error = $_GET['num'];
 switch ($Error){
 case 1:
 $image = '<img src="erreur401.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 3:
 $image = '<img src="erreur403.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 4:
 $image = '<img src="erreur404.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 case 26:
 $image = '<img src="erreur500.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
 break;
 default:
 $image = '<img src="erreurBIG.gif" width="640" height="480" align="left" vspace="2" hspace="10" />';
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
	<h1><center><?php echo $image; ?>La recherche du document demand&eacute; n'as pas p&ucirc; aboutir, il se peut que le document ne soit plus sur le serveur, qu'il est &eacute;t&eacute; d&eacute;plac&eacute; ou que le lien est &eacute;rron&eacute;. Veuillez utiliser le bouton pr&eacute;c&eacute;dent de votre navigateur et contacter le dieu de ce site, son "Webmaster" ... </center></h1><br><br><h5>Et maintenant un peu de gymnatique c&eacute;r&eacute;brale...<h5><br><h1>Lorem Ipsum<h1><h2>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."<h2><h3>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h3><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum lectus et dolor sagittis volutpat. Vivamus eleifend elit quis urna vulputate venenatis. Maecenas et nunc magna. Mauris vel neque id nunc tincidunt fermentum non sed dui. Morbi vitae volutpat risus. Nulla facilisi. Mauris consequat augue ut risus placerat dictum. Suspendisse sit amet sodales neque. Curabitur quis nibh vel diam commodo cursus sed et libero. Vivamus nibh velit, vulputate eu congue non, iaculis nec dolor. Donec feugiat, urna feugiat faucibus tempor, augue nisi dictum dui, ac luctus dui nisl feugiat est. Ut in elit lacus, sed elementum ipsum. Sed nec nisl felis. Fusce nisl purus, sagittis sit amet lacinia quis, pulvinar eu ante. Nulla at dolor eget elit rutrum venenatis. Quisque dui risus, vehicula in egestas vel, tincidunt sed purus. Nulla ultricies condimentum enim, in iaculis massa tempor sit amet. Vestibulum non magna quam, eu mattis purus. Donec fringilla luctus dignissim.</h4><h5>Phasellus auctor, nibh non interdum dapibus, libero lacus consequat risus, in aliquam enim nunc at augue. Fusce lacinia turpis consequat nulla vehicula pretium. Donec et eros leo, vitae lobortis dolor. Donec ultricies gravida felis, varius mattis tellus scelerisque non. Duis mauris libero, sodales vitae porttitor quis, sagittis vitae lacus. Nullam in dui lobortis sem tincidunt fringilla nec at mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam venenatis cursus vulputate. Nullam aliquam enim quis mauris convallis at porttitor massa vulputate. Aliquam malesuada ligula sit amet metus consectetur nec tincidunt mauris tincidunt. Nulla sollicitudin, ante at consectetur tempor, tellus urna varius tortor, eu pellentesque erat elit quis ipsum. In quam magna, tincidunt quis sagittis ut, adipiscing sit amet sem. Praesent quis ipsum nibh, vitae lobortis nibh. Fusce laoreet velit in magna mattis id mattis purus porta. Proin feugiat ultricies nisl a feugiat. Aliquam eu mauris nec enim vestibulum iaculis ac a turpis. Nullam pharetra, dolor at faucibus bibendum, nisi nulla iaculis velit, ac pulvinar nisl arcu eget ligula. Vivamus eu sapien ante. Donec elementum dolor tellus, sed iaculis turpis.</h5><h6>Etiam ut metus metus, sit amet consequat erat. Aenean varius tincidunt dui, at luctus risus hendrerit at. Vestibulum luctus enim sit amet libero pharetra molestie non eget lacus. Suspendisse euismod faucibus mi id aliquet. Aliquam erat est, interdum ac blandit nec, porta in enim. Integer euismod varius enim, quis hendrerit quam venenatis fermentum. Duis aliquet tellus quis sapien tincidunt sit amet laoreet metus adipiscing. Sed gravida accumsan diam rutrum placerat. Vestibulum massa ante, vehicula a aliquet sollicitudin, euismod quis augue. Nullam egestas ante non magna suscipit nec ullamcorper nulla accumsan.<br><br>Aliquam fermentum blandit ante vel sodales. Sed tortor nulla, posuere quis dignissim id, ultrices nec turpis. Suspendisse lacus sem, aliquam eu fringilla eu, luctus vel arcu. Sed fringilla lectus quis turpis pretium accumsan. Aliquam egestas vehicula velit, sit amet varius enim volutpat quis. Nunc dignissim aliquam sagittis. Curabitur non tortor est. Sed auctor fringilla auctor. Duis a nulla augue. Fusce sed velit justo. Sed sed malesuada dolor. Curabitur orci sem, sagittis at pretium ut, tincidunt at dolor. Donec vehicula, libero a egestas vestibulum, erat dui pellentesque augue, et ornare quam augue eget lacus. Cras ultricies, est in vulputate condimentum, sem mi volutpat massa, eu commodo elit erat in orci. Suspendisse id lacus id turpis suscipit congue in quis urna. In in lectus laoreet nunc scelerisque ornare. Pellentesque convallis adipiscing enim, eu rutrum lacus fringilla ac. Nullam ornare sodales pellentesque. Pellentesque sit amet magna neque, vitae iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Maecenas lectus est, scelerisque a accumsan a, euismod vel nulla. Aliquam dapibus dictum scelerisque. Aenean sit amet lobortis urna. Donec ut nisl justo, nec convallis magna. Sed ut blandit odio. Cras sit amet risus vel est posuere tristique. Aliquam erat volutpat. Nam pretium nisi vitae mauris posuere in semper arcu viverra. Ut nunc felis, convallis tincidunt vestibulum nec, pulvinar vel dui. Vivamus molestie tempor cursus. Cras nec massa nec arcu ultrices dictum nec placerat justo. Suspendisse rhoncus fringilla justo. Suspendisse potenti. Praesent augue purus, consectetur in vehicula in, hendrerit vel massa. Sed in neque quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi quis nibh enim. Sed nec velit at justo euismod commodo. Suspendisse semper libero vitae ligula bibendum vehicula.</h6><h4>Generated 5 paragraphs, 704 words, 4727 bytes of Lorem Ipsum</h4>
  </body>
</html>
