<?php

namespace Unit;

use App\Patterns\Decorator\CorporateTaxRegulation;
use App\Patterns\Decorator\IncomeTaxRegulation;
use App\Patterns\Decorator\Salary;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator(): void
    {
        $salary = new Salary(3000);

        $salaryWithIncomeTax = new IncomeTaxRegulation($salary);

        $this->assertEquals(2370, $salaryWithIncomeTax->getSalary());
    }

    public function testCorporateTaxRegulation(): void
    {
        $salary = new Salary(3000);

        $salaryWithCorporateTax = new CorporateTaxRegulation($salary);

        $this->assertEquals(2430, $salaryWithCorporateTax->getSalary());
    }

    public function testSalaryCalculationDescriptionIncomeTax(): void
    {
        $salary = new Salary(3000);

        $salaryWithIncomeTax = new IncomeTaxRegulation($salary);

        $this->assertEquals('Base salary, including income tax', $salaryWithIncomeTax->getSalaryCalculationDescription());
    }

    public function testSalaryCalculationDescriptionCorporateTax(): void
    {
        $salary = new Salary(3000);

        $salaryWithCorporateTax = new CorporateTaxRegulation($salary);

        $this->assertEquals('Base salary, including corporate tax', $salaryWithCorporateTax->getSalaryCalculationDescription());
    }
}
