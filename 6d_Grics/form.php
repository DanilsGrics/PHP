<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length of array</title>
</head>
<body>

<center>
    <form action="procArray.php" method="post">
        <p>Length of array (1 - 999):<br /><input type="text" pattern="[1-9]{1}[0-9]{0,2}" name="length" /></p>
        <!-- pattern="[1-9]{1}[0-9]{0,2}" to allow positive (1 - 999) values only -->
        <p><input type="submit" value="Submit"></p>
    </form>
</center>
</body>
</html>