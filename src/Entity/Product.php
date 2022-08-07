<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\Column(type: 'text', nullable: true)]
    private $infos;

    #[ORM\Column(type: 'string', length: 255)]
    private $dispo;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo;

    #[ORM\Column(type: 'integer')]
    private $RAM;

    #[ORM\Column(type: 'integer')]
    private $CPU_sp;

    #[ORM\Column(type: 'string', length: 255)]
    private $OP_V;

    #[ORM\Column(type: 'integer')]
    private $Pins;

    #[ORM\Column(type: 'integer')]
    private $quantity;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getInfos(): ?string
    {
        return $this->infos;
    }

    public function setInfos(?string $infos): self
    {
        $this->infos = $infos;

        return $this;
    }

    public function getDispo(): ?string
    {
        return $this->dispo;
    }

    public function setDispo(string $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getRAM(): ?int
    {
        return $this->RAM;
    }

    public function setRAM(int $RAM): self
    {
        $this->RAM = $RAM;

        return $this;
    }

    public function getCPUSp(): ?int
    {
        return $this->CPU_sp;
    }

    public function setCPUSp(int $CPU_sp): self
    {
        $this->CPU_sp = $CPU_sp;

        return $this;
    }

    public function getOPV(): ?string
    {
        return $this->OP_V;
    }

    public function setOPV(string $OP_V): self
    {
        $this->OP_V = $OP_V;

        return $this;
    }

    public function getPins(): ?int
    {
        return $this->Pins;
    }

    public function setPins(int $Pins): self
    {
        $this->Pins = $Pins;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

}
