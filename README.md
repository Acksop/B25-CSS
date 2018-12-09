# MVC---Procedural

Cette coquille vide est la première de mes recherches sur le pattern MVC

Il vient avec une page de préférence permattant de modifier l'interface du site web à la volée

Voici comment l'utiliser:

 - Afin de créer une nouvelle page vous devez intancier deux fichiers php nommés de la façon suivante:
 Dans "public > modeles > accesseurs > mapage.accesseur.php" contenant:
 
 <?php
global $header_title,$header_description,$header_identifier_url,$header_keywords;
$header_title = "Mon titre";
$header_description = "Ma description de page a destination des moteurs de recherches";
$header_identifier_url = "l'url de la page proprement dite";
$header_keywords = "les mots clé de recherche de la page";

 
 Et, Dans "public > modeles > accesseurs > mapage.accesseur.php" contenant:
 
 <?php

function LancerAffichageDuCorps(){
echo "mon code HTML";
}

Pour le reste c'est a vous de jouer !