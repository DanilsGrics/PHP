<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies checking</title>
</head>
<body>
<center>
<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 03.10.2018
 * Time: 20:36
 */

setcookie ("username", "", time()-600);
setcookie ("password", "", time()-600);
echo "Cookies are deleted successfully!";
?>
</center>
<center>
    <a href="form.php"><button>Go to start</button></a>
    <a href="checkCookies.php"><button>Go to 'checkCookies.php'</button></a>
    <a href="procCookies.php"><button>Go to 'procCookies.php'</button></a>
</center>
</body>
</html>
