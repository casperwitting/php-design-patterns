<?php

namespace App\Patterns\Strategy;

class ExportStrategy
{
    private $strategy;

    public function __construct(string $strategy)
    {
        switch ($strategy) {
            case 'JSON':
                $this->strategy = new JsonExportStrategy();
                break;
            case 'CSV':
                $this->strategy = new CsvExportStrategy();
                break;
            case 'XML':
                $this->strategy = new XmlExportStrategy();
                break;
        }
    }

    public function export(array $data): string
    {
        return $this->strategy->export($data);
    }
}
