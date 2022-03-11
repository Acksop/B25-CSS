<?php
echo "<header style='background:transparent; position:fixed;z-index:250' >";
AfficheIcone();
AfficheMenuV4();
AfficheSousMenuV4();
echo "</header>";
AfficheHeroV4();

if(isset($_COOKIE['fondIHM'])){
    switch( $_COOKIE['fondIHM'] ){
        case 0:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon0.png' width='1024' height='768' /></div>";
            break;
        case 1:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon1.png' width='1024' height='768' /></div>";
            break;
        case 2:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon2.png' width='1024' height='768' /></div>";
            break;
        case 3:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon3.png' width='1024' height='768' /></div>";
            break;
        case 4:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd - demon4.png' width='1024' height='768' /></div>";
            break;
        default:
            echo "<div class='imagebd'><img alt='image de fond' name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
    }
}else{
    echo "<div class='imagebd'><img name='fond_interface' src='/images/fondbd.gif' width='1024' height='768' /></div>";
}
//AfficheHrSandBoxLimiteur();




function AfficheMenuV4(){

    $net_link = PAGEB25NET;
    $com_link = PAGEB25COM;
    $wikini_link = PAGEB25WIKINI;
    $index_link = link_rewrite('index');
    $identification_link = link_rewrite('identification');
    $compte_link = link_rewrite('compte');
    $preferences_link = link_rewrite('preferences');


    $annuaire_nouveaux = link_rewrite('nouveaux');
    $annuaire_artiste = link_rewrite('artistes');
    $annuaire_association = link_rewrite('associations');
    $annuaire_sportif = link_rewrite('sportifs');
    $annuaire_compagnie = link_rewrite('compagnies');


    $couleur = recuperationCouleurInterface();
    $tabCouleur = array("#663333","#FE642E","#B45F04","#FFBF00","#F3F781","#4B610B"
    ,"#5FB404","#31B404","#81F79F","#088A4B","#00FFBF","#58FAF4"
    ,"#01A9DB","#81BEF7","#013ADF","#0B0B61","#8258FA","#4B088A"
    ,"#D358F7","#8A0886","#FA58D0","#F5A9E1","#B40431","#FFFFFF","#CCCCCC","#000000");


    echo <<<EOD

        <div id="reading-collect"><div class="progression" style="background-color:{$tabCouleur[$couleur]}"></div></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
            <div style="float:left;">
                <a class="navbar-brand" href="#">
                <img src="images/logo/besancon25.fr.png" width="33%"></a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler"
                        data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{$index_link}"><i class="fas fa-home"></i><span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           href="#"
                           id="navbarDropdown1" role="button">
        Expressions / Journalisme
                        </a>
                        <ul aria-labelledby="navbarDropdown1" class="dropdown-menu">
                            <!--<li><a class="dropdown-item" href="#">bulletin </a></li>
                            <li><a class="dropdown-item" href="#">chroniques </a></li>
                            <li><a class="dropdown-item" href="#">articles </a></li>-->
                            <li><a class="dropdown-item" href="#">breves </a></li>
                            <li><a class="dropdown-item" href="#">dossiers </a></li>
                            <!--<li><a class="dropdown-item" href="#">reportage </a></li>-->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           href="#"
                           id="navbarDropdown2" role="button">
        Annuaire
                        </a>
                        <ul aria-labelledby="navbarDropdown2" class="dropdown-menu">
EOD;

if(isset($_SESSION['id_utilisateur'])) {
    echo <<<EOD
                            <li><a class="dropdown-item" href="{$annuaire_nouveaux}">Nouveaux </a></li>
EOD;

}

    echo <<<EOD

                            <li><a class="dropdown-item" href="{$annuaire_artiste}">artiste </a></li>
                            <li><a class="dropdown-item" href="{$annuaire_artiste}">artisan </a></li>
                            <li><a class="dropdown-item" href="{$annuaire_compagnie}">compagnie </a></li>
                            <!--<li><a class="dropdown-item" href="{$annuaire_compagnie}">maisons collectives </a></li>-->
                            <li><a class="dropdown-item" href="{$annuaire_association}">association </a></li>
                            <li><a class="dropdown-item" href="{$annuaire_association}">groupe musical </a></li>
                            <li><a class="dropdown-item" href="{$annuaire_sportif}">collectif </a></li>
                            <li><a class="dropdown-item" href="{$annuaire_sportif}">sportif </a></li>
                        </ul>
EOD;

    echo <<<EOD
                    <li class="nav-item"><a class="nav-link" href="{$net_link}">Evenementiel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{$com_link}">Petites-annonces</a></li>
                    <li class="nav-item"><a class="nav-link" href="{$wikini_link}">Informations complémentaires</a></li>
                </ul>
                <div class="inline my-2 my-lg-0 p-1">
EOD;

if(!isset($_SESSION['id_utilisateur'])) {
    echo <<<EOD
                            <a class="p-3 nav-link" href="{$identification_link}">[ Réseau / Espace ] Membre</a>
EOD;

}else{

echo <<<EOD

                            <a class="p-3 nav-link" href="{$compte_link}">Bonjour {$_SESSION['identifiant']}</a>
                        </ul>
EOD;

}
echo <<<EOD
                    
                </div>
                <div class="inline my-2 my-lg-0 p-3">
                    <a class="p-3 nav-link" href="{$preferences_link}"><i class="fas fa-cog"></i></a>
                </div>
            </div>
        </nav>
    <!-- /HEADER -->
EOD;

}

function AfficheSousMenuV4(){

    echo '<div class="sous-navbar">';

    if( !$mobile ){
        echo "<span style='float:right;position:relative;top:-1px;width:25px;' class='sousmenu-liensReseautage'>"
            ."<a href='".link_rewrite('FluxRSS',false,"",array('flux'=>'RSS'))."'>"
            ."<img alt='accès flux rss' src='/images/feed-icon-16x16.png'>"
            ."</a></span>";

    }

    echo "<span style='float:right;'><a id=\"signalement\" style='top: -1px;position: relative;width:25px;' href='#'><img alt='bouton de signalement' src='/images/btn_signalement.png' width='16' height='16'></a></span>";


    /*if(!$mobile) {
        echo "</span>";
        echo "&nbsp;&nbsp;<span id='HeureDate' class='sousmenu-horloge'>" . AfficheDate() . "</span>";
    }*/

    echo "</div>";
}


function AfficheHeroV4(){

echo <<<EOD
    <!-- VEGAS HERO SLIDER -->
    <header id='en-tete' style='background:transparent;visibility:visible !important; /*position:fixed;z-index:250*/' >
    </header>
    <!-- /VEGAS HERO SLIDER -->
EOD;



    return;
}
function AfficheIcone(){
echo <<<EOF
		
<div class="b25-scene">
  <div class="b25-cube">
    <div class="cube__face cube__face--front"></div>
    <div class="cube__face cube__face--back"></div>
    <div class="cube__face cube__face--right"></div>
    <div class="cube__face cube__face--left"></div>
    <div class="cube__face cube__face--top"></div>
    <div class="cube__face cube__face--bottom"></div>
  </div>
  
  <div class="b25-link-button">
    <div class="left__btn"></div>
    <div class="front__btn"></div>
    <div class="right__btn"></div>
  </div>
</div>
		
EOF;
return;
}

function AfficheFooter_V4(){
    echo <<<EOD
        <!-- Footer SOCIAL -->
        <div>

            <!-- STAY CONNECTED-->
            <div class="row py-4 d-flex align-items-center bg-grey text-dark" style="padding-left: 5rem; padding-right: 5rem;">

                <!-- INVIT' -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Come on ! Restez connecté sur la planête des réseaux sociaux !</h6>
                </div>
                <!-- /INVIT' -->

                <!-- LINKY LINKS -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- /LINKY LINKS -->

            </div>
            <!-- /STAY CONNECTED-->

        </div>
        <!-- Footer SOCIAL -->

        <!-- Copyright -->
        <!--<div class="footer-copyright text-center text-light py-2">
            <p>
                <a href="http://infoartsmedia.fr" class="" >Info[ARTS]Media</a>
                                                    -
                <a href="http://www.1and1.fr/?kwk=20117144" class=""                                                                                                         target="_blank">1and1</a>
                <br>
                Ce site respecte les droits des Internautes régis par les articles de la loi <i>Informatique et
                Libertées</i> accessible sur le site de la <a href="http://www.cnil.fr">CNIL</a>
            </p>
        </div>-->
        <!-- Copyright -->
EOD;

}
