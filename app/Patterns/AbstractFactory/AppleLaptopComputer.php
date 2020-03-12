<?php


namespace App\Patterns\AbstractFactory;


class AppleLaptopComputer
{

    public function makeMacBook(int $year): MacBook
    {
        return new MacBook($year);
    }
}