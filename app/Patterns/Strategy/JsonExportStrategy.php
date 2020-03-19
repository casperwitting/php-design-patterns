<?php

namespace App\Patterns\Strategy;

class JsonExportStrategy implements ExportStrategyInterface
{
    public function export(array $data): string
    {
        return json_encode($data);
    }
}
