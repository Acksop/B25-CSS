<?php

    //fonction permettant de récupérer la version de l'interface active...
    $version = recuperationCookieVersionInterface();
    //tableau contenant toutes les couleurs de l'interface:
    $tabCouleur = array("#663333","#FE642E","#B45F04","#FFBF00","#F3F781","#4B610B"
                                                ,"#5FB404","#31B404","#81F79F","#088A4B","#00FFBF","#58FAF4"
                                                ,"#01A9DB","#81BEF7","#013ADF","#0B0B61","#8258FA","#4B088A"
                                                ,"#D358F7","#8A0886","#FA58D0","#F5A9E1","#B40431","#FFFFFF","#CCCCCC","#000000");
    //tableau contenant toutes les polices de caractères du site
    $tabPolices = array("Arial","Comic Sans MS","Verdana","Helvetica","Monospace","Georgia","Symbol","Times new roman","Courier New","Impact","Webdings","Garuda");
    $tabFonts = array("arial","Comic Sans MS","Verdana","Helvetica","Monospace","Georgia","Symbol, Symbol Normal","Times New Roman","Courier New","Impact","Webdings","Garuda");

    echo "<div class='B25-cadre-inverse' align='center'>";
    echo "<a name='IHM'>";
    echo "<h2 class='titre lettrine'>Mes Preferences convernant l'IHM - Interface Homme Machine</h2>"
                ."<form method='post' name='changementPreferencesIHM' action='".link_rewrite('traitementPreferencesIHM', true)."'>";

    echo "<p align='right'>Vous pouvez choisir, comment doit &ecirc;tre affich&eacute; "
            ."les diff&eacute;rents &eacute;l&eacute;ments du site Besan&ccedil;on25, ainsi que"
            ." la police et la taille des caract&egrave;res du texte.<br />&nbsp;</p>";

    //Version CSS IHM
    echo "<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat de la version du CSS de la navigation...</p>"
            ."<center>";
    if(isset($_SESSION['id_utilisateur'])) {
        echo "<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"version1\").checked = true;document.forms[\"changementPreferencesIHM\"].submit();'>";
    }else {
        echo "<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick=''>";
    }
    echo "<input class='preferences-radio' id='version1' type='radio' name='versionIHM' value='1' ";
    CheckPreferencesVersion(1);
    echo "><label for='version1' onClick='javascript:'><img src='images/picto - ChangeVersion_v1.png' width='100px' heigth='100px' alt='Version CSS 1'/></label></input>"
            ."</div>"

            ."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"version2\").checked = true;document.forms[\"changementPreferencesIHM\"].submit();'>"
            ."<input class='preferences-radio' id='version2' type='radio' name='versionIHM' value='2'";
    CheckPreferencesVersion(2);
    echo "><label for='version2' onClick='javascript:'><img src='images/picto - ChangeVersion_v1.5.png' width='100px' heigth='100px' alt='Version CSS 2'/></label></input>"
            ."</div>"

            ."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"version3\").checked = true;document.forms[\"changementPreferencesIHM\"].submit();'>"
            ."<input class='preferences-radio' id='version3' type='radio' name='versionIHM' value='3'";
    CheckPreferencesVersion(3);
    echo "><label for='version3' onClick='javascript:'><img src='images/picto - ChangeVersion_v2.png' width='100px' heigth='100px' alt='Version CSS 3'/></label></input>"
            ."</div>";
			
	echo "<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"version4\").checked = true;document.forms[\"changementPreferencesIHM\"].submit();'>"
	. "<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick=''>"
	. "<input class='preferences-radio' id='version4' type='radio' name='versionIHM' value='4'";
	CheckPreferencesVersion(4);
	echo "><label for='version4' onClick='javascript:'><img src='images/picto - ChangeVersion_v3.png' width='100px' heigth='100px' alt='Version CSS 4'/></label></input>"
		. "</div>";

    echo "</center>";

    echo "<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat de la température de l'interface...</p>"
        ."<center>"
        ."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"white\").checked = true;'>"
        //Version CSS IHM
        ."<input class='preferences-radio' id='white' type='radio' name='versionColor' value='white' onClick='changerCelsiusInterface(\"white\",\"".$version."\")'";
    CheckPreferencesTemperatureInterface('white');
    echo "><label for='white' onClick='javascript:'><img src='images/picto - ChangeColor_vLight.png' width='100px' heigth='100px' alt='Version Illuminé'/></label></input>"
        ."</div>"

        ."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"gray\").checked = true;'>"
        ."<input class='preferences-radio' id='gray' type='radio' name='versionColor' value='gray' onClick='changerCelsiusInterface(\"gray\",\"".$version."\")'";
    CheckPreferencesTemperatureInterface('gray');
    echo "><label for='gray' onClick='javascript:'><img src='images/picto - ChangeColor_vModern.png' width='100px' heigth='100px' alt='Version Grise'/></label></input>"
        ."</div>"

        ."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"black\").checked = true;'>"
        ."<input class='preferences-radio' id='black' type='radio' name='versionColor' value='black' onClick='changerCelsiusInterface(\"black\",\"".$version."\")'";
    CheckPreferencesTemperatureInterface('black');
    echo "><label for='black' onClick='javascript:'><img src='images/picto - ChangeColor_vDark.png' width='100px' heigth='100px' alt='Version Obscure'/></label></input>"
        ."</div>"

        //."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick='javascript:document.getElementById(\"version4\").checked = true;document.forms[\"changementPreferencesIHM\"].submit();'>"
        /*."<div class='data_preferences utilisateurs table-mobile-cell' width='33%' onClick=''>"
        ."<input class='preferences-radio' id='version4' type='radio' name='versionIHM' value='4'";
    CheckPreferencesVersion(4);
    echo "><label for='version4' onClick='javascript:'><img src='images/picto - ChangeVersion_v3.png' width='100px' heigth='100px' alt='Version CSS 4'/></label></input>"
        ."</div>"*/

        ."</center>";

    if ($version != 2) {
        echo"<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat du fond de l'interface...</p>"
            ."<center>"
            ."<div class='data_preferences utilisateurs table-mobile-cell' width='25%' onClick='javascript:document.getElementById(\"fond0\").checked = true;' >"
            ."<input class='preferences-radio' id='fond0' type='radio' name='fondIHM' value='0' onClick='changerCouleurFondInterface(\"0\")' ";
        CheckPreferencesFond(0);
        echo "><label for='fond0' onClick='changerCouleurFondInterface(\"0\")' ><img src='images/fondbd - picto - demon0.png' width='45px' heigth='45px' alt='fond 1 de décoration de l'interface'/></label></input>"
            ."</div>"
            ."<div class='data_preferences utilisateurs table-mobile-cell' width='25%' onClick='javascript:document.getElementById(\"fond1\").checked = true;' >"
            ."<input class='preferences-radio' id='fond1' type='radio' name='fondIHM' value='1' onClick='changerCouleurFondInterface(\"1\")' ";
        CheckPreferencesFond(1);
        echo "><label for='fond1' onClick='changerCouleurFondInterface(\"1\")' ><img src='images/fondbd - picto - demon1.png' width='45px' heigth='45px' alt='fond 2 de décoration de l'interface'/></label></input>"
            ."</div>"
            ."<div class='data_preferences utilisateurs table-mobile-cell' width='25%' onClick='javascript:document.getElementById(\"fond2\").checked = true;' >"
            ."<input class='preferences-radio' id='fond2' type='radio' name='fondIHM' value='2' onClick='changerCouleurFondInterface(\"2\")' ";
        CheckPreferencesFond(2);
        echo "><label for='fond2' onClick='changerCouleurFondInterface(\"2\")' ><img src='images/fondbd - picto - demon2.png' width='45px' heigth='45px' alt='fond 3 de décoration de l'interface'/></label></input>"
            ."</div>"
            ."<div class='data_preferences utilisateurs table-mobile-cell' width='25%' onClick='javascript:document.getElementById(\"fond3\").checked = true;' >"
            ."<input class='preferences-radio' id='fond3' type='radio' name='fondIHM' value='3' onClick='changerCouleurFondInterface(\"3\")' ";
        CheckPreferencesFond(3);
        echo "><label for='fond3' onClick='changerCouleurFondInterface(\"3\")' ><img src='images/fondbd - picto - demon3.png' width='45px' heigth='45px' alt='fond 4 de décoration de l'interface'/></label></input>"
            ."</div>"
            ."<div class='data_preferences utilisateurs table-mobile-cell' width='25%' onClick='javascript:document.getElementById(\"fond4\").checked = true;' >"
            ."<input class='preferences-radio' id='fond4' type='radio' name='fondIHM' value='4' onClick='changerCouleurFondInterface(\"4\")' ";
        CheckPreferencesFond(4);
        echo "><label for='fond4' onClick='changerCouleurFondInterface(\"4\")' ><img src='images/fondbd - picto - demon4.png' width='45px' heigth='45px' alt='fond 5 de décoration de l'interface'/></label></input>"
            ."</div>"
            ."</center>";
    }

    echo"<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat de la couleur de l'interface...</p>"
            ."<center>"
            //couleur IHM
            ."<div class='data_preferences table-mobile'>"
            ."<div class='data_preferences table-mobile-row'>";

    for ($i = 0 ; $i < 26 ; $i++) {
        echo "<div class='data_preferences utilisateursInverse table-mobile-cell'>"
                    ."<input class='preferences-radio' id='couleur".$i."' type='radio' name='couleurIHM' value='".$i."' onClick='changerCouleurFondMenu(\"".$tabCouleur[$i]."\")' ";
        CheckPreferencesCouleur($i);
        echo "><label for='couleur".$i."' onClick='changerCouleurFondMenu(\"".$tabCouleur[$i]."\")' ><span style='color:".$tabCouleur[$i].";'>&#9632;</span></label></input>"
                    ."</div>";
        if ($i%9 == 8) {
            echo "</div><div class='data_preferences table-mobile-row'>";
        }
    }

    echo "</div>"
            ."</div>"
            ."</center>"

            //interface IHM
            ."<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat de l'interface modulaire...</p>"
            ."<center>"

            ."<div class='data_preferences table-mobile'>"
            ."<div class='data_preferences table-mobile-row'>";

    for ($i = 1 ; $i < 13 ; $i++) {
        echo "<div class='data_preferences utilisateursInverse table-mobile-cell' onChange='javascript: document.getElementById(\"interface".$i."\").checked = true;changerInterFace(\"".ajouterZero($i)."\",\"".$version."\");'>"
                    ."<input class='preferences-radio' id='interface".$i."' type='radio' name='interface' value='".$i."' ";
        CheckPreferencesInterfaces($i);
        echo "></input><label for='interface".$i."'><img src='images/picto-preferences/".ajouterZero($i).".png' width='60px' heigth='60px' alt='interface num&eacute;ro $i'/></label>"
                    ."</div>";
        if ($i !=12 && $i%3 == 0) {
            echo "</div><div class='data_preferences table-mobile-row'>";
        }
    }
    echo "</div>"
            ."</div>"
            ."</center>"


            //Polices GLYPHS
            ."<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat des polices typographiques de l'interface...</p>"
            ."<center>"


            ."<div class='data_preferences table-mobile'>"
            ."<div class='data_preferences table-mobile-row'>";

    for ($j = 0 ; $j < 12 ; $j++) {
        $i = $j+1;
        echo "<div class='data_preferences utilisateursInverse table-mobile-cell'>"
                    ."<input class='preferences-text' id='police".$i."' type='radio' name='polices' value='".$i."' onClick='changerTypographie(\"".ajouterZero($i)."\",\"".$version."\")' ";
        CheckPreferencesPolices($i);
        echo "><label for='police".$i."' onClick='changerTypographie(\"".ajouterZero($i)."\")'><font face='".$tabFonts[$j]."'>".$tabPolices[$j]."</font></label></input>"
                    ."</div>";
        if ($i != 12 && $i%3 == 0) {
            echo "</div><div class='data_preferences table-mobile-row'>";
        }
    }
    echo "</div>"
            ."</div>"
            ."</center>"

            //Tailles Polices
            ."<p class='utilisateursInverse' align='right'>Changement imm&eacute;diat de la taille des polices typographiques de l'interface...</p>"
            ."<center>"
            ."<div class='data_preferences table-mobile'>"
            ."<div class='data_preferences table-mobile-row'>"
            ."<div class='data_preferences utilisateursInverse table-mobile-cell' onClick='javascript:document.getElementById(\"taillepolice1\").checked = true;changerTailleTexte(1,\"".$version."\");' >"
            ."<input class='preferences-taille' id='taillepolice1' type='radio' name='tailleLecture' value='1'";
    CheckPreferencesCaracteres(1);
    echo "><label for='taillepolice1'><img style='max-width:none;' src='images/picto-preferences/text08.gif' width='30px' heigth='30px' alt='Trés Petite taille'/></label></input>"
            ."</div><div class='data_preferences utilisateursInverse table-mobile-cell' onClick='javascript:document.getElementById(\"taillepolice2\").checked = true;changerTailleTexte(2,\"".$version."\");'>"
            ."<input class='preferences-taille' id='taillepolice2' type='radio' name='tailleLecture' value='2'";
    CheckPreferencesCaracteres(2);
    echo "><label for='taillepolice2'><img style='max-width:none;' src='images/picto-preferences/text10.gif' width='30px' heigth='30px' alt='Petite taille'/></label></input>"
            ."</div><div class='data_preferences utilisateursInverse table-mobile-cell' onClick='javascript:document.getElementById(\"taillepolice3\").checked = true; changerTailleTexte(3,\"".$version."\");'>"
            ."<input class='preferences-taille' id='taillepolice3' type='radio' name='tailleLecture' value='3'";
    CheckPreferencesCaracteres(3);
    echo "><label for='taillepolice3'><img style='max-width:none;' src='images/picto-preferences/text12.gif' width='30px' heigth='30px' alt='Taille Standard'/></label></input>"
            ."</div><div class='data_preferences utilisateursInverse table-mobile-cell'onClick='javascript:document.getElementById(\"taillepolice4\").checked = true;changerTailleTexte(4,\"".$version."\");'>"
            ."<input class='preferences-taille' id='taillepolice4' type='radio' name='tailleLecture' value='4' ";
    CheckPreferencesCaracteres(4);
    echo "><label for='taillepolice4'><img style='max-width:none;' src='images/picto-preferences/text14.gif' width='30px' heigth='30px' alt='Grande taille'/></label></input>"
            ."</div><div class='data_preferences utilisateursInverse table-mobile-cell' onClick='javascript:document.getElementById(\"taillepolice5\").checked = true;changerTailleTexte(5,\"".$version."\");'>"
            ."<input class='preferences-taille' id='taillepolice5' type='radio' name='tailleLecture' value='5'";
    CheckPreferencesCaracteres(5);
    echo "><label for='taillepolice5'><img style='max-width:none;' src='images/picto-preferences/text16.gif' width='30px' heigth='30px' alt='Trés Grande taille'/></label></input>"
            ."</div>"
            ."</div>"
            ."</div>"

            ."<br /><br /><br />"

            ."<left>"
            ."<input type='submit' class='btn_modif_preferences' witdh='500px' value=\"Choisir et enregister l'interface ? pour la retrouver plus tard ...\"/>"
            ."</form>"
            ."</left>"

            ."</div>";
