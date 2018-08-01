<?php

declare(strict_types=1);

namespace FileConverter;

use Exception;

class Application
{
    public function run(string $filename, string $outputFormat, $outputFilePath)
    {
        $converter = new Converter($filename);

        try {
            $file = new \SplFileObject($filename, 'r');
        } catch (Exception $e) {
            exit('File not found');
        }

        $converter->convert($file, $outputFormat, $outputFilePath);
    }
}