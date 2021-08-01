<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DokumentRepository")
 */
class Dokument
{
    const STATUS_ACTIVE = "active";
    const STATUS_DELETE = "delete";

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * 
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste"
     * )
     */
    private $data;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste"
     * )
     * @Assert\NotEqualTo(
     *      value = 0,
     *      message = "Wartość musi być różna od zera"
     * )
     */
    private $kwota;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste"
     * )
     * @Assert\Length(
     *      min=3,
     *      max=255,
     *      minMessage="Należy wpisać minimum 3 znaki",
     *      maxMessage="Wartość pola nie może być dłuższa niż 255 znaków"
     * )
     */
    private $faktura;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice(
     *      {"przychód", "koszt"},
     *      message = "Pole nie może być puste"
     * )
     */
    private $rodzaj;

    /**
     * @ORM\Column(type="text")
     */
    private $uwagi;

    /**
     * @ORM\Column(type="datetime")
     */
    private $utworzony;

    /**
     * @ORM\Column(type="datetime")
     */
    private $modyfikacja;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $status;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="dokumenty")
     * @var User
     */
    private $owner;

    /**
     * @ORM\Column(type="datetime",  nullable=true)
     * 
     * @var string A "Y-m-" formatted value
     * 
     */
    private $dataShort;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getKwota(): ?float
    {
        return $this->kwota;
    }

    public function setKwota(float $kwota): self
    {
        $this->kwota = $kwota;

        return $this;
    }

    public function getFaktura(): ?string
    {
        return $this->faktura;
    }

    public function setFaktura(string $faktura): self
    {
        $this->faktura = $faktura;

        return $this;
    }

    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }

    public function setRodzaj(string $rodzaj): self
    {
        $this->rodzaj = $rodzaj;

        return $this;
    }

    public function getUwagi(): ?string
    {
        return $this->uwagi;
    }

    public function setUwagi(string $uwagi): self
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    public function getUtworzony(): ?\DateTimeInterface
    {
        return $this->utworzony;
    }

    public function setUtworzony(\DateTimeInterface $utworzony): self
    {
        $this->utworzony = $utworzony;

        return $this;
    }

    public function getModyfikacja(): ?\DateTimeInterface
    {
        return $this->modyfikacja;
    }

    public function setModyfikacja(\DateTimeInterface $modyfikacja): self
    {
        $this->modyfikacja = $modyfikacja;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }
    
    public function __toString()
    {
        return $this->getKwota();
    }

    public function getDataShort(): ?\DateTimeInterface
    {
        return $this->dataShort;
    }

    public function setDataShort(?\DateTimeInterface $dataShort): self
    {
        $this->dataShort = $dataShort;

        return $this;
    }
}
