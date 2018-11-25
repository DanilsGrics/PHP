<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 25.11.2018
 * Time: 16:25
 */

class Bottle
{

    var $volume, $maxVolume, $content;

    function Bottle($volume, $maxVolume, $content)
    {

        if ($volume > $maxVolume || $volume < 0) {

            throw new Exception("\nCannot create bottle!\n");
        }
        $this->volume = $volume;

        $this->maxVolume = $maxVolume;
        $this->content = $content;

        echo "\nBottle created successfully!\n";
    }

    function printBottle()
    {

        echo "\nCurrent used volume of bottle: $this->volume";
        echo "\nMaximal volume of bottle is: $this->maxVolume";
        echo "\nContent of bottle: $this->content\n";
    }

    function fillBottle()
    {

        if ($this->volume == $this->maxVolume) {

            throw new Exception("\nBottle is already full!\n");
        }

        $this->volume++;
        echo "\nBottle filled successfully!\n";
    }

    function pourBottle()
    {
        if ($this->volume == 0) {

            throw new Exception("\nBottle is already empty!\n");
        }

        $this->volume--;
        echo "\nBottle poured successfully!\n";
    }
}