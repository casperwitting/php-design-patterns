<?php

namespace App\Patterns\Decorator;

abstract class BrandNewTaxRegulation implements SalaryInterface
{
    protected $salary;

    function __construct(Salary $salary)
    {
        $this->salary = $salary;
    }

    abstract public function getSalary(): int;

    abstract public function getSalaryCalculationDescription(): string;
}
