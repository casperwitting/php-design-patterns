<?php


namespace App\Patterns\AbstractFactory;


class AppleLaptopComputer
{
    public function makeMacBook(int $year = null): MacBook
    {
        return new MacBook($year);
    }
}