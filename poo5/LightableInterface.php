<?php

require_once 'cars.php';
require_once 'Bicycle.php';

interface LightableInterface
{
public function switchOn(): bool;
public function switchOff(): bool;
}

