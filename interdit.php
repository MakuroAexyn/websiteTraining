<?php
/**
 * Created by PhpStorm.
 * User: amaddah
 * Date: 10/05/16
 * Time: 20:09
 */
echo $_GET['Auth'];

if(isset($_GET['Auth']) && $_GET['Auth'] < 0) {
    require_once (__DIR__ . "/includes/pageSimple_interdite.php");
}
else{
    echo"<head><meta charset=\"UTF-8\"></head><title>Espace VIP des bestah</title><body><p>Ceci est une page interdite.</p>";
}
?>
</body>
