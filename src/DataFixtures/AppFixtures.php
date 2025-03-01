<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Usuario; //Importar la entidad

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $usuario = new Usuario; //Declarar el registro con sus datos
        $usuario->setNombre('nom');
        $usuario->setNick('ap');
        $usuario->setNumero(20);
        $usuario->setUuid(1);

        $manager->persist($usuario); //Insertarlo en la base de datos

        $usuario = new Usuario;
        $usuario->setNombre('yeasd');
        $usuario->setNick('rwerw');
        $usuario->setNumero(10);
        $usuario->setUuid(2);

        $manager->persist($usuario); 


        $manager->flush(); //Finalmente ejecutar la consulta

        //Para ejecutarlo: php bin/console doctrine:fixtures:load
        //PELIGRO: Esto reseteara toda la base de datos
    }
}
