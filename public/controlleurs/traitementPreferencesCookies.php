<?php

session_start();
include(dirname(__DIR__).'/fonctionCourante.php');


if (isset($_POST['accept'])) {
    if ($_POST['accept'] == 0) {
        choixPreferenceCookiesNatif(0, 0, 0, 1);
        choixPreferenceCookies(
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            1,
            1,
            1,
            1,
            1
        );
		/*echo "<br/><br/><br/><br/><br/><pre>";
		print_r($_COOKIE);
		echo "</pre>";*/
        header("location: ".link_rewrite('preferences', false)."#cookies");
        die();
    } else {
        choixPreferenceCookiesNatif(1, 1, 1, 1);
        choixPreferenceCookies(
            1,
            1,
            1,
            1,
            1,
            1,
            0,
            0,
            0,
            0,
            1,
            1,
            1,
            0,
            1,
            1,
            1,
            1,
            1
        );
		/*echo "<br/><br/><br/><br/><br/><pre>";
		print_r($_COOKIE);
		echo "</pre>";*/
        header("location: ".$_SERVER['HTTP_REFERER']);
        die();
    }
}

if (isset($_POST['CookiesAnalyse'])) {
    $CookiesAnalyse = $_POST['CookiesAnalyse'];
    if (isset($_POST['CA_analytics'])) {
        $CA_analytics = $_POST['CA_analytics'];
    } else {
        $CA_analytics = 0;
    }
    if (isset($_POST['CA_adsense'])) {
        $CA_adsense = $_POST['CA_adsense'];
    } else {
        $CA_adsense = 0;
    }
    if (isset($_POST['CA_hotjar'])) {
        $CA_hotjar = $_POST['CA_hotjar'];
    } else {
        $CA_hotjar = 0;
    }
    if (isset($_POST['CA_segment'])) {
        $CA_segment = $_POST['CA_segment'];
    } else {
        $CA_segment = 0;
    }
    if (isset($_POST['CA_piwik'])) {
        $CA_piwik = $_POST['CA_piwik'];
    } else {
        $CA_piwik = 0;
    }
    if (isset($_POST['CA_flagcounter'])) {
        $CA_flagcounter = $_POST['CA_flagcounter'];
    } else {
        $CA_flagcounter = 0;
    }
} else {
    $CookiesAnalyse = 0;
    $CA_analytics = 0;
    $CA_adsense = 0;
    $CA_hotjar = 0;
    $CA_segment = 0;
    $CA_piwik = 0;
    $CA_flagcounter = 0;
}

if (isset($_POST['CookiesTiers'])) {
    $CookiesTiers = $_POST['CookiesTiers'];
    if (isset($_POST['CT_Google'])) {
        $CT_Google = $_POST['CT_Google'];
    } else {
        $CT_Google = 0;
    }
    if (isset($_POST['CT_Twitter'])) {
        $CT_Twitter = $_POST['CT_Twitter'];
    } else {
        $CT_Twitter = 0;
    }
    if (isset($_POST['CT_Facebook'])) {
        $CT_Facebook = $_POST['CT_Facebook'];
    } else {
        $CT_Facebook = 0;
    }
    if (isset($_POST['CT_LinkedIn'])) {
        $CT_LinkedIn = $_POST['CT_LinkedIn'];
    } else {
        $CT_LinkedIn = 0;
    }

    if (isset($_POST['CT_Hyperlien_ebay'])) {
        $CT_ebay = $_POST['CT_Hyperlien_ebay'];
    } else {
        $CT_ebay = 0;
    }
    if (isset($_POST['CT_Hyperlien_linkbucks'])) {
        $CT_linkbucks = $_POST['CT_Hyperlien_linkbucks'];
    } else {
        $CT_linkbucks = 0;
    }

    if (isset($_POST['CT_Commentaires_Disqus'])) {
        $CT_Commentaires_Disqus = $_POST['CT_Commentaires_Disqus'];
    } else {
        $CT_Commentaires_Disqus = 0;
    }
    if (isset($_POST['CT_Commentaires_Facebook'])) {
        $CT_Commentaires_Facebook = $_POST['CT_Commentaires_Facebook'];
    } else {
        $CT_Commentaires_Facebook = 0;
    }
} else {
    $CookiesTiers = 0;
    $CT_Google = 0;
    $CT_Twitter = 0;
    $CT_Facebook = 0;
    $CT_LinkedIn = 0;
    $CT_ebay = 0;
    $CT_linkbucks = 0;
    $CT_Commentaires_Disqus = 0;
    $CT_Commentaires_Facebook = 0;
}

if (isset($_POST['CookiesFonctionnels'])) {
    $CookiesFonctionnels = $_POST['CookiesFonctionnels'];
    if (isset($_POST['CF_HomeBreve'])) {
        $CF_HomeBreve = $_POST['CF_HomeBreve'];
    } else {
        $CF_HomeBreve = '0';
    }
    if (isset($_POST['CF_Interfaces'])) {
        $CF_Interfaces = $_POST['CF_Interfaces'];
    } else {
        $CF_Interfaces = 0;
    }
    if (isset($_POST['CF_Commentaires'])) {
        $CF_Commentaires = $_POST['CF_Commentaires'];
    } else {
        $CF_Commentaires = 0;
    }
    if (isset($_POST['CF_i110n_Gtranslate'])) {
        $CF_i110n = $_POST['CF_i110n_Gtranslate'];
    } else {
        $CF_i110n = 0;
    }
} else {
    $CookiesFonctionnels = 0;
    if (isset($_POST['CF_HomeBreve'])) {
        $CF_HomeBreve = $_POST['CF_HomeBreve'];
    } else {
        if (isset($_COOKIE['CookieApp_CF_HomeBreve'])) {
            $CF_HomeBreve = $_COOKIE['CookieApp_CF_HomeBreve'];
        } else {
            $CF_HomeBreve = 0;
        }
    }

    $CF_Interfaces = 0;
    $CF_Commentaires = 0;
    $CF_i110n = 0;
}


    $LeCookieObligatoire = 1;
    if (isset($_POST['CO_LeCookie'])) {
        $CO_LeCookie = $_POST['CO_LeCookie'];
    } else {
        $CO_LeCookie = 0;
    }


        choixPreferenceCookiesNatif($CookiesAnalyse, $CookiesTiers, $CookiesFonctionnels, $LeCookieObligatoire);
        choixPreferenceCookies(
            $CA_analytics,
            $CA_adsense,
            $CA_hotjar,
            $CA_segment,
            $CA_piwik,
            $CA_flagcounter,
            $CT_Google,
            $CT_Facebook,
            $CT_Twitter,
            $CT_LinkedIn,
            $CT_ebay,
            $CT_linkbucks,
            $CT_Commentaires_Disqus,
            $CT_Commentaires_Facebook,
            $CF_Interfaces,
            $CF_HomeBreve,
            $CF_Commentaires,
            $CF_i110n,
            $CO_LeCookie
        );

header("location: ".link_rewrite('preferences', false)."#cookies");
