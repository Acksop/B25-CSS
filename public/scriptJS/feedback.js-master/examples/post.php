<?php
ob_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
$data = ob_get_contents();

// Écrit le résultat dans le fichier
file_put_contents(dirname(__FILE__).DIRECTORY_SEPARATOR."data.log", $data);
echo "OK!";
