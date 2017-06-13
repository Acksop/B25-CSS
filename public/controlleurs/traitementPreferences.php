<?php
session_start();
include("../scriptPHP/cookies.php");
choixInterface($_POST['interface']);
choixGlyph($_POST['polices']);
choixTailleLecture($_POST['tailleLecture']);
header("location: ../index.php?page=preferences")

?>
