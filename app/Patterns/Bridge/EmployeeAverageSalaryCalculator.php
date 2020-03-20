<?php

namespace App\Patterns\Bridge;

class EmployeeAverageSalaryCalculator extends AverageSalaryCalculator
{
    protected const YEARLY_PROFIT_DISTRIBUTION = 3000;

    public function calculateAverageMonthlySalary(int $hourlyPay): int
    {
        return ($hourlyPay * self::HOURS_WORKED_PER_WEEK * self::WEEKS_IN_YEAR + self::YEARLY_PROFIT_DISTRIBUTION) / self::MONTHS_IN_YEAR;
    }

    public function calculateAverageYearlySalary(int $hourlyPay): int
    {
        return $hourlyPay * self::HOURS_WORKED_PER_WEEK * self::WEEKS_IN_YEAR + self::YEARLY_PROFIT_DISTRIBUTION;
    }
}
