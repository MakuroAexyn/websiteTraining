<head><meta charset="UTF-8"></head>
<title>Espace VIP des bestah</title>
<body><p>Ceci est une page interdite.</p>
<?php
/**
 * Created by PhpStorm.
 * User: amaddah
 * Date: 10/05/16
 * Time: 20:09
 */

$cookie_name = "Auth";
$cookie_value = "00d72871435d4cb3758956ca99e8183ff56aec40";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie pour entrer dans la super partie du site.
?>
<?php
if(isset($_COOKIE["Auth"]) && $_COOKIE["Auth"] == "4cfd19d542a4376da997c4feeb93b08f8de7afa0") {
    echo "Bien joué, vous avez accèdez à cette partie cachée du site.<br>
          Code de la faille : PHPJUG-ISI<br>
          La faille que vous avez découverte est de type PHP Juggling, pour plus d'informations <a href=\"https://www.owasp.org/images/6/6b/PHPMagicTricks-TypeJuggling.pdf\">cliquez ici</a>";
}
?>
</body>
