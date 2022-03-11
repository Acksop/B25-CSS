# MVC---Procedural build for CSS B25 Développeur

Cette coquille vide fait partie de mes recherches sur le pattern MVC

Elle est spécialement dédié aux futurs développeur CSS (FrontEnd) du B25 [https://besançon25.fr].
En effet elle vient avec une page de préférence permettant de modifier l'interface du site web à la volée

Voici comment l'utiliser:

 - Afin de créer une nouvelle page vous devez intancier deux fichiers php nommés de la façon suivante:
 
 Dans "public > modeles > accesseurs > mapage.accesseur.php" contenant:
 ```
 <?php
global $header_title,$header_description,$header_identifier_url,$header_keywords;
$header_title = "Mon titre";
$header_description = "Ma description de page a destination des moteurs de recherches";
$header_identifier_url = "l'url de la page proprement dite";
$header_keywords = "les mots clé de recherche de la page";
```
 
 Et, Dans "public > modeles > vues > mapage.php" contenant:
 ```
 <?php
function LancerAffichageDuCorps(){
echo "mon code HTML";
}
```

Les développeur CSS qui veulent implémenter de nouvelles variations d'interface peuvent tout à fait créer de nouvelles pages en récupérant l'intégralité des pages HTML de la plate-forme alpha.
Dans quelques temps je mettrait a disposition des exemples de pages en pure HTML avec les différents éléments dont le B25 use.

N'hésitez pas à m'envoyer un courriel ou lancer une issue.

Pour le reste c'est a vous de jouer !

Remerciement CSS

> - Gabarit Elephorm CSS [Florens Verschelde](https://fvsch.com/)
> > http://blog.elephorm.com/apprendre-xhtml-css/
> > https://fvsch.com/gabarits-html/html/
