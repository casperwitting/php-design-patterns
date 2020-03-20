<?php

namespace App\Patterns\Decorator;

class Salary implements SalaryInterface
{
    /**
     * @var int
     */
    private $salary;

    public function __construct(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function getSalaryCalculationDescription(): string
    {
        return 'Base salary';
    }
}
