<?php

namespace App\Patterns\Bridge;

class FreelanceAverageSalaryCalculator extends AverageSalaryCalculator
{
    public function calculateAverageMonthlySalary(int $hourlyPay): int
    {
        return ($hourlyPay * self::HOURS_WORKED_PER_WEEK * self::WEEKS_IN_YEAR) / self::MONTHS_IN_YEAR;
    }

    public function calculateAverageYearlySalary(int $hourlyPay): int
    {
        return $hourlyPay * self::HOURS_WORKED_PER_WEEK * self::WEEKS_IN_YEAR;
    }
}
