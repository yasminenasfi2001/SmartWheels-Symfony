<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\EvenementRepository;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{ 
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idEvent=null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ nom ne peut pas être vide.")]
    #[Assert\Length(min: 5, minMessage: "Le lieu doit comporter au moins {{ limit }} caractères.")]
    private ?string $nomEvent=null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le champ date  ne peut pas être vide.")]
    #[Assert\LessThan(propertyPath: 'dateFin', message: "La date de début doit être inférieure à la date de fin.")]
    private ?\DateTime $dateDebut=null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le champ date  ne peut pas être vide.")]
    private ?\DateTime $dateFin=null;


    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ lieu ne peut pas être vide.")]
    private ?string $lieuEvent=null;


    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ nb de place ne peut pas être vide.")]
    #[Assert\Range(min: 10, max: 100, notInRangeMessage: "Le nombre de places doit être compris entre {{ min }} et {{ max }}.")]
    private ?int $nbPlaces=null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ type event ne peut pas être vide.")]
    private ?string $typeEvent=null;

    #[ORM\Column]
    private ?int $nbVues=0;
=======
use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_event", type="string", length=300, nullable=false)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu_event", type="string", length=300, nullable=false)
     */
    private $lieuEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_places", type="integer", nullable=false)
     */
    private $nbPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_event", type="string", length=300, nullable=false)
     */
    private $typeEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_vues", type="integer", nullable=false)
     */
    private $nbVues;
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

<<<<<<< HEAD
    public function setNomEvent(?string $nomEvent): self
=======
    public function setNomEvent(string $nomEvent): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

<<<<<<< HEAD
    public function getDateDebut(): ?\DateTime
=======
    public function getDateDebut(): ?\DateTimeInterface
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        return $this->dateDebut;
    }

<<<<<<< HEAD
    public function setDateDebut(?\DateTime $dateDebut): self
=======
    public function setDateDebut(\DateTimeInterface $dateDebut): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

<<<<<<< HEAD
    public function getDateFin(): ?\DateTime
=======
    public function getDateFin(): ?\DateTimeInterface
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        return $this->dateFin;
    }

<<<<<<< HEAD
    public function setDateFin(?\DateTime $dateFin): self
=======
    public function setDateFin(\DateTimeInterface $dateFin): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getLieuEvent(): ?string
    {
        return $this->lieuEvent;
    }

<<<<<<< HEAD
    public function setLieuEvent(?string $lieuEvent): self
=======
    public function setLieuEvent(string $lieuEvent): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->lieuEvent = $lieuEvent;

        return $this;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbPlaces;
    }

<<<<<<< HEAD
    public function setNbPlaces(?int $nbPlaces): self
=======
    public function setNbPlaces(int $nbPlaces): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    public function getTypeEvent(): ?string
    {
        return $this->typeEvent;
    }

<<<<<<< HEAD
    public function setTypeEvent(?string $typeEvent): self
=======
    public function setTypeEvent(string $typeEvent): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    public function getNbVues(): ?int
    {
        return $this->nbVues;
    }

    public function setNbVues(int $nbVues): self
    {
        $this->nbVues = $nbVues;

        return $this;
    }

<<<<<<< HEAD
    private $sponsors;

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
    }

    
=======

>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
}
