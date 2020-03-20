<?php

namespace App\Patterns\Decorator;

class CorporateTaxRegulation extends BrandNewTaxRegulation
{
    public function getSalary(): int
    {
        return $this->salary->getSalary() - (0.19 * $this->salary->getSalary());
    }

    public function getSalaryCalculationDescription(): string
    {
        return $this->salary->getSalaryCalculationDescription() . ', including corporate tax';
    }
}
