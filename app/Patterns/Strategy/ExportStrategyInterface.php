<?php

namespace App\Patterns\Strategy;

interface ExportStrategyInterface
{
    public function export(array $data): string;
}
