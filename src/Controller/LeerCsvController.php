<?php

namespace App\Controller;

use App\Service\CsvReader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CsvController extends AbstractController
{
    private $csvReader;

    public function __construct(CsvReader $csvReader)
    {
        $this->csvReader = $csvReader;
    }

    /**
     * @Route("/csv/read", name="read_csv")
     */
    public function readCsv(): Response
    {
        // Path to the CSV file
        $filePath = $this->getParameter('kernel.project_dir') . '/data/sample.csv';

        // Read the CSV file
        $data = $this->csvReader->readCsv($filePath);

        // Render the data in a Twig template
        return $this->render('csv/read.html.twig', [
            'data' => $data,
        ]);
    }
}