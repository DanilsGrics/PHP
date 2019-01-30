<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 19:17
 */

include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Jūsu atzīmes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Jūsu atzīmes</h2>
</div>

<div class="content">
    <?php

    if (!isset($_SESSION['username'])) exit;

    $username = $_SESSION['username'];

    $user_id = "SELECT id FROM users WHERE'$username' = username";
    $result = mysqli_query($conn, $user_id);
    $user_id = mysqli_fetch_assoc($result);
    $user_id = implode($user_id);

    $result = $conn->query("SELECT latvian, math, russian FROM marks WHERE
'$user_id' = user_id");


    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $style = "<th style  = \"border: 1px solid green; background-color: transparent;\">";

    if ($result->num_rows > 0) {

        echo "<table style = \"background-color: transparent; margin: auto;\">";
        echo "<tr>";
        echo $style . "Latviešu valoda" . "</th>" . $style . "Matemātika" . "</th>" .
            $style . "Krievu valoda" . "</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>" . $row["latvian"] . "</th>" . "<th>" . $row["math"] . "</th>" .
                "<th>" . $row["russian"] . "</th>";
            echo "</tr>";

        }
    } else {
        echo "<h2>Nav atzīmes uz šo brīdi!</h2>";
    }
    ?>
</div>
<div style="margin-bottom: 10px">
    <a href="index.php" style="text-decoration: none">
        <button type="submit" class="button" name="back">Atpakaļ</button>
    </a>
</div>
</body>
</html>