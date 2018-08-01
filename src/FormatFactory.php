<?php

declare(strict_types=1);

namespace FileConverter;

class FormatFactory
{
    private $inputFormat;

    public function __construct(string $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    public function getInstance()
    {
        switch ($this->inputFormat) {
            case "json":
                return new ParsingJSON();
            case 'xml':
                return new ParsingXML();
            case 'csv':
                return new ParsingCVS();
            default:
                return new ParsingException();
        }
    }
}