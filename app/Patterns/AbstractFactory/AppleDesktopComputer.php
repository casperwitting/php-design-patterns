<?php


namespace App\Patterns\AbstractFactory;


class AppleDesktopComputer
{
    public function makeMac(int $year = null): Mac
    {
        return new Mac($year);
    }
}