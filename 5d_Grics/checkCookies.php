<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies checking</title>
</head>
<body>

<center><?php
if (!isset($_COOKIE['username'])) {
    echo "Username cookie is not set <br>";
}

else {
    echo "Username Cookie is: ".$_COOKIE['username']."<br>";
}

if (!isset($_COOKIE['password'])) {
    echo "Password cookie is not set <br>";
}

else {
    echo "Password Cookie is: ".$_COOKIE['password']."<br>";
}
?>


<form action="delCookies.php" method="post">
    <p><input type="submit" value="Delete Cookies"></p>
</form>
    <a href="form.php"><button>Go to start</button></a>
    <a href="procCookies.php"><button>Go to 'procCookies.php'</button></a>
</center>
</body>
</html>
