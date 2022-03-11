<?php
$temperatureInterface = recuperationCookieTemperature();
$version = recuperationCookieVersionInterface();


echo <<<EOD
<!DOCTYPE HTML>
<html lang="fr">

<head>

EOD;

include PUBLIC_PATH . DIRECTORY_SEPARATOR . 'templateHTML/html_inclusions/html_head.phtml';

echo <<<EOD

</head>

<body style="margin:0px !important;" id="body">

EOD;

include PUBLIC_PATH . DIRECTORY_SEPARATOR . 'templateHTML/html_inclusions/cookies_alert.phtml';

include PUBLIC_PATH . DIRECTORY_SEPARATOR . 'templateHTML/html_inclusions/body_contenu.phtml';

include PUBLIC_PATH . DIRECTORY_SEPARATOR . 'templateHTML/html_inclusions/footer_piedDePage.phtml';

echo <<<EOD

</body>
</html>

EOD;

