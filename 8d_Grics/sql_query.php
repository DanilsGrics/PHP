<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 31.10.2018
 * Time: 19:56
 */

$conn = new mysqli("localhost", "root", "", "veikals");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo 'Connection successful!<br><br>';

$conn->query("SET NAMES utf8mb4");
$result = $conn->query("SELECT * FROM preces ORDER BY Cena DESC, 'Derīguma termiņš' ASC");

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


$style = "<th style  = \"border: 1px solid blue; background-color: khaki;\">";
echo "<table style = \"border: 3px solid darkred; background-color: beige;\">";
echo "<tr>";
echo $style . "ID prece" . "</th>" . $style . "Nosaukums" . "</th>" .
    $style . "Cena" . "</th>" . $style . "Derīguma termiņš" . "</th>" .
    $style . "Ražošanas datums" . "</th>";
echo "</tr>";


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th>" . $row["ID_prece"] . "</th>" . "<th>" . $row["Nosaukums"] . "</th>" .
            "<th>" . $row["Cena"] . "</th>" . "<th>" . $row["Derīguma termiņš"] . "</th>" .
            "<th>" . $row["Ražošanas datums"] . "</th>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}


$conn->close();



