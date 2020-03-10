<?php


namespace App\Patterns\Bridge;


class DollarSalaryCalculator extends LegacySalaryCalculator
{
    protected const EURO_TO_DOLLAR_RATE = 1.13;

    public function getAverageMonthlySalaryInDollars()
    {
        return '$' . $this->calculateAverageMonthlySalary() * self::EURO_TO_DOLLAR_RATE;
    }
    public function getAverageYearlySalaryInDollars()
    {
        return '$' . $this->calculateAverageYearlySalary() * self::EURO_TO_DOLLAR_RATE;;
    }
}