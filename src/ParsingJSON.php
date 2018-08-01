<?php

declare(strict_types=1);

namespace FileConverter;

class ParsingJSON implements Parsing
{
    public function parseFile(\SplFileObject $file) : array
    {
        return json_decode((string)$file, true);
    }

    public function writeFile(array $data, string $outputFilePath)
    {
        $fp = fopen("$outputFilePath",  "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
    }
}