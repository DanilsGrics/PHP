<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies processing</title>
</head>
<body>
<center>
<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 03.10.2018
 * Time: 20:35
 */

if(!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    setcookie('username', $username, time()+10);
    setcookie('password', $password, time()+10);

    header("Location: checkCookies.php");
    die();
}

else{
    echo "Username or password is empty!";
}
?>
</center>
<center>
    <a href="form.php"><button>Go to start</button></a>
    <a href="checkCookies.php"><button>Go to 'checkCookies.php'</button></a>
    <a href="delCookies.php"><button>Go to 'delCookies.php'</button></a>
</center>
</body>
</html>