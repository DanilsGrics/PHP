<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 07.10.2018
 * Time: 17:18
 */

$size = $_POST['length'];

session_start();

for($i = 0; $i < $size; $i++) {

    $randArray[$i] = rand(1, 1000);
}

sort($randArray);

$_SESSION['randarray'] = $randArray;

header("Location: sessionPrint.php");
die();