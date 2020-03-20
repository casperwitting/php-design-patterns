<?php

namespace App\Patterns\Decorator;

class IncomeTaxRegulation extends BrandNewTaxRegulation
{
    public function getSalary(): int
    {
        return $this->salary->getSalary() - (0.21 * $this->salary->getSalary());
    }

    public function getSalaryCalculationDescription(): string
    {
        return $this->salary->getSalaryCalculationDescription() . ', including income tax';
    }
}
