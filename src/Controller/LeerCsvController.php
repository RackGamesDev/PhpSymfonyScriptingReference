<?php

namespace App\Controller;

use App\Services\LectorCsv;
use App\Services\ServicioEjemplo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeerCsvController extends AbstractController
{
    private $csvReader;

    /**
     * @Route("/csv/read", name="read_csv")
     */
    #[Route('/csv/read', name: 'read_csv')]
    public function readCsv(LectorCsv $csvReader, ServicioEjemplo $ejemplo): Response
    {
        //Ruta del csv (seria proyecto/data/datos.csv)
        $filePath = $this->getParameter('kernel.project_dir') . '/data/datos.csv';
        $data = $csvReader->leerCsv($filePath); //Leyendo el csv, esto dara un array de arrays
        dd($data);
    }
}