<?php

namespace App\Patterns\AbstractFactory;

class ThinkPad extends AbstractLaptop
{
    public function __construct(int $year = null)
    {
        switch ($year) {
            case 2013:
                $this->model = 'ThinkPad Yoga';
                $this->kiloBytesOfRam = 4000000;
                break;
            default:
                $this->model = 'ThinkPad X1 Carbon';
                $this->kiloBytesOfRam = 8000000;
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
