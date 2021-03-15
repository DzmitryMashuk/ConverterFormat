<?php

declare(strict_types=1);

namespace FileConverter;

class ParsingXML implements Parsing
{
    public function parseFile(\SplFileObject $file) : array
    {
        $stingData = $file->fread($file->getSize());
        $xml = simplexml_load_string($stingData);
        $json = json_encode($xml);

        return json_decode($json, true);
    }

    public function writeFile(array $data, string $outputFilePath)
    {
        $fp = fopen($outputFilePath, 'w');
        fwrite($fp, xmlrpc_encode($data));
        fclose($fp);
    }
}
