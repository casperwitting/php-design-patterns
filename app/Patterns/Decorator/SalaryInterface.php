<?php

namespace App\Patterns\Decorator;

interface SalaryInterface
{
    public function getSalary(): int;

    public function getSalaryCalculationDescription(): string;
}
