<?php

namespace App\Service;

//Servicio personalizado que lee un csv y devuelve un array (el csv esta almacenado localmente)
class CsvReader
{
    public function readCsv(string $filePath): array
    {
        $rows = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $rows[] = $data;
            }
            fclose($handle);
        }
        return $rows;
    }
}