<?php


namespace App\Patterns\AbstractFactory;


class IbmLaptopComputer
{

    public function makeLaptop(int $year = null)
    {
        return new ThinkPad($year);
    }
}