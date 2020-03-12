<?php


namespace App\Patterns\AbstractFactory;


class IbmComputerFactory extends AbstractComputerFactory
{

    function makeDesktopComputer()
    {
        return new IbmDesktopComputer();
    }

    function makeLaptopComputer()
    {
        return new IbmLaptopComputer();
    }
}