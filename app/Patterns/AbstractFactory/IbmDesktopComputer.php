<?php

namespace App\Patterns\AbstractFactory;

class IbmDesktopComputer
{
    public function makePc(int $year = null): PC
    {
        return new PC($year);
    }
}
