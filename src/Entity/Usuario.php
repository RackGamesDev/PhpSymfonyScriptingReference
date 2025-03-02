<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; //Importando el sistema de validaciones

//Objeto instanciable hecho automaticamente con php bin/console make:usuario (listo para ser usado en el codigo y en la base de datos)

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank] //Aplicando una validacion a un campo, en este caso para que no pueda ser "", si lo es da error y no se crea el objeto
    private ?string $uuid = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $nick = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Type('integer')] //Validacion para que el campo sea de tipo entero
    #[Assert\Positive] //Validacion para que el campo sea positivo
    private ?int $numero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(?string $nick): static
    {
        $this->nick = $nick;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }
}
