<?php

namespace App\Entity;

<<<<<<< HEAD
use App\Repository\EvenementSponsorRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Evenement;
use App\Entity\Sponsor;

#[ORM\Entity(repositoryClass: EvenementSponsorRepository::class)]
class EvenementSponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Sponsor::class, inversedBy: 'sponsors')]
    #[ORM\JoinColumn(name: 'ID_sponsor', referencedColumnName: 'idSponsor')]
    private ?Sponsor $ID_sponsor = null;

    #[ORM\ManyToOne(targetEntity: Evenement::class, inversedBy: 'evenements')]
    #[ORM\JoinColumn(name: 'ID_event', referencedColumnName: 'idEvent')]
    private ?Evenement $ID_event = null;
=======
use Doctrine\ORM\Mapping as ORM;

/**
 * EvenementSponsor
 *
 * @ORM\Table(name="evenement_sponsor", indexes={@ORM\Index(name="FK_EVENT", columns={"ID_event"}), @ORM\Index(name="FK_SPONSOR", columns={"ID_sponsor"})})
 * @ORM\Entity
 */
class EvenementSponsor
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Sponsor
     *
     * @ORM\ManyToOne(targetEntity="Sponsor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_sponsor", referencedColumnName="ID_sponsor")
     * })
     */
    private $idSponsor;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_event", referencedColumnName="ID_event")
     * })
     */
    private $idEvent;
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSponsor(): ?Sponsor
    {
<<<<<<< HEAD
        return $this->ID_sponsor;
    }

    public function setIdSponsor(?Sponsor $ID_sponsor): self
    {
        $this->ID_sponsor = $ID_sponsor;
=======
        return $this->idSponsor;
    }

    public function setIdSponsor(?Sponsor $idSponsor): self
    {
        $this->idSponsor = $idSponsor;
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec

        return $this;
    }

    public function getIdEvent(): ?Evenement
    {
<<<<<<< HEAD
        return $this->ID_event;
    }

    public function setIdEvent(?Evenement $ID_event): self
    {
        $this->ID_event = $ID_event;
=======
        return $this->idEvent;
    }

    public function setIdEvent(?Evenement $idEvent): self
    {
        $this->idEvent = $idEvent;
>>>>>>> 0a2dda5ad602af99a9b661ffb1c7c47b3b6697ec

        return $this;
    }


}
