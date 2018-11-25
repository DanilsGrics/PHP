<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 25.11.2018
 * Time: 17:01
 */

require('Bottle.php');

try {

    $badFullBottle = new Bottle(501, 500, "tea");

} catch (Exception $exception) {

    echo $exception->getMessage();
}


try {

    $badEmptyBottle = new Bottle(-1, 500, "tea");

} catch (Exception $exception) {

    echo $exception->getMessage();
}


try {

    $goodFullBottle = new Bottle(500, 500, "tea");

} catch (Exception $exception) {

    echo $exception->getMessage();
}


$goodFullBottle->printBottle();


try {

    $goodFullBottle->fillBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}


try {

    $goodFullBottle->pourBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}


try {

    $goodFullBottle->pourBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}


$goodFullBottle->printBottle();


try {

    $goodFullBottle->fillBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}

$goodFullBottle->printBottle();


try {

    $goodEmptyBottle = new Bottle(0, 500, "tea");

} catch (Exception $exception) {

    echo $exception->getMessage();
}


$goodEmptyBottle->printBottle();


try {

    $goodEmptyBottle->pourBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}


try {

    $goodEmptyBottle->fillBottle();

} catch (Exception $exception) {

    echo $exception->getMessage();
}

$goodEmptyBottle->printBottle();