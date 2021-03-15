<?php

namespace FileConverter;

class ParsingException implements Parsing
{
    public function parseFile(\SplFileObject $file): array
    {
        exit('Format not found');
    }

    public function writeFile(array $data, string $outputFilePath)
    {
        exit('Format not found');
    }
}
