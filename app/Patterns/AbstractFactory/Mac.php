<?php


namespace App\Patterns\AbstractFactory;


class Mac extends AbstractDesktop
{
    public function __construct(int $year = null)
    {
        switch ($year) {
            case 1987:
                $this->model = 'Macintosh SE';
                $this->kiloBytesOfRam = 1024;
                break;
            default:
                $this->model = 'iMac G3';
                $this->kiloBytesOfRam = 32000;
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