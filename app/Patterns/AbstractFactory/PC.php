<?php


namespace App\Patterns\AbstractFactory;


class PC extends AbstractDesktop
{
    public function __construct(int $year = null)
    {
        switch ($year) {
            case 1987:
                $this->model = 'Personal System/2';
                $this->kiloBytesOfRam = 512;
                break;
            default:
                $this->model = 'Dell Precision 3630';
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