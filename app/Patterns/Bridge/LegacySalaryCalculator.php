<?php


namespace App\Patterns\Bridge;

class LegacySalaryCalculator
{
    /**
     * @var int
     */
    private $hourlyPay;

    /**
     * @var FreelanceAverageSalaryCalculator|EmployeeAverageSalaryCalculator
     */
    private $salaryCalculator;

    public function __construct(int $hourlyPay, string $employmentType)
    {
        $this->hourlyPay = $hourlyPay;

        if ($employmentType === EmployeeType::FREELANCE) {
            $this->salaryCalculator = new FreelanceAverageSalaryCalculator();
        } else {
            $this->salaryCalculator = new EmployeeAverageSalaryCalculator();
        }
    }

    public function calculateAverageMonthlySalary(): int
    {
        return $this->salaryCalculator->calculateAverageMonthlySalary($this->hourlyPay);
    }

    public function calculateAverageYearlySalary(): int
    {
        return $this->salaryCalculator->calculateAverageYearlySalary($this->hourlyPay);
    }
}