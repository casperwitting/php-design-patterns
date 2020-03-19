<?php

namespace App\Patterns\Strategy;

use DOMDocument;
use DOMElement;

class XmlExportStrategy implements ExportStrategyInterface
{
    public function export(array $data): string
    {
        return $this->xmlEncode($data);
    }

    /**
     * @param      $mixed
     * @param DOMElement $domElement
     * @param DOMDocument $DOMDocument
     * @return string
     */
    protected function xmlEncode($mixed, $domElement = null, $DOMDocument = null)
    {
        if ($DOMDocument === null) {
            $DOMDocument = new DOMDocument;
            $DOMDocument->formatOutput = true;

            $this->xmlEncode($mixed, $DOMDocument, $DOMDocument);

            return rtrim($DOMDocument->saveXML());
        }

        if (!is_array($mixed)) {
            return $domElement->appendChild($DOMDocument->createTextNode($mixed));
        }

        $this->encodeArray($mixed, $domElement, $DOMDocument);
    }

    /**
     * @param $mixed
     * @param DOMElement $domElement
     * @param DOMDocument $DOMDocument
     */
    private function encodeArray($mixed, $domElement, $DOMDocument): void
    {
        foreach ($mixed as $index => $mixedElement) {
            $node = $DOMDocument->createElement($index);
            $domElement->appendChild($node);

            $this->xmlEncode($mixedElement, $node, $DOMDocument);
        }
    }
}
