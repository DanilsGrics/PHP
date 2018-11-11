<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 11.11.2018
 * Time: 18:22
 */

$image = imageCreate(1000, 1000);

//black background
$color = imageColorAllocate($image, 0, 0, 0);

//red rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 255, 0, 0);
imageRectangle($image, 100, 100, 300, 300, $color);

//orange rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 255, 128, 0);
imageRectangle($image, 105, 105, 400, 400, $color);

//yellow rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 255, 255, 0);
imageRectangle($image, 110, 110, 500, 500, $color);

//green rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 0, 255, 0);
imageRectangle($image, 115, 115, 600, 600, $color);

//light blue rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 0, 255, 255);
imageRectangle($image, 120, 120, 700, 700, $color);

//blue rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 0, 0, 255);
imageRectangle($image, 125, 125, 800, 800, $color);

//violet rectangle
imageSetThickness($image, 5);
$color = imageColorAllocate($image, 153, 0, 153);
imageRectangle($image, 130, 130, 900, 900, $color);

header("Content-type: image/png");
imagePNG($image);
imageDestroy($image);
