<?php

namespace Unit;

use App\Patterns\Strategy\ExportStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private const DUMMY_DATA = [
        'transaction' => [
            'account' => 'NL89RABO0123456789',
            'amount' => 150,
            'description' => 'AH Albert Heijn XL Alkmaar',
        ],
    ];

    public function testJsonStrategy(): void
    {
        $exporter = new ExportStrategy('JSON');

        $this->assertEquals(
            '{"transaction":{"account":"NL89RABO0123456789","amount":150,"description":"AH Albert Heijn XL Alkmaar"}}',
            $exporter->export(self::DUMMY_DATA)
        );
    }

    public function testCsvStrategy(): void
    {
        $exporter = new ExportStrategy('CSV');

        $this->assertEquals(
            'NL89RABO0123456789,150,"AH Albert Heijn XL Alkmaar"',
            $exporter->export(self::DUMMY_DATA)
        );
    }

    public function testXmlStrategy(): void
    {
        $exporter = new ExportStrategy('XML');

        $this->assertEquals(
            '<?xml version="1.0"?>
<transaction>
  <account>NL89RABO0123456789</account>
  <amount>150</amount>
  <description>AH Albert Heijn XL Alkmaar</description>
</transaction>',
            $exporter->export(self::DUMMY_DATA)
        );
    }
}
