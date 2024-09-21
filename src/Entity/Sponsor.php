<?php

namespace App\Entity;
<<<<<<< HEAD
use App\Repository\SponsorRepository;
use App\Entity\EvenementSponsor;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idSponsor=null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ nom sponsor ne peut pas être vide.")]
    #[Assert\Length(min: 5, minMessage: "Le lieu doit comporter au moins {{ limit }} caractères.")]
    private ?string $nomSponsor=null;

    #[ORM\Column(length: 12)]
    #[Assert\NotBlank(message: "Le champ tel sponsor ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^\+216[23579]\d{7}$/",
        message: "Le numéro de téléphone est invalide"
    )]
    private ?string $telSponsor=null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le champ email sponsor ne peut pas être vide.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $emailSponsor=null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ montant ne peut pas être vide.")]
    #[Assert\Range(min: 100, max: 2000, notInRangeMessage: "Le montant doit être compris entre {{ min }} et {{ max }}.")]
    #[Assert\Regex(pattern: '/^[0-9]*$/', message: "Le montant doit contenir uniquement des chiffres.")]
    private ?float $montant=null;

=======

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_sponsor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_sponsor", type="string", length=300, nullable=false)
     */
    private $nomSponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel_sponsor", type="string", length=12, nullable=false)
     */
    private $telSponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_sponsor", type="string", length=300, nullable=false)
     */
    private $emailSponsor;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec

    public function getIdSponsor(): ?int
    {
        return $this->idSponsor;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

<<<<<<< HEAD
    public function setNomSponsor(?string $nomSponsor): self
=======
    public function setNomSponsor(string $nomSponsor): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->nomSponsor = $nomSponsor;

        return $this;
    }

    public function getTelSponsor(): ?string
    {
        return $this->telSponsor;
    }

<<<<<<< HEAD
    public function setTelSponsor(?string $telSponsor): self
=======
    public function setTelSponsor(string $telSponsor): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->telSponsor = $telSponsor;

        return $this;
    }

    public function getEmailSponsor(): ?string
    {
        return $this->emailSponsor;
    }

<<<<<<< HEAD
    public function setEmailSponsor(?string $emailSponsor): self
=======
    public function setEmailSponsor(string $emailSponsor): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->emailSponsor = $emailSponsor;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

<<<<<<< HEAD
    public function setMontant(?float $montant): self
=======
    public function setMontant(float $montant): self
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
    {
        $this->montant = $montant;

        return $this;
    }


<<<<<<< HEAD


    
=======
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec
}
