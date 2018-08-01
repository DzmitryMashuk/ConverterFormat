<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\FormatFactory;
use SplFileInfo;

class Converter
{
    private $inputFormat;

    public function __construct(string $filename)
    {
        $info = new SplFileInfo($filename);
        $this->inputFormat = $info->getExtension();
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        $reader = (new FormatFactory($this->inputFormat))->getInstance();
        $data = $reader->parseFile($file);
        $writer = (new FormatFactory($outputFormat))->getInstance();
        $writer->writeFile($data,$outputFilePath);
    }
}