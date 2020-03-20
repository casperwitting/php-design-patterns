<?php

namespace App\Patterns\AbstractFactory;

class MacBook extends AbstractLaptop
{
    public function __construct(int $year = null)
    {
        switch ($year) {
            case 1991:
                $this->model = 'PowerBook';
                $this->kiloBytesOfRam = 2048;
                break;
            default:
                $this->model = 'MacBook Pro 2019';
                $this->kiloBytesOfRam = 16000000;
                break;
        }
    }

    function getModel(): string
    {
        return $this->model;
    }

    function getKiloBytesOfRam(): int
    {
        return $this->kiloBytesOfRam;
    }
}
