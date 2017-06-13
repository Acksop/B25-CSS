<?php

function choixCSScookie(){
	if(isset($_COOKIE['interfaceIHM'])){
		switch($_COOKIE['interfaceIHM']){
			case 1:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface01.css'>";
			break;
			case 2:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface02.css'>";
			break;
			case 3:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface03.css'>";
			break;
			case 4:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface04.css'>";
			break;
			case 5:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface05.css'>";
			break;
			case 6:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface06.css'>";
			break;
			case 7:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface07.css'>";
			break;
			case 8:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface08.css'>";
			break;
			case 9:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface09.css'>";
			break;
			case 10:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface10.css'>";
			break;
			case 11:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface11.css'>";
			break;
			case 12:
				echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface12.css'>";
			break;
			default:
			echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface01.css'>";
		}
	}else{
		echo "<link id='interface' type='text/css' rel='stylesheet' href='stylesCSS/interface03.css'>";
	}
	if(isset($_COOKIE['tailleLecture'])){
		switch($_COOKIE['tailleLecture']){
			case 1:
				echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture01.css'>";
			break;
			case 2:
				echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture02.css'>";
			break;
			case 3:
				echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture03.css'>";
			break;
			case 4:
				echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture04.css'>";
			break;
			case 5:
				echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture05.css'>";
			break;
			default:
			echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture01.css'>";
		}
	}else{
		echo "<link id='lecture' type='text/css' rel='stylesheet' href='stylesCSS/lecture03.css'>";
	}
	if(isset($_COOKIE['typographie'])){
		switch($_COOKIE['typographie']){
			case 1:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie01.css'>";
			break;
			case 2:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie02.css'>";
			break;
			case 3:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie03.css'>";
			break;
			case 4:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie04.css'>";
			break;
			case 5:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie05.css'>";
			break;
			case 6:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie06.css'>";
			break;
			case 7:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie07.css'>";
			break;
			case 8:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie08.css'>";
			break;
			case 9:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie09.css'>";
			break;
			case 10:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie10.css'>";
			break;
			case 11:
				echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie11.css'>";
			break;
			default:
			echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie01.css'>";
		}
	}else{
		echo "<link id='typographie' type='text/css' rel='stylesheet' href='stylesCSS/typographie01.css'>";
	}
	return(0);
}

function choixInterface($interface){
	setcookie('interfaceIHM', $interface, time()+3600*24*365, '/', '');
	return(0);
}

function choixGlyph($glyph){
	setcookie('typographie',$glyph, time()+3600*24*365, '/', '');
	return(0);
}

function choixTailleLecture($taille){
	setcookie('tailleLecture',$taille, time()+3600*24*365, '/', '');
	return(0);
}

function CheckPreferencesInterfaces($int){
	if(isset($_COOKIE['interfaceIHM'])){
		if(recuperationCookieInterface() == $int){
			echo " checked";
		}
	}else{
		if($int == 3){
		echo " checked";
		}
	}
	return;
}
function CheckPreferencesPolices($int){
	if(isset($_COOKIE['typographie'])){
		if(recuperationCookieGlyph() == $int){
			echo " checked";
		}
	}else{
		if($int == 1){
		echo " checked";
		}
	}
	return;
}
function CheckPreferencesCaracteres($int){
	if(isset($_COOKIE['tailleLecture'])){
		if(recuperationCookieTailleLecture() == $int){
			echo " checked";
		}
	}else{
		if($int == 3){
		echo " checked";
		}
	}
	return;
}

function recuperationCookieInterface(){
	if(isset($_COOKIE['interfaceIHM'])){return($_COOKIE['interfaceIHM']);}else{return 5;};
}

function recuperationCookieGlyph(){
	if(isset($_COOKIE['typographie'])){return($_COOKIE['typographie']);}else{return 1;};
}

function recuperationCookieTailleLecture(){
	if(isset($_COOKIE['tailleLecture'])){return($_COOKIE['tailleLecture']);}else{return 3;};
}

?>
