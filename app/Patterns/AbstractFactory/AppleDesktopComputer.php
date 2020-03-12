<?php


namespace App\Patterns\AbstractFactory;


class AppleDesktopComputer
{
    public function makeMac(int $year): Mac
    {
        return new Mac($year);
    }
}