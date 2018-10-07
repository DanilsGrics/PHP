<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length of array</title>
</head>
<body>

<center>
    <form action="procArray.php" method="post">
        <p>Length of array (1 - 100):<br /><input type="text" pattern="[0-9]" step="1" name="length" /></p>
        <!-- pattern="[1-100]" and step="1" to allow integer values only -->
        <p><input type="submit" value="Submit"></p>
    </form>
</center>
</body>
</html>