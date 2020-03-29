<?php

namespace App\Patterns\Strategy;

interface ExportStrategyInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function export(array $data): string;
}
