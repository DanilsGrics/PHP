<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 18.11.2018
 * Time: 17:47
 */

$image = imageCreate(1000, 1000);

//background
$violet = imageColorAllocate($image, 102, 0, 102);
imageFilledRectangle($image, 0, 0, 1000, 1000, $violet);

$white = imageColorAllocate($image, 255, 255, 255);
$black = imageColorAllocate($image, 10, 0, 0);
$font = 'C:/Windows/Fonts/Calibri.ttf';

//letters (A - H) with shadows
$letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
for ($i = 0; $i < sizeOf($letters); $i++) {

    imageTTFText($image, 40, 0, 139 + 100 * $i, 953, $black, $font, $letters[$i]);
    imageTTFText($image, 40, 0, 135 + 100 * $i, 950, $white, $font, $letters[$i]);
}

//numbers (1 - 8) with shadows
for ($i = 8; $i > 0; $i--) {

    imageTTFText($image, 40, 0, 63, 1003 - (35 + 100 * $i), $black, $font, $i);
    imageTTFText($image, 40, 0, 60, 1000 - (35 + 100 * $i), $white, $font, $i);
}

//cells
for ($i = 0; $i < 8; $i++) {

    if ($i % 2 == 0)
        $color = $white;
    else
        $color = $black;

    for ($j = 0; $j < 8; $j++) {

        imageFilledRectangle($image, 100 + $i * 100, 100 + $j * 100, 100 + $i * 100 + 100, 100 + $j * 100 + 100, $color);

        if ($color == $black) $color = $white;
        else $color = $black;
    }
}

//border
imageSetThickness($image, 3);
imageRectangle($image, 0, 0, 1000, 1000, $white);

header("Content-type: image/png");
imagePNG($image);
imageDestroy($image);