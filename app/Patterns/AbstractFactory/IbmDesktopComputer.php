<?php


namespace App\Patterns\AbstractFactory;


class IbmDesktopComputer
{
    public function makePc(int $year): PC
    {
        return new PC($year);
    }
}