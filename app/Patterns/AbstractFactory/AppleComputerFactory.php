<?php

namespace App\Patterns\AbstractFactory;

class AppleComputerFactory extends AbstractComputerFactory
{
    function makeDesktopComputer()
    {
        return new AppleDesktopComputer();
    }

    function makeLaptopComputer()
    {
        return new AppleLaptopComputer();
    }
}
