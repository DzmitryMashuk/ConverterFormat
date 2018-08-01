<?php

declare(strict_types=1);

namespace FileConverter;

interface Parsing
{
    public function parseFile(\SplFileObject $file) : array;
    public function writeFile(array $data, string $outputFilePath);
}