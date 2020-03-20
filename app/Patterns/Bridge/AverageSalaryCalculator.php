<?php

namespace App\Patterns\Bridge;

abstract class AverageSalaryCalculator
{
    protected const HOURS_WORKED_PER_WEEK = 40;
    protected const WEEKS_IN_YEAR = 52;
    protected const MONTHS_IN_YEAR = 12;

    abstract public function calculateAverageMonthlySalary(int $hourlyPay): int;

    abstract public function calculateAverageYearlySalary(int $hourlyPay): int;
}
