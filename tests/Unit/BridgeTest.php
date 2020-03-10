<?php


namespace Tests\Unit;


use App\Patterns\Bridge\DollarSalaryCalculator;
use App\Patterns\Bridge\EmployeeType;
use App\Patterns\Bridge\EuroSalaryCalculator;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testAverageMonthlyFreelanceSalaryInDollars()
    {
        $calculator = new DollarSalaryCalculator(20, EmployeeType::FREELANCE);

        $this->assertEquals('$3916.58', $calculator->getAverageMonthlySalaryInDollars());
    }

    public function testAverageMonthlyFreelanceSalaryInEuros()
    {
        $calculator = new EuroSalaryCalculator(20, EmployeeType::FREELANCE);

        $this->assertEquals('€3466', $calculator->getAverageMonthlySalaryInDollars());
    }

    public function testAverageMonthlyEmployeeSalaryInDollars()
    {
        $calculator = new DollarSalaryCalculator(20, EmployeeType::EMPLOYEE);

        $this->assertEquals('$4199.08', $calculator->getAverageMonthlySalaryInDollars());
    }

    public function testAverageMonthlyEmployeeSalaryInEuros()
    {
        $calculator = new EuroSalaryCalculator(20, EmployeeType::EMPLOYEE);

        $this->assertEquals('€3716', $calculator->getAverageMonthlySalaryInDollars());
    }
    public function testAverageYearlyFreelanceSalaryInDollars()
    {
        $calculator = new DollarSalaryCalculator(20, EmployeeType::FREELANCE);

        $this->assertEquals('$47008', $calculator->getAverageYearlySalaryInDollars());
    }

    public function testAverageYearlyFreelanceSalaryInEuros()
    {
        $calculator = new EuroSalaryCalculator(20, EmployeeType::FREELANCE);

        $this->assertEquals('€41600', $calculator->getAverageYearlySalaryInDollars());
    }

    public function testAverageYearlyEmployeeSalaryInDollars()
    {
        $calculator = new DollarSalaryCalculator(20, EmployeeType::EMPLOYEE);

        $this->assertEquals('$50398', $calculator->getAverageYearlySalaryInDollars());
    }

    public function testAverageYearlyEmployeeSalaryInEuros()
    {
        $calculator = new EuroSalaryCalculator(20, EmployeeType::EMPLOYEE);

        $this->assertEquals('€44600', $calculator->getAverageYearlySalaryInDollars());
    }
}