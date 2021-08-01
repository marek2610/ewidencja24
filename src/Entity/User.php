<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"username", "email", "ep"}, message="Nazwa jest już zajęta, spróbuj innej.")
 */
class User implements UserInterface, \Serializable
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
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Nazwa użytkownika powinna mieć minimum {{ limit }} znaki długości",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * 
     * )
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Email(
     *      message="Adres '{{ value }}' nie jest poprawnym adresem. Należy wpisać poprawny adres email."
     * )
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     */
    private $email;
    
    /**
     * @var Dokument[]|ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Dokument", mappedBy="owner")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $dokumenty;

        /**
     * @ORM\Column(type="string", length=10, nullable=true, unique=true)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * 
     * @Assert\Regex(
     *     pattern="/^[0-9]*$/",
     *     match=true,
     *     message="Nr Producenta posiada niedozwolony znak. Akceptowalne są wyłącznie cyfry"
     * )
     * @Assert\Length(
     *      value=9,
     *      exactMessage="Nr Producenta posiada dokładnie {{ limit }} cyfr. "
     * )
     */
    private $ep;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Imię posiada niedozwolony znak"
     * )
     * 
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Imię powinno mieć minimum {{ limit }} znaki długości",
     *      maxMessage = "Imię nie powinno być dłuższe niż {{ limit }} znaków"
     * )
     * 
     */
    private $imie;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * 
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Nazwisko posiada niedozwolony znak"
     * )
     * 
     * @Assert\Length(
     *      min = 3,
     *      max = 70,
     *      minMessage = "Nazwisko powinno mieć minimum {{ limit }} znaki długości",
     *      maxMessage = "Nazwisko nie powinno być dłuższe niż {{ limit }} znaków"
     * )
     * 
     */
    private $nazwisko;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\NotBlank(
     *      message = "Pole nie może być puste."
     * )
     * 
     */
    private $znaksprawy;

    /**
     *  @ORM\Column(type="datetime", nullable=true)
     */
    private $dataUtworzenia;

    /**
     *  @ORM\Column(type="datetime", nullable=true)
     */
    private $dataAktualizacji;

    /**
     *  @ORM\Column(type="datetime", nullable=true)
     */
    private $dataTermin;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * 
     */
    private $status;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * 
     */
    private $roles = [];
    /**
     * User constructor
     */
    public function __construct()
    {
        $this->enebled = false;
        $this->roles = array();
        $this->dokumenty = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getRoles() 
    {
        #### 1 rozwiązanie
        // każdy user będzie miał role ROLE_USER
        // return [
        //     'ROLE_USER'
        // ];

        #### 2 rozwiązanie - poprawne
        // $tmpRoles = $this->roles;
        // if (in_array('ROLE_USER', $tmpRoles) === false)  {
        //     $tmpRoles[] = 'ROLE_USER';
        // }

        // return $tmpRoles;

        #### 3 rozwiązanie dział dla rejestracji
        return $this->roles;
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt() {}

    public function eraseCredentials() {}

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->email,
            $this->password
        ]);
    }

    public function unserialize($string)
    {
        list (
            $this->id,
            $this->username,
            $this->email,
            $this->password
        ) = unserialize($string, ['allowed_classes' => false]);
    }

    public function getDokumenty(): ?string
    {
        return $this->dokumenty;
    }

    public function addDokumenty(Dokument $dokument)
    {
        $this->dokumenty[] = $dokument;
        
        return $this;
    }

    public function getEp(): ?string
    {
        return $this->ep;
    }

    public function setEp(?string $ep): self
    {
        $this->ep = $ep;

        return $this;
    }

    public function getImie(): ?string
    {
        return $this->imie;
    }

    public function setImie(?string $imie): self
    {
        $this->imie = $imie;

        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->nazwisko;
    }

    public function setNazwisko(?string $nazwisko): self
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    public function getZnaksprawy(): ?string
    {
        return $this->znaksprawy;
    }

    public function setZnaksprawy(?string $znaksprawy): self
    {
        $this->znaksprawy = $znaksprawy;

        return $this;
    }

    public function getDataUtworzenia(): ?\DateTimeInterface
    {
        return $this->dataUtworzenia;
    }

    public function setDataUtworzenia(?\DateTimeInterface $dataUtworzenia): self
    {
        $this->dataUtworzenia = $dataUtworzenia;

        return $this;
    }

    public function getDataAktualizacji(): ?\DateTimeInterface
    {
        return $this->dataAktualizacji;
    }

    public function setDataAktualizacji(?\DateTimeInterface $dataAktualizacji): self
    {
        $this->dataAktualizacji = $dataAktualizacji;

        return $this;
    }

    public function getDataTermin(): ?\DateTimeInterface
    {
        return $this->dataTermin;
    }

    public function setDataTermin(?\DateTimeInterface $dataTermin): self
    {
        $this->dataTermin = $dataTermin;

        return $this;
    }

    public function removeDokumenty(Dokument $dokumenty): self
    {
        if ($this->dokumenty->contains($dokumenty)) {
            $this->dokumenty->removeElement($dokumenty);
            // set the owning side to null (unless already changed)
            // if ($dokumenty->getOwner() === $this) {
            //     $dokumenty->setOwner(null);
            // }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }


}