<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 21:45
 */

include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Visi skolnieki</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Skolnieki</h2>
</div>

<div class="content">
    <?php

    if (!isset($_SESSION['isTeacher'])) exit;


    $result = $conn->query("
SELECT users.id, latvian, math, russian FROM users, marks WHERE users.id = marks.user_id");


    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $style = "<th style  = \"border: 1px solid green; background-color: transparent;\">";

    if ($result->num_rows > 0) {

        echo "<table style = \"background-color: transparent; margin: auto;\">";
        echo "<tr>";
        echo $style . "id" . "</th>" . $style . "Latviešu valoda" .
            "</th>" . $style . "Matemātika" . "</th>" .
            $style . "Krievu valoda" . "</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>" . "<th>" . $row["latvian"] . "</th>" . "<th>" . $row["math"] . "</th>" .
                "<th>" . $row["russian"] . "</th>";
            echo "</tr>";

        }
    } else {
        echo "<h2>Nav skolnieku uz šo brīdi!</h2>";
    }
    ?>
    <div style="margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none">
            <button type="submit" class="button" name="back">Atpakaļ</button>
        </a>
    </div>
</div>
</body>
</html>