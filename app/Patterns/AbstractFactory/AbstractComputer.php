<?php

namespace App\Patterns\AbstractFactory;

abstract class AbstractComputer
{
    abstract function getModel(): string;

    abstract function getKiloBytesOfRam(): int;
}
