<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Salarie;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_projet", type="string", length=255, unique=true)
     */
    private $libelleProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="description_projet", type="text")
     */
    private $descriptionProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_projet", type="date")
     */
    private $dateDebutProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_prevue_projet", type="date")
     */
    private $dateFinPrevueProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_reelle_projet", type="date", nullable=true)
     */
    private $dateFinReelleProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_projet", type="date")
     */
    private $dateCreationProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification_projet", type="date", nullable=true)
     */
    private $dateModificationProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_projet", type="text", nullable=true)
     */
    private $commentaireProjet;

    /**
    * @ORM\ManyToOne(targetEntity="Client", inversedBy="projets")
    */
    private $client;

    /**
    * @ORM\ManyToOne(targetEntity="Salarie", inversedBy="projetsResp")
    */
    private $responsable;

    /**
    * @ORM\ManyToMany(targetEntity="Salarie")
    */
    private $salaries;

    /**
    * @ORM\OneToMany(targetEntity="Tache", mappedBy="projet")
    */
    private $taches;

    public function __construct()
    {
        $this->salaries = new ArrayCollection();
        $this->taches = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleProjet
     *
     * @param string $libelleProjet
     *
     * @return Projet
     */
    public function setLibelleProjet($libelleProjet)
    {
        $this->libelleProjet = $libelleProjet;

        return $this;
    }

    /**
     * Get libelleProjet
     *
     * @return string
     */
    public function getLibelleProjet()
    {
        return $this->libelleProjet;
    }

    /**
     * Set descriptionProjet
     *
     * @param string $descriptionProjet
     *
     * @return Projet
     */
    public function setDescriptionProjet($descriptionProjet)
    {
        $this->descriptionProjet = $descriptionProjet;

        return $this;
    }

    /**
     * Get descriptionProjet
     *
     * @return string
     */
    public function getDescriptionProjet()
    {
        return $this->descriptionProjet;
    }

    /**
     * Set dateDebutProjet
     *
     * @param \DateTime $dateDebutProjet
     *
     * @return Projet
     */
    public function setDateDebutProjet($dateDebutProjet)
    {
        $this->dateDebutProjet = $dateDebutProjet;

        return $this;
    }

    /**
     * Get dateDebutProjet
     *
     * @return \DateTime
     */
    public function getDateDebutProjet()
    {
        return $this->dateDebutProjet;
    }

    /**
     * Set dateFinPrevueProjet
     *
     * @param \DateTime $dateFinPrevueProjet
     *
     * @return Projet
     */
    public function setDateFinPrevueProjet($dateFinPrevueProjet)
    {
        $this->dateFinPrevueProjet = $dateFinPrevueProjet;

        return $this;
    }

    /**
     * Get dateFinPrevueProjet
     *
     * @return \DateTime
     */
    public function getDateFinPrevueProjet()
    {
        return $this->dateFinPrevueProjet;
    }

    /**
     * Set dateFinReelleProjet
     *
     * @param \DateTime $dateFinReelleProjet
     *
     * @return Projet
     */
    public function setDateFinReelleProjet($dateFinReelleProjet)
    {
        $this->dateFinReelleProjet = $dateFinReelleProjet;

        return $this;
    }

    /**
     * Get dateFinReelleProjet
     *
     * @return \DateTime
     */
    public function getDateFinReelleProjet()
    {
        return $this->dateFinReelleProjet;
    }

    /**
     * Set dateCreationProjet
     *
     * @param \DateTime $dateCreationProjet
     *
     * @return Projet
     */
    public function setDateCreationProjet($dateCreationProjet)
    {
        $this->dateCreationProjet = $dateCreationProjet;

        return $this;
    }

    /**
     * Get dateCreationProjet
     *
     * @return \DateTime
     */
    public function getDateCreationProjet()
    {
        return $this->dateCreationProjet;
    }

    /**
     * Set dateModificationProjet
     *
     * @param \DateTime $dateModificationProjet
     *
     * @return Projet
     */
    public function setDateModificationProjet($dateModificationProjet)
    {
        $this->dateModificationProjet = $dateModificationProjet;

        return $this;
    }

    /**
     * Get dateModificationProjet
     *
     * @return \DateTime
     */
    public function getDateModificationProjet()
    {
        return $this->dateModificationProjet;
    }

    /**
     * Set commentaireProjet
     *
     * @param string $commentaireProjet
     *
     * @return Projet
     */
    public function setCommentaireProjet($commentaireProjet)
    {
        $this->commentaireProjet = $commentaireProjet;

        return $this;
    }

    /**
     * Get commentaireProjet
     *
     * @return string
     */
    public function getCommentaireProjet()
    {
        return $this->commentaireProjet;
    }

    /**
     * Set client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set responsable
     */
    public function setResponsable(Salarie $responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * Get responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Get salaries
     */
    public function getSalaries()
    {
        return $this->salaries;
    }

    /**
     * Get taches
     */
    public function getTaches()
    {
        return $this->taches;
    }

}
