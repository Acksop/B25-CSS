<?php

function LancerAffichageDuCorps(){
	echo "<table align='center' border='0'><tr><td colspan='2' class='utilisateurs'><p class='titre'>Mes Preferences d'IHM - Interface Homme Machine</p>";
	echo "<p align='right'>Vous pouvez choisir, comment doit &ecirc;tre affich&eacute; les diff&eacute;rents &eacute;l&eacute;ments du site Besan&ccedil;on25, ainsi que la police et la taille des caract&egrave;res du texte.<br />&nbsp;</p>";
	echo "<form method='post' name='changementPreferences' action='controlleurs/traitementPreferences.php'>"
		."</td></tr><tr><td rowspan='2' class='utilisateursInverse'>"
			//interface IHM
			."<table border='0'><tr><td>"
			."<input type='radio' name='interface' value='1' onClick='changerInterFace(\"01\")' ";
			CheckPreferencesInterfaces(1);
			echo ">&raquo;<img src='images/picto-preferences/01.png' width='60px' heigth='60px' alt='Premi�re interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='2' onClick='changerInterFace(\"02\")' ";
			CheckPreferencesInterfaces(2);
			echo ">&raquo;<img src='images/picto-preferences/02.png' width='60px' heigth='60px' alt='Deuxi�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='3' onClick='changerInterFace(\"03\")' ";
			CheckPreferencesInterfaces(3);
			echo ">&raquo;<img src='images/picto-preferences/03.png' width='60px' heigth='60px' alt='Troisi�me interface'/></input>"
			."</td></tr><tr><td>"
			."<input type='radio' name='interface' value='4' onClick='changerInterFace(\"04\")' ";
			CheckPreferencesInterfaces(4);
			echo ">&raquo;<img src='images/picto-preferences/04.png' width='60px' heigth='60px' alt='Quatri�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='5' onClick='changerInterFace(\"05\")' ";
			CheckPreferencesInterfaces(5);
			echo ">&raquo;<img src='images/picto-preferences/04v.png' width='60px' heigth='60px' alt='Cinqui�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='6' onClick='changerInterFace(\"06\")' ";
			CheckPreferencesInterfaces(6);
			echo ">&raquo;<img src='images/picto-preferences/08.png' width='60px' heigth='60px' alt='Sixi�me interface'/></input>"
			."</td></tr><tr><td>"
			."<input type='radio' name='interface' value='7' onClick='changerInterFace(\"07\")' ";
			CheckPreferencesInterfaces(7);
			echo ">&raquo;<img src='images/picto-preferences/05.png' width='60px' heigth='60px' alt='Septi�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='8' onClick='changerInterFace(\"08\")' ";
			CheckPreferencesInterfaces(8);
			echo ">&raquo;<img src='images/picto-preferences/06.png' width='60px' heigth='60px' alt='Huiti�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='9' onClick='changerInterFace(\"09\")' ";
			CheckPreferencesInterfaces(9);
			echo ">&raquo;<img src='images/picto-preferences/07.png' width='60px' heigth='60px' alt='Neuvi�me interface'/></input>"
			."</td></tr><tr><td>"
			."<input type='radio' name='interface' value='10' onClick='changerInterFace(\"10\")' ";
			CheckPreferencesInterfaces(10);
			echo ">&raquo;<img src='images/picto-preferences/09.png' width='60px' heigth='60px' alt='Dixi�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='11' onClick='changerInterFace(\"11\")' ";
			CheckPreferencesInterfaces(11);
			echo ">&raquo;<img src='images/picto-preferences/10.png' width='60px' heigth='60px' alt='Onzi�me interface'/></input>"
			."</td><td>"
			."<input type='radio' name='interface' value='12' onClick='changerInterFace(\"12\")' ";
			CheckPreferencesInterfaces(12);
			echo ">&raquo;<img src='images/picto-preferences/11.png' width='60px' heigth='60px' alt='Douzi�me interface'/></input>"
			."</td></tr>"
			."</table>"
		."</td><td  class='utilisateurs'>"
			//Polices GLYPHS 
			."<table border='1'><tr><td align='left'>"
			."<input type='radio' name='polices' value='1' onClick='changerTypographie(\"01\")' ";
			CheckPreferencesPolices(1);
			echo "><font face='arial'>Arial</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='2' onClick='changerTypographie(\"02\")' ";
			CheckPreferencesPolices(2);
			echo "><font face='Comic Sans MS'>Comic Sans MS</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='3' onClick='changerTypographie(\"03\")' ";
			CheckPreferencesPolices(3);
			"><font face='Verdana'>Verdana</font></input>"
			."</td></tr><tr><td align='left'>"
			."<input type='radio' name='polices' value='4' onClick='changerTypographie(\"04\")' ";
			CheckPreferencesPolices(4);
			echo "><font face='Helvetica'>Helvetica</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='5' onClick='changerTypographie(\"05\")' ";
			CheckPreferencesPolices(5);
			echo "><font face='Monospace'>Monospace</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='6' onClick='changerTypographie(\"06\")' ";
			CheckPreferencesPolices(6);
			echo "><font face='Garamond'>Garamond</font></input>"
			."</td></tr><tr><td align='left'>"
			."<input type='radio' name='polices' value='7' onClick='changerTypographie(\"07\")' ";
			CheckPreferencesPolices(7);
			echo "><font face='symbol'>Symbol</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='8' onClick='changerTypographie(\"08\")' ";
			CheckPreferencesPolices(8);
			echo"><font face='Times New Roman'>Times new roman</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='9' onClick='changerTypographie(\"09\")' ";
			CheckPreferencesPolices(9);
			echo "><font face='Courier New'>Courier New</font></input>"
			."</td></tr><tr><td align='left'>"
			."<input type='radio' name='polices' value='10' onClick='changerTypographie(\"10\")' ";
			CheckPreferencesPolices(10);
			echo "><font face='Impact'>Impact</font></input>"
			."</td><td align='left'>"
			."<input type='radio' name='polices' value='11' onClick='changerTypographie(\"11\")' ";
			CheckPreferencesPolices(11);
			echo "><font face='Webdings'>Webdings</font></input>"
			."</td></tr>"
			."</table>"
		."</td></tr><tr><td>"
			."<table border='0'><tr><td class='utilisateurs'>"
			."<input type='radio' name='tailleLecture' value='1' onClick='changerTailleTexte(1)'";
			CheckPreferencesCaracteres(1);
			echo ">&raquo;<img src='images/picto-preferences/text08.gif' width='30px' heigth='30px' alt='Tr�s Petite taille'/></input>"
			."</td><td class='utilisateurs'>"
			."<input type='radio' name='tailleLecture' value='2' onClick='changerTailleTexte(2)'";
			CheckPreferencesCaracteres(2);
			echo ">&raquo;<img src='images/picto-preferences/text10.gif' width='30px' heigth='30px' alt='Petite taille'/></input>"
			."</td><td class='utilisateurs'>"
			."<input type='radio' name='tailleLecture' value='3' onClick='changerTailleTexte(3)'";
			CheckPreferencesCaracteres(3);
			echo ">&raquo;<img src='images/picto-preferences/text12.gif' width='30px' heigth='30px' alt='taille Standard'/></input>"
			."</td><td class='utilisateurs'>"
			."<input type='radio' name='tailleLecture' value='4' onClick='javascript:changerTailleTexte(4)'";
			CheckPreferencesCaracteres(4);
			echo ">&raquo;<img src='images/picto-preferences/text14.gif' width='30px' heigth='30px' alt='Grande taille'/></input>"
			."</td><td class='utilisateurs'>"
			."<input type='radio' name='tailleLecture' value='5' onClick='javascript:changerTailleTexte(5)'";
			CheckPreferencesCaracteres(5);
			echo ">&raquo;<img src='images/picto-preferences/text16.gif' width='30px' heigth='30px' alt='Tr�s Grande taille'/></input>"
			."</td><td>&nbsp;</td></tr>"
			."</table>"
		."</td></tr><tr><td colspan='2' align='right'>"
		."<input type='submit' class='btn_modif_preferences' witdh='500px' value=\"Choisir et enregister l'interface ? pour la retrouver plus tard ...\"/>"
		."</td></table>"
	      ."</form>";
	return(0);
}
