<?php


namespace App\Patterns\Bridge;


class EuroSalaryCalculator extends LegacySalaryCalculator
{
    public function getAverageMonthlySalaryInDollars(): string
    {
        return '€' . $this->calculateAverageMonthlySalary();
    }

    public function getAverageYearlySalaryInDollars(): string
    {
        return '€' . $this->calculateAverageYearlySalary();
    }
}