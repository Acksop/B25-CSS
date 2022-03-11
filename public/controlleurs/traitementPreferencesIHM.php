<?php

session_start();

include(dirname(__DIR__).'/fonctionCourante.php');


        choixInterface($_POST['interface']);
        choixFond($_POST['fondIHM']);
        choixGlyph($_POST['polices']);
        choixTailleLecture($_POST['tailleLecture']);
        choixCouleur($_POST['couleurIHM']);
        choixVersion($_POST['versionIHM']);
        choixTemperature($_POST['versionColor']);

header("location: ".link_rewrite('preferences', false)."#IHM");
