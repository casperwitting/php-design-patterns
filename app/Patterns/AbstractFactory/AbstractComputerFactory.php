<?php

namespace App\Patterns\AbstractFactory;

abstract class AbstractComputerFactory
{
    abstract function makeDesktop();

    abstract function makeLaptop();
}