<?php


namespace App\Patterns\Bridge;


class EuroSalaryCalculator extends LegacySalaryCalculator
{
    public function getAverageMonthlySalaryInDollars()
    {
        return '€' . $this->calculateAverageMonthlySalary();
    }
    public function getAverageYearlySalaryInDollars()
    {
        return '€' . $this->calculateAverageYearlySalary();
    }
}