<?php

declare(strict_types=1);

namespace FileConverter;

class ParsingCVS implements Parsing
{
    public function parseFile(\SplFileObject $file) : array
    {
        $data = array();

        while(!$file->eof()) {
            $data[] = $file->fgetcsv();
        }

        return $data;
    }

    public function writeFile(array $data, string $outputFilePath)
    {
        $fp = fopen("$outputFilePath",  "w");

        foreach ($data as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
    }
}