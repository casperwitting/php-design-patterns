<?php

namespace App\Patterns\AbstractFactory;

abstract class AbstractComputerFactory
{
    abstract function makeDesktopComputer();

    abstract function makeLaptopComputer();
}

