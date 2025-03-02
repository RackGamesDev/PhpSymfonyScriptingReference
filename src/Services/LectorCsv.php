<?php

namespace App\Services;

//Servicio personalizado que lee un csv y devuelve un array (el csv esta almacenado localmente)
class LectorCsv
{
    public function leerCsv(string $filePath): array
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