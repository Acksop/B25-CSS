<?php

if (DEV_verificationINCLUSIONS) {
    $page = explode("/", __FILE__);
    $fichier_inclus = array_pop($page);
    echo $fichier_inclus." >>> OK!";
}

function setANewCookie($name,$value,$options){
	if (version_compare(phpversion(), '6.0.0', '<')) {
		setcookie($name,$value,$options['expires'], $options['path'].'; samesite='.$options['samesite'],$options['domain'], $options['secure'], $options['httponly']);
	}else{
		setcookie($name,$value,$options);
	}
}

function getLastParamCookie(){
	 $arr_cookie_options = array(
        'expires' => time()+3600*24*365,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'], // leading dot for compatibility or use subdomain
        'secure' => false,     // or false
        'httponly' => false,    // or false
        'samesite' => 'Lax' // None || Lax  || Strict
    );
	return $arr_cookie_options;
}


function estActifOuPasDoNotTrackHeader()
{
    $DoNotTrackHeader = "DNT";
    $DoNotTrackValue = "1";

    $phpHeader = "HTTP_" . strtoupper(str_replace("-", "_", $DoNotTrackHeader));

    //if(!isset($_COOKIE['CookieApp_CO'])){return TRUE;}

    if ((array_key_exists($phpHeader, $_SERVER)) and ($_SERVER[$phpHeader] == $DoNotTrackValue)) {
        // Do Not Track is enabled
        return true;
    } else {
        // Do Not Track is not enabled
        return false;
    }
}

function existeOupasLeCookie($nom)
{
    if (estActifOuPasDoNotTrackHeader()) {
        return false;
    }
    return isset($_COOKIE[$nom]);
}


function ajouterZero($nb)
{
    if ((int)$nb < 10) {
        return '0'.(int)$nb;
    }
    return $nb;
}


function choixPreferenceCookiesNatif($analyse, $tiers, $fonctionnels, $obligatoire)
{
    $arr_cookie_options = getLastParamCookie();

    setANewCookie('CookieApp_CA', $analyse, $arr_cookie_options);
    setANewCookie('CookieApp_CT', $tiers, $arr_cookie_options);
    setANewCookie('CookieApp_CF', $fonctionnels, $arr_cookie_options);
    setANewCookie('CookieApp_CO', $obligatoire, $arr_cookie_options);
}

function choixPreferenceCookies(
    $Analytics,
    $Adsense,
    $Hotjar,
    $Segment,
    $Piwik,
    $FlagCounter,
    $btn_Google,
    $btn_Facebook,
    $btn_Twitter,
    $btn_linkedLn,
    $links_ebay,
    $links_linkbucks,
    $comment_Disqus,
    $comment_Facebook,
    $CookieApp_ihm,
    $CookieApp_article,
    $CookieApp_commentaires,
    $CookieApp_i110n,
    $CookieApp_leCookie
) {
    $arr_cookie_options = getLastParamCookie();

    setANewCookie('CookieApp_CA_Ganalytics', $Analytics, $arr_cookie_options);
    setANewCookie('CookieApp_CA_Gadverts', $Adsense, $arr_cookie_options);
    setANewCookie('CookieApp_CA_HotJar', $Hotjar, $arr_cookie_options);
    setANewCookie('CookieApp_CA_SegmentApp', $Segment, $arr_cookie_options);
    setANewCookie('CookieApp_CA_Piwik', $Piwik, $arr_cookie_options);
    setANewCookie('CookieApp_CA_FlagCounter', $FlagCounter, $arr_cookie_options);
    setANewCookie('CookieApp_CT_Google', $btn_Google, $arr_cookie_options);
    setANewCookie('CookieApp_CT_Facebook', $btn_Facebook, $arr_cookie_options);
    setANewCookie('CookieApp_CT_Twitter', $btn_Twitter, $arr_cookie_options);
    setANewCookie('CookieApp_CT_LinkedIn', $btn_linkedLn, $arr_cookie_options);
    setANewCookie('CookieApp_CT_Hyperlien_ebay', $links_ebay, $arr_cookie_options);
    setANewCookie('CookieApp_CT_Hyperlien_linkbucks', $links_linkbucks, $arr_cookie_options);
    setANewCookie('CookieApp_CT_CommentairesDisqus', $comment_Disqus, $arr_cookie_options);
    setANewCookie('CookieApp_CT_CommentairesFacebook', $comment_Facebook, $arr_cookie_options);
    setANewCookie('CookieApp_CF_IHM', $CookieApp_ihm, $arr_cookie_options);
    setANewCookie('CookieApp_CF_HomeBreve', $CookieApp_article, $arr_cookie_options);
    setANewCookie('CookieApp_CF_Commentaires', $CookieApp_commentaires, $arr_cookie_options);
    setANewCookie('CookieApp_CF_i110n_Gtranslate', $CookieApp_i110n, $arr_cookie_options);
    setANewCookie('CookieApp_CO_LeCookie', $CookieApp_leCookie, $arr_cookie_options);
}

function recuperationPreferenceCookie($nomCookie)
{
    if (isset($_COOKIE[$nomCookie])) {
        return($_COOKIE[$nomCookie]);
    } else {
        return 1;
    };
}

function recuperationToutTypeCookie($nomCookie)
{
    if (isset($_COOKIE[$nomCookie])) {
        return($_COOKIE[$nomCookie]);
    } else {
        return null;
    };
}

function choixVersion($version)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('versionIHM', $version, $arr_cookie_options);
    return(0);
}

function choixTemperature($version)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('celsiusIHM', $version, $arr_cookie_options);
    return(0);
}

function choixCouleur($couleur)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('couleurIHM', $couleur, $arr_cookie_options);
    return(0);
}

function choixFond($fond)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('fondIHM', $fond, $arr_cookie_options);
    return(0);
}

function choixInterface($interface)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('interfaceIHM', $interface, $arr_cookie_options);
    return(0);
}

function choixGlyph($glyph)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('typographie', $glyph, $arr_cookie_options);
    return(0);
}

function choixTailleLecture($taille)
{
    $arr_cookie_options = getLastParamCookie();
    setANewCookie('tailleLecture', $taille, $arr_cookie_options);
    return(0);
}

function CheckPreferencesInterfaces($int)
{
    if (isset($_COOKIE['interfaceIHM'])) {
        if (recuperationCookieInterface() == $int) {
            echo " checked";
        }
    } else {
        if ($int == 10) {
            echo " checked";
        }
    }
    return;
}

function CheckPreferencesFond($int)
{
    if (isset($_COOKIE['fondIHM'])) {
        if (recuperationCookieFond() == $int) {
            echo " checked";
        }
    } else {
        if ($int == 0) {
            echo " checked";
        }
    }
    return;
}

function CheckPreferencesCouleur($int)
{
    if (isset($_COOKIE['couleurIHM'])) {
        if (recuperationCouleurInterface() == $int) {
            echo " checked";
        }
    } else {
        if ($int == 22) {
            echo " checked";
        }
    }
    return;
}

function CheckPreferencesPolices($int)
{
    if (isset($_COOKIE['typographie'])) {
        if (recuperationCookieGlyph() == $int) {
            echo " checked";
        }
    } else {
        if ($int == 0) {
            echo " checked";
        }
    }
    return;
}
function CheckPreferencesCaracteres($int)
{
    if (isset($_COOKIE['tailleLecture'])) {
        if (recuperationCookieTailleLecture() == $int) {
            echo " checked";
        }
    } else {
        if ($int == 2) {
            echo " checked";
        }
    }
    return;
}
function CheckPreferencesVersion($int)
{
    if (isset($_COOKIE['versionIHM'])) {
        if (recuperationCookieVersionInterface() == $int) {
            echo " checked";
        }
    } else {
        if (detection_mobile()) {
            echo " checked";
        } elseif ($int == 2) {
            echo " checked";
        }
    }
    return;
}
function CheckPreferencesTemperatureInterface($int)
{
    if (isset($_COOKIE['celsiusIHM'])) {
        if (recuperationCookieVersionTemperatureInterface() == $int) {
            echo " checked";
        }
    } else {
        if (detection_mobile()) {
            echo " checked";
        } elseif ($int == 2) {
            echo " checked";
        }
    }
    return;
}
function recuperationCookieVersionInterface()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 2;
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        if (detection_mobile()) {
            return 1;
        } else {
            return 3;
        }
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        if (detection_mobile()) {
            return 1;
        } else {
            return 1;
        }
    }
    if (isset($_COOKIE['versionIHM'])) {
        return($_COOKIE['versionIHM']);
    } else {
        if (detection_mobile()) {
            return 1;
        } else {
            return 3;
        }
    }
}
function recuperationCookieVersionTemperatureInterface()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 'gray';
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        return 'gray';
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 'gray';
    }
    if (isset($_COOKIE['celsiusIHM'])) {
        return($_COOKIE['celsiusIHM']);
    } else {
        return 'gray';
    };
}
function recuperationCouleurInterface()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return rand(0, 25);
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        return 23;
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 24;
    }
    if (isset($_COOKIE['couleurIHM'])) {
        return($_COOKIE['couleurIHM']);
    } else {
        return 22;
    };
}

function recuperationCookieInterface()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 1;
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        if (detection_mobile()) {
            return 5;
        } else {
            return 3;
        }
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        if (detection_mobile()) {
            return 5;
        } else {
            return 3;
        }
    }
    if (isset($_COOKIE['interfaceIHM'])) {
        return($_COOKIE['interfaceIHM']);
    } else {
        if (detection_mobile()) {
            return 5;
        } else {
            return 3;
        }
    }
}

function recuperationCookieFond()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 2;
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        return 1;
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 2;
    }
    if (isset($_COOKIE['fondIHM'])) {
        return($_COOKIE['fondIHM']);
    } else {
        return 2;
    };
}
function recuperationCookieTemperature()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 'gray';
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        return 'gray';
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 'gray';
    }
    if (isset($_COOKIE['celsiusIHM'])) {
        return($_COOKIE['celsiusIHM']);
    } else {
        return 'gray';
    };
}

function recuperationCookieGlyph()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 4;
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        return 3;
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 4;
    }
    if (isset($_COOKIE['typographie'])) {
        return($_COOKIE['typographie']);
    } else {
        return 4;
    };
}

function recuperationCookieTailleLecture()
{
    if (estActifOuPasDoNotTrackHeader()) {
        return 3;
    }
    if ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 1)
        &&
        (isset($_COOKIE['CookieApp_CF_IHM']) && $_COOKIE['CookieApp_CF_IHM'] == 0)
    ) {
        if (detection_mobile()) {
            return 3;
        } else {
            return 3;
        }
    } elseif ((isset($_COOKIE['CookieApp_CF']) && $_COOKIE['CookieApp_CF'] == 0)) {
        return 4;
    }
    if (isset($_COOKIE['tailleLecture'])) {
        return($_COOKIE['tailleLecture']);
    } else {
        if (detection_mobile()) {
            return 3;
        } else {
            return 3;
        }
    }
}
