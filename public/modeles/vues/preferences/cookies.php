<?php

echo "<div class='B25-cadre-inverse' align='center'>";

echo <<<EOD

		    <script type='text/javascript'>
		      function modifierVisibilite( nom ){
		    //alert(document.getElementsByTagName( nom ));

		          switch( nom ){
		              case "CookiesAnalyse":
		                  if(document.getElementById( nom ).checked == true ){
		                      /*document.getElementById("CA_analytics").removeAttribute('disabled');
		                      document.getElementById("CA_adsense").removeAttribute('disabled');
		                      document.getElementById("CA_hotjar").removeAttribute('disabled');
		                      document.getElementById("CA_segment").removeAttribute('disabled');
		                      document.getElementById("CA_piwik").removeAttribute('disabled');*/
		                      document.getElementById("CA_flagcounter").removeAttribute('disabled');
                          }else{
		                      /*document.getElementById("CA_analytics").disabled = true;
		                      document.getElementById("CA_adsense").disabled = true;
		                      document.getElementById("CA_hotjar").disabled = true;
		                      document.getElementById("CA_segment").disabled = true;
		                      document.getElementById("CA_piwik").disabled = true;*/
		                      document.getElementById("CA_flagcounter").disabled = true;
                          }
		              break;
		              case "CookiesTiers":
		                 if(document.getElementById( nom ).checked == true ){
		                      /*document.getElementById("CT_Google").removeAttribute('disabled');
		                      document.getElementById("CT_Twitter").removeAttribute('disabled');
		                      document.getElementById("CT_Facebook").removeAttribute('disabled');
		                      document.getElementById("CT_LinkedIn").removeAttribute('disabled');
		                      document.getElementById("CT_Commentaires_Disqus").removeAttribute('disabled');
		                      document.getElementById("CT_Commentaires_Facebook").removeAttribute('disabled');*/
                          }else{
		                      /*document.getElementById("CT_Google").disabled = true;
		                      document.getElementById("CT_Twitter").disabled = true;
		                      document.getElementById("CT_Facebook").disabled = true;
		                      document.getElementById("CT_LinkedIn").disabled = true;
		                      document.getElementById("CT_Commentaires_Disqus").disabled = true;
		                      document.getElementById("CT_Commentaires_Facebook").disabled = true;*/

                          }
		              break;
		              case "CookiesFonctionnels":
		                 if(document.getElementById( nom ).checked == true ){
		                      //document.getElementById("CF_HomeBreve").removeAttribute('disabled');
		                      document.getElementById("CF_Interfaces").removeAttribute('disabled');
		                      //document.getElementById("CF_Commentaires").removeAttribute('disabled');
		                      //document.getElementById(CF_i110n_Gtranslate).removeAttribute('disabled');
                          }else{
		                      //document.getElementById("CF_HomeBreve").disabled = true;
		                      document.getElementById("CF_Interfaces").disabled = true;
		                      //document.getElementById("CF_Commentaires").disabled = true;
		                      //document.getElementById("CF_i110n_Gtranslate").disabled = true;
                          }
		              break;
		              default:
                  }
              }
		    </script>
EOD;

echo "<h2 class='titre lettrine'>Mes Pr??f??rences concernant l'utilisation des Cookies - Fichiers Personnel de Tracabilit??</h2>"

    ."<p>Les cookies sont de petits fichiers texte stock??s dans le navigateur d'un internaute."
    ." Les cookies sont importants pour le bon fonctionnement d'un site ou d'une plate-forme."
    ." Afin d'am??liorer votre exp??rience, nous utilisons des cookies pour conserver"
    ." les informations de connexion et fournir une connexion sure, collecter"
    ." les statistiques en vue d'optimiser les fonctionnalites du site afin adapter"
    ." le contenu ?? vos centres d'int??r??t, pour personnaliser le contenu, pour"
    ." offrir des fonctionnalit??s relatives aux m??dias sociaux et d'analyse de notre trafic."
    ." Nous partageons ??galement des informations sur l'utilisation de notre site avec nos partenaires de m??dias sociaux, de publicit?? et d'analyse."
    ."</p>"
    ."<p>Cette zone de param??trage, qui est plus qu'une simple opposition ?? leurs utilisation, vous permet de mieux r??guler l'insertion et les modifications de ces petits fichiers sur votre ordinateur.</p>"
    ."<form method='post' name='changementPreferencesCookies' action='".link_rewrite('traitementPreferencesCookies', true)."'>";
/* Faire les cookies pour adsens
 * et ajouter les publicit??s aboutads.info

 <p>Les internautes peuvent d??sactiver le cookie DoubleClick
 utilis?? pour la diffusion d'annonces par centres d'int??r??t via les&nbsp;<a href="http://www.google.fr/ads/preferences/">Param??tres Google Solutions publicitaires</a>. </p>
 <p>Vous pouvez ??galement  d??sactiver les cookies d'un
 fournisseur tiers relatifs ?? la publicit?? par centres d'int??r??t en
 consultant le site&nbsp;<a href="http://www.aboutads.info/">aboutads.info</a>. </p>

 */

echo "<a name='cookies'>";

echo "<br /><hr /><br />";
if (!estActifOuPasDoNotTrackHeader()) {
    echo "<p class='utilisateurs' align='left' style='font-variant : small-caps;'><input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CO_LeCookie"))." name='CookiesAnalyse' id='CookiesAnalyse' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA"))." onclick='javascript:modifierVisibilite(";
    echo '"CookiesAnalyse"';
    echo ");'>Activer les cookies-traceurs d'analyses </input></p>";
    echo "<p class='utilisateursInverse' align='right'>Ces cookies sont utilises par des agences d'analyses pour ??diter des rapports sur l'utilisation de l'application-Web. Et accessoirement afficher des publicit??s cibl??s. Parce qu'au final ??a sert a quoi l'analyse sinon?</p>";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_analytics' id='CA_analytics' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_Ganalytics"))." ><a target='_blank' href='http://www.google.com/intl/fr/policies/privacy/partners/'>Google</a> Analytics";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_adsense' id='CA_adsense' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_Gadverts"))." ><a target='_blank' href='https://adssettings.google.com/'>Google</a> Adsense ";
    echo " <p>Si vous le souhaitez vous pouvez utiliser le&nbsp;<a href='https://tools.google.com/dlpage/gaoptout/' target='_blank'>module compl??mentaire de d??sactivation</a>&nbsp;de Google&nbsp;Analytics pour le Web.</p>"
        ."</input>";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_hotjar' id='CA_hotjar' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_HotJar"))." ><a target='_blank' href='https://www.hotjar.com/customer-love'>HotJar</a> Heatmaps and Survey";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_segment' id='CA_segment' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_SegmentApp"))." ><a target='_blank' href='https://segment.com/'>Segment</a> Funnels";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_piwik' id='CA_piwik' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_Piwik"))." ><a target='_blank' href='https://matomo.org/'>Piwik</a> Matomo";
    //echo "<br /><br />";
    echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CA"))." name='CA_flagcounter' id='CA_flagcounter' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CA_FlagCounter"))." ><a target='_blank' href='https://flagcounter.com/'>FlagCounter</a> Fleees!";
    echo "<br /><br /><hr /><br />";

    if ($version != 2) {
        echo "<p class='utilisateurs' align='left' style='font-variant : small-caps;'><input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CO_LeCookie"))." name='CookiesTiers' id='CookiesTiers' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT"))." onclick='javascript:modifierVisibilite(";
        echo '"CookiesTiers"';
        echo ");'>Activer les cookies de raison-socials </input></p>";
        echo "<p class='utilisateursInverse' align='right'>Ces cookies vous permettent de partager en un clic une page qui vous plait, et qui peut interesser l'un de vos amis.</p>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Google' id='CT_Google' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_Google"))." >Liaison-Partenaire Google +</input>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Facebook' id='CT_Facebook' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_Facebook"))." >Liaison-Partenaire Facebook</input>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Twitter' id='CT_Twitter' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_Twitter"))." >Liaison-Partenaire Twitter</input>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_LinkedIn' id='CT_LinkedIn' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_LinkedIn"))." >Liaison-Partenaire LinkedIn</input>";
        echo "<br />";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Hyperlien_ebay' id='CT_Hyperlien_ebay' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_Hyperlien_ebay"))." >Liaison-HyperLien eBay</input>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Hyperlien_linkbucks' id='CT_Hyperlien_linkbucks' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_Hyperlien_linkbucks"))." >Liaison-HyperLien LinkBucks</input>";
        echo "<br />";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Commentaires_Disqus' id='CT_Commentaires_Disqus' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_CommentairesDisqus"))." >Liaison-Commentaires Disqus</input>";
        //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CT"))." name='CT_Commentaires_Facebook' id='CT_Commentaires_Facebook' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CT_CommentairesFacebook"))." >Liaison-Commentaires Facebook</input>";

        echo "<br /><br /><hr /><br />";
    }

    echo "<p class='utilisateurs' align='left' style='font-variant : small-caps;'><input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CO_LeCookie"))." name='CookiesFonctionnels' id='CookiesFonctionnels' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CF"))." onclick='javascript:modifierVisibilite(";
    echo '"CookiesFonctionnels"';
    echo ");'>Activer les cookies fonctionnels </input></p>";
    echo "<p class='utilisateursInverse' align='right'>Ces cookies vous permettent d'obtenir l'interface qui vous convient, selon la puissance de votre ordinateur, afin de moins vous fatiguer devant l'??cran.</p>";
    //echo "<input  ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CF"))." ".estEnLectureSeuleOuPas(recuperationPreferenceCookie("CookieApp_CF"))." name='CF_HomeBreve' id='CF_HomeBreve' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CF_HomeBreve"))." >Article d'accueil</input>";
    echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CF"))." name='CF_Interfaces' id='CF_Interfaces' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CF_IHM"))." >Interfaces</input>";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CF"))." name='CF_Commentaires' id='CF_Commentaires' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CF_Commentaires"))." >Commentaires</input>";
    //echo "<input ".estInactifOuPas(recuperationPreferenceCookie("CookieApp_CF"))." name='CF_i110n_Gtranslate' id='CF_i110n_Gtranslate' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CF_i110n_Gtranslate"))." >Traductions Automatiques</input>";

    echo "<br /><br /><hr /><br />";
} else {
    echo "<h2>Vous avez activ?? l'en-t??te DO NOT TRACK </h2><p> Dans cette configuration le site ne supporte que les fonctions minimales.</p>";
}

echo "<p class='utilisateurs' align='left' style='font-variant : small-caps;'><input name='LeCookieObligatoire' id='LeCookieObligatoire' type='checkbox' value='1' checked disabled >Le cookie obligatoire </input></p>";
echo "<p class='utilisateursInverse' align='right'>Ce cookie, qui lui: ne sert ?? rien (ou presque !) dans l'application ; vous permet de dire ?? la plate-forme d'installer des cookies sur votre ordinateur.</p>";
echo "<input name='CO_LeCookie' id='CO_LeCookie' type='checkbox' value='1' ".estCocherOuPas(recuperationPreferenceCookie("CookieApp_CO_LeCookie"))." >Le cookie!</input>";

echo "<br /><br /><hr /><br />";

echo "<p><strong>Vous pouvez aussi refuser ces cookies gr??ce aux nombreuses options de votre navigateur.</strong></p>"
    ."<p>Param??trer les cookies sur&nbsp;<a href='http://support.microsoft.com/gp/cookies/fr' rel='nofollow'>Microsoft Internet Explorer</a></p>"
    ."<p>Param??trer les cookies sur&nbsp;<a href='https://support.mozilla.org/fr/kb/cookies-informations-sites-enregistrent#w_paramaetres-des-cookies' rel='nofollow'>Mozilla Firefox</a></p>"
    ."<p>Param??trer les cookies sur&nbsp;<a href='https://support.google.com/chrome/answer/95647?hl=fr' rel='nofollow'>Google Chrome</a></p>"
    ."<p>Param??trer les cookies sur&nbsp;<a href='http://support.apple.com/kb/ht1677?viewlocale=fr_FR' rel='nofollow'>Safari</a></p>"
    ."<p>Param??trer les cookies sur&nbsp;<a href='http://help.opera.com/Windows/9.50/fr/cookies.html' rel='nofollow'>Opera</a></p>";

echo "<br /><br />";
echo "<input type='submit' class='btn_modif_preferences' witdh='500px' value=\"Valider l'utilisation de ces fichiers\"/>"
    ."</form>"
    ."</div>";
