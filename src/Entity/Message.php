<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 */
class Message
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Imię powinno mieć minimum {{ limit }} znaki długości",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * 
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Imię posiada niedozwolony znak"
     * )
     */
    private $imie;

    /**
     * @ORM\Column(type="string", length=100)
     * 
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 100,
     *      minMessage = "Nazwisko powinno mieć minimum {{ limit }} znaki długości",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Nazwisko posiada niedozwolony znak"
     * )
     */
    private $nazwisko;

    /**
     * @ORM\Column(type="string", length=100)
     * 
     * @Assert\Email
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     * 
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     */
    private $temat;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = "Wiadomość powinna mieć minimum {{ limit }} znaków długości",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $message;

    /**
     *  @ORM\Column(type="datetime")
     */
    private $dataUtworzenia;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImie(): ?string
    {
        return $this->imie;
    }

    public function setImie(string $imie): self
    {
        $this->imie = $imie;

        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->nazwisko;
    }

    public function setNazwisko(string $nazwisko): self
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTemat(): ?string
    {
        return $this->temat;
    }

    public function setTemat(string $temat): self
    {
        $this->temat = $temat;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDataUtworzenia(): ?\DateTimeInterface
    {
        return $this->dataUtworzenia;
    }

    public function setDataUtworzenia(\DateTimeInterface $dataUtworzenia): self
    {
        $this->dataUtworzenia = $dataUtworzenia;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function __toString()
    {
        return $this->getDataUtworzenia();
    }
}
