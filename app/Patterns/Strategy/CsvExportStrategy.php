<?php

namespace App\Patterns\Strategy;

class CsvExportStrategy implements ExportStrategyInterface
{
    public function export(array $data): string
    {
        return $this->convertArrayToCsv($data);
    }

    private function convertArrayToCsv($data, $delimiter = ',', $enclosure = '"', $escapeChar = "\\"): string
    {
        $f = fopen('php://memory', 'rb+');
        foreach ($data as $item) {
            fputcsv($f, $item, $delimiter, $enclosure, $escapeChar);
        }
        rewind($f);

        return rtrim(stream_get_contents($f));
    }
}
