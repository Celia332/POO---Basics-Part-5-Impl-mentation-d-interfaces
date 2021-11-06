<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface

{
    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10)
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function switchOff(): bool
    {
    return false;
    }

}


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

