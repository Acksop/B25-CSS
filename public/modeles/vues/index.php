<?php


global $header_title,$header_description,$header_identifier_url,$header_keywords;
$header_title = "Besançon 25 - La plate-Forme de Besançon - v" . VERSION . " - " . USER_VERSION . " version";
$header_description = "Site pour les artistes/Artisans et les Groupes/Associations de Besançon et de la région Franche-comté";
//$header_identifier_url = PAGEB25FR."homepage";
$header_keywords = "Journal, Doubs, Besançon, Besancon, 25000, 25, artiste, artistes, artisan, artisans, association, associations, article, articles, dossier, dossiers, arts, art";
$header_author = "Emmanuel ROY & More !";


function LancerAffichageDuCorps()
{
    ChargementAsyncroneScript_CSS(
        <<<EOD
    <link href="/assets/css/plugins.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
EOD
    );

    ChargementAsyncroneScript_CSS(
        <<<EOD
<style>
    @media (max-width: 757px) {
        div{
         /*width: 100% !important;*/
        margin: 0px !important;
        padding: 0px !important;
        }
        h2{
         width: 320px !important;
        margin: 0px !important;
        padding: 0px !important;
        }
        h3{
         width: 320px !important;
        margin: 0px !important;
        padding: 0px !important;
        }
        div.corps {
            width: 100% !important;
        }
        #contenu {
          width: 100% !important;
        }
        div.contenu {
            width: 100% !important;
        }
        #contenu-principal {
          width: 100% !important;
          /*padding: 20px !important;*/
        }
        .container {
            width: 100% !important;
        }
        .background-white {
            height:4500px !important;
        }
        .piedDePage{
            margin: 0px !important;
        }
        .seperator.seperator-small,
        .separator.seperator-small {
          width: 10%;
          margin: 5px auto; 
          display: none;
        }

    }
</style>
EOD
    );

    //on affiche la dernière bréve en cas de première visite sur le site
    if (isset($_SESSION['FirstVisit']) && $_SESSION['FirstVisit'] == false) {
        $modeLecture = recuperationModeLectureBreveAccueil();
    } else {
        $dateActuelle = new DateTime('NOW');
        $breve = recuperationDerniereBreve();
        $dateArticle = recupererDateFromDateArticle($breve['date']);
        if ($dateArticle === false) {
            $dateArticle = new DateTime('NOW');
            $dateArticle->modify('-14 day');
        }
        $dateArticle->modify('+7 day');
        if ($dateArticle < $dateActuelle) {
            $modeLecture = recuperationModeLectureBreveAccueil();
        } else {
            $modeLecture = 'dernier';
        }
    }

    //echo "<div style='position:relative;top: 25px; left: 675px;'>";

    /**
     *  CELLULE DES IMAGES CONCERNANT LA SOURIS
     */

    /*ChargementAsyncroneScript_ECMA(<<<EOF

    <script language='javascript'>

        function survolSouris( flag ){
            var souris = selectionnerDIVimage('souris');
            if( flag ){
                souris.src=sourisNoel_hover;
            }else{
                souris.src=sourisNoel;
            }
            return;
        }

        </script>
    EOF
    );
    echo <<<EOF
    <script language='javascript'>
        sourisNoel = new Image();
        sourisNoel = '/images/NouvelAn/2015/souris de noel.png';
        sourisNoel_hover = new Image();
        sourisNoel_hover = '/images/NouvelAn/2015/souris de noel_clindoeil.png';
    </script>
    EOF;*/
    //echo "<img id='souris' src='/images/NouvelAn/2015/sourisDeNoel.png' onMouseOver='survolSouris(true)' onMouseOut='survolSouris(false)' width='50px' height='50px' style='position: absolute; display: block; top: -285px; left: 150px;' >";


    /**
     *  CELLULE DES IMAGES CONCERNANT LE RAGONDIN
     */

    /*ChargementAsyncroneScript_ECMA(<<<EOF

    <script language='javascript'>

        function survolRagondin( flag ){
            var ragondin = selectionnerDIVimage('sourise');
            if( flag ){
                ragondin.src=ragondinNoel_hover;
            }else{
                ragondin.src=ragondinNoel;
            }
            return;
        }

        </script>
    EOF
    );

    echo <<<EOF
    <script language='javascript'>
        ragondinNoel = new Image();
        ragondinNoel = '/images/NouvelAn/2019/Ragondin_noel.png';
        ragondinNoel_hover = new Image();
        ragondinNoel_hover = '/images/NouvelAn/2019/Ragondin_noel_hover.png';
    </script>
    EOF;*/
    //echo "<img id='sourise' src='/images/NouvelAn/2019/Ragondin_noel.png' onMouseOver='survolRagondin(true)' onMouseOut='survolRagondin(false)' width='182px' height='165px' style='position: absolute; display: block; top: -346px; left: 216px;' >";
    /**
     *  CELLULE DES IMAGES CONCERNANT LE CHAT
     */

    /*ChargementAsyncroneScript_ECMA(<<<EOF

    <script language='javascript'>

        function survolPitiChaton( flag ){
            var pitichat = selectionnerDIVimage('yourouchat');
            if( flag ){
                pitichat.src=kittenNoel_hover;
            }else{
                pitichat.src=kittenNoel;
            }
            return;
        }

        </script>
    EOF
    );

    echo <<<EOF
    <script language='javascript'>
        kittenNoel = new Image();
        kittenNoel = '/images/NouvelAn/2019/kitten_noel.png';
        kittenNoel_hover = new Image();
        kittenNoel_hover = '/images/NouvelAn/2019/kitten_noel_hover.png';
    </script>
    EOF;*/
    //echo "<img id='yourouchat' src='/images/NouvelAn/2019/kitten_noel.png' onMouseOver='survolPitiChaton(true)' onMouseOut='survolPitiChaton(false)' width='125px' height='125px' style='position: absolute; display: block; top: -346px; left: 200px;' >";

    /**
     *  CELLULE DES IMAGES CONCERNANT LA GERBILLE
     */

    /*ChargementAsyncroneScript_ECMA(<<<EOF

    <script language='javascript'>

        function survolGerbille( flag ){
            var gerbille = selectionnerDIVimage('gerebelle');
            if( flag ){
                gerbille.src=gerbilleNoel_hover;
            }else{
                gerbille.src=gerbilleNoel;
            }
            return;
        }

        </script>
    EOF
    );

    echo <<<EOF
    <script language='javascript'>
        gerbilleNoel = new Image();
        gerbilleNoel = '/images/NouvelAn/2019/gerboise_noel_inv.png';
        gerbilleNoel_hover = new Image();
        gerbilleNoel_hover = '/images/NouvelAn/2019/gerboise_noel_inv_hover.png';
    </script>
    EOF;*/
    //echo "<img id='gerebelle' src='/images/NouvelAn/2019/gerboise_noel_inv.png' onMouseOver='survolGerbille(true)' onMouseOut='survolGerbille(false)' width='110px' height='144px' style='position: absolute; display: block; top: -300px; left: 150px;' >";

    //echo "</div>";

    /**
     *  CELLULE DES IMAGES CONCERNANT LES ATTENTATS
     */


    //echo "<img src='/images/NouvelAn/2015/sourisDeNoel_clindoeil.png' width='100px' height='100px' style='position: relative; display: block; top: 400px; left: 675px;' >";
    //echo "<img src='/images/NouvelAn/2015/neige.png' width='800px' height='200px' style='position: relative; display: block; top: 25px; left: 10px;' >";
    //echo "<img src='/images/NouvelAn/2015/bandeauNeige.png' width='800px' height='200px' style='position: relative; display: block; top: 80px; left: 10px;' >";
    //echo "<img src='/images/Hors-serie/CharlieHebdo-Attentat07012015/iamcharlie.png' alt='Attentat dans les locaux de Charlie Hebdo' width='302px' height='420px' style='position: relative; display: block; top: 110px; left: 20px;' >";
    //echo "<img src='/images/Hors-serie/CharlieHebdo-Attentat07012015/iamcharlie_1.gif' alt='Attentat dans les locaux de Charlie Hebdo' width='302px' height='420px' style='position: relative; display: block; top: 110px; left: 20px;' >";
    //echo "<img src='/images/Hors-serie/CharlieHebdo-Attentat07012015/iamcharlie_2.gif' alt='Attentat dans les locaux de Charlie Hebdo' width='302px' height='420px' style='position: relative; display: block; top: 110px; left: 20px;' >";
    //echo "<img src='/images/Hors-serie/CharlieHebdo-Attentat07012015/iamcharlie_3.gif' alt='Attentat dans les locaux de Charlie Hebdo' width='302px' height='420px' style='position: relative; display: block; top: 110px; left: 20px;' >";
    //echo "<div style='position: relative; display:block;'>";
    //echo "<img src='/images/Hors-serie/CharlieHebdo-Attentat07012015/iamcharlie_3.gif' alt='Attentat dans les locaux de Charlie Hebdo' width='302px' height='420px' style='position: absolute; display: block; top: -318px; left: 20px;' >";
    //echo "<img src='/images/Hors-serie/logo-Charlie10moisApres.png' alt='Attentat en six endroits de paris au même moment' width='' style='position: absolute; display: block; top: -518px; left: 120px;'>";
    //echo "<img src='/images/Hors-serie/lapinde%20pâques-small.png' alt='Attentat cumulés nigeria et bruxelles' width='60%' style='position: absolute; display: block; top: -518px; left: 390px;'>";
    //echo "</div>";
    /**
     *  TIMBRES ACTIVITES ANORMALE -ENDED
     */


    /*cadreMultiplesDebut(2);
    cadreMultiplesFin(2);*/

    $linkInscription = \B25\Classe\Url::link_rewrite('inscription');
    $linkPhpList = \B25\Classe\Url::link_rewrite('php_list',false,false,array("p"=>"subscribe","id"=>"1"));
    $linkPhpList = "/modeles/_App/phplist-3.5.2/public_html/lists/index.php?p=subscribe&id=1";

    $linkWikini = PAGEB25WIKINI;
    $linkCom = PAGEB25COM . DIRECTORY_SEPARATOR . 'index.php?page=ecritureAnnonce';
    $linkNet = PAGEB25NET . DIRECTORY_SEPARATOR . 'index.php?page=ecritureEvenement';

    echo <<<EOD
<!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
            <!-- Slide 1 -->
            <div class="slide kenburns" style="background-image:url('');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Avec le B25</span>
                        <h2 class="text-dark">Améliorer votre présence sur Internet</h2>
                        <a class="btn" href="$linkInscription">Créer un compte sur le B25</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url('');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Avec le B25 </span>
                        <h2 class="text-dark">Exister autre part sur le Web</h2>
                        <h6 class="text-dark">Explorer <br> les fonctionnalités</h6>
                        <a class="btn" href="$linkWikini">Voir le wikini</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
            <!-- Slide 5 -->
            <div class="slide kenburns" style="background-image:url('');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Avec le B25 </span>
                        <h2 class="text-dark">Restez en contact avec les nouvelles fonctionnalités</h2>
                        <h6 class="text-dark">Suivez la newsletter <br> du développement de la plate-forme  </h6>
                        <a class="btn" href="$linkPhpList">S'inscrire à la Newsletter</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 5 -->
            <!-- Slide 3 -->
            <div class="slide kenburns" style="background-image:url('');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Avec le B25 </span>
                        <h2 class="text-dark">Créér et déployer sur le Ouaib</h2>
                        <h6 class="text-dark">Mettez <br> en ligne vos annonces  </h6>
                        <a class="btn" href="$linkCom">Ecrire votre annonce</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 3 -->
            <!-- Slide 4 -->
            <div class="slide kenburns" style="background-image:url('');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Avec le B25 </span>
                        <h2 class="text-dark">Créér et déployer sur le Ouaib</h2>
                        <h6 class="text-dark">Mettez <br> en ligne vos évenments  </h6>
                        <a class="btn" href="$linkNet">Déclarer votre évènement</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 4 -->
            
        </div>
        <!--end: Inspiro Slider -->
EOD;

    echo <<<EOD
<div class="container" style="padding: 2rem 0rem;">
    <center>
        <div class="heading-text heading-section">
            <h2>CE QUE NOUS PROPOSONS :</h2>
            <span class="lead">Une page de contenu propre à votre activité insérée dans une liste vous correspondant</span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0" class="animated fadeInUp visible">
                    <h4>Gestion de la publication</h4>
                    <p >Vous controlez quand la page doit être mise en ligne et quand elle ne doit pas être visible.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="200" class="animated fadeInUp visible">
                    <h4>Des fonctionnalités</h4>
                    <p>Vous aurez accès à des fonctionnalités différentes suivant votre type de compte</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="400" class="animated fadeInUp visible">
                    <h4>Informations Éditables</h4>
                    <p>Vous pouvez éditer vos informations facilement</p>
                </div>
            </div>
        </div>
    <center>
</div>
EOD;

    //AfficheExplications();
    AfficheLandingPage();

    $artistes = recuperationNbArtistes();
    $associations = recuperationNbAssociations();
    $artisans = recuperationNbArtisans();
    $groupes = recuperationNbGroupeMusicaux();

    echo <<<EOD
<!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 "></div>
            <div class="text-center fullwidth"><h2>Besançon25 c'est déjà:</h2></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fas fa-user"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="20" data-to="$artistes" data-from="0" data-seperator="true">$artistes</span> </div>
                            <div class="seperator seperator-small"></div>
                            <h3>Artistes</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fas fa-users"></i></div>
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="20" data-to="$associations" data-from="0" data-seperator="true">$associations</span> </div>
                            <div class="seperator seperator-small"></div>
                            <h3>Associations</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fas fa-user"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="20" data-to="$artisans" data-from="0" data-seperator="true">$artisans</span> </div>
                            <div class="seperator seperator-small"></div>
                            <h3>Artisans</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fas fa-users"></i></div>
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="20" data-to="$groupes" data-from="0" data-seperator="true">$groupes</span> </div>
                            <div class="seperator seperator-small"></div>
                            <h3>Groupes Musicaux</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
EOD;

    echo <<<EOD
<div class="background-white" style="width:100%; height:2500px; padding: 2rem 5rem;">
<div class="heading-text heading-section">
  <center>
    <h2>NOTRE BLOG COOPTATIF : </h2>
    <span class="lead">Des articles divers et variés viennent peupler ce site. Vous pouvez proposer vous aussi des thèmes et des billets à publier en envoyant un mail à l'adresse <a href='mailto:benevoles@besancon25.fr'>benevoles@besancon25.fr</a>.</span>
  </center>
</div>
EOD;

    echo "<div class='permanent-table'>";
    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
    AfficheGueuloir(true, 'gauche');
    echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>";
    echo "</div>";

    echo "<div class='permanent-table'>";
    cadreMultiplesDebut(2);
    echo "<div style='float:left;'>";
    AfficheImageBreveAccueil($modeLecture);
    echo "</div>";

    echo "<div style='overflow:hidden'>";
    AfficheBreveAccueil($modeLecture);
    if ($modeLecture == 'dernier' && (isset($_SESSION['FirstVisit']) && $_SESSION['FirstVisit'] == false)) {
        ecrireFonctionEnvoiDeDonneesAJAX('AJAX_amorcerXUDGoBack', 'moteur=goBackToTheFuture', 'controlleursAJAX/moteurLectureBreveAccueil.php');
        ecrireFonctionEnvoiDeDonneesAJAX('AJAX_amorcerXUDReturn', 'moteur=returneToTheFuture', 'controlleursAJAX/moteurLectureBreveAccueil.php');
        ecrireFonctionEnvoiDeDonneesAJAX('AJAX_amorcerXUDBackInTimeByTheFuture', 'moteur=backInTimeByTheFuture', 'controlleursAJAX/moteurLectureBreveAccueil.php');
        ecrireFonctionEnvoiDeDonneesAJAX('AJAX_amorcerXUDBackInTimeByThePast', 'moteur=backInTimeByThePast', 'controlleursAJAX/moteurLectureBreveAccueil.php');

        /************************************************************************/
        /**            BANDEAU DES ARTICLES EN TRAVAUX            */
        echo "<div style='position:relative; display:block;background-color:rgba(255,69,0,0.75) ;transform: rotate(-45deg); top:-500px; left:-50%;width:200%;'>";
        echo "<center><I><a class='lien_back' onclick='javascript:AJAX_amorcerXUDGoBack();' >&nbsp;RETOUR VERS LE FUTUR - BACK TO THE FUTURE - RETOUR VERS LE FUTUR ...&nbsp;</a></I></center>";
        echo "<center><I style='color:orangeRed;'>&nbsp; EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX&nbsp;</I></center>";
        echo "<center><I><a class='lien_back' onclick='javascript:AJAX_amorcerXUDBackInTimeByTheFuture();' >&nbsp;JUSTE A TEMPS DEPUIS LE FUTUR - BACK IN TIME FROM THE FUTURE - JUSTE A TEMPS DU FUTUR ...&nbsp;</a></I></center>";
        echo "	<div style='position:relative; background-image: url('" . PAGEB25FR . "images/bandeau_travaux_v1.png'); background-repeat: repeat-x; height:75px;width:200%;' ><br /><br /><br /></div>";
        echo "<center><I><a class='lien_back' onclick='javascript:AJAX_amorcerXUDBackInTimeByThePast();'>&nbsp;JUSTE A TEMPS DEPUIS LE PASSÉ - BACK IN TIME FROM THE PAST - JUSTE A TEMPS DU PASSÉ ...&nbsp;</a></I></center>";
        echo "<center><I style='color:orangeRed;'>&nbsp; EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX ..............................EN TRAVAUX&nbsp;</I></center>";
        echo "<center><I><a class='lien_back' onclick='javascript:AJAX_amorcerXUDReturn();'>&nbsp;RETOUR SUR LE FUTUR - RETURN TO THE FUTURE - RETOUR SUR LE FUTUR ...&nbsp;</a></I></center>";
        echo "</div>";
        /**                                    */
    /************************************************************************/
    }

    $_SESSION['FirstVisit'] = false;
    echo "</div>";
    echo "</div>";
    cadreMultiplesFin(2);
    echo "</div>";


}
