<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="libelle_tache", type="string", length=255)
     */
    private $libelleTache;

    /**
     * @var string
     *
     * @ORM\Column(name="description_tache", type="text")
     */
    private $descriptionTache;

    /**
     * @var string
     *
     * @ORM\Column(name="status_tache", type="string", length=255, nullable=true)
     */
    private $statusTache;

    /**
     * @var bool
     *
     * @ORM\Column(name="cloturee_tache", type="boolean")
     */
    private $clotureeTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_tache", type="date")
     */
    private $dateDebutTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_tache", type="date")
     */
    private $dateFinTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_reelle_tache", type="date", nullable=true)
     */
    private $dateFinReelleTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_tache", type="date")
     */
    private $dateCreationTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification_tache", type="date", nullable=true)
     */
    private $dateModificationTache;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_tache", type="text", nullable=true)
     */
    private $commentaireTache;

    /**
    * @ORM\ManyToOne(targetEntity="Projet", inversedBy="taches")
    */
    private $projet;


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
     * Set libelleTache
     *
     * @param string $libelleTache
     *
     * @return Tache
     */
    public function setLibelleTache($libelleTache)
    {
        $this->libelleTache = $libelleTache;

        return $this;
    }

    /**
     * Get libelleTache
     *
     * @return string
     */
    public function getLibelleTache()
    {
        return $this->libelleTache;
    }

    /**
     * Set descriptionTache
     *
     * @param string $descriptionTache
     *
     * @return Tache
     */
    public function setDescriptionTache($descriptionTache)
    {
        $this->descriptionTache = $descriptionTache;

        return $this;
    }

    /**
     * Get descriptionTache
     *
     * @return string
     */
    public function getDescriptionTache()
    {
        return $this->descriptionTache;
    }

    /**
     * Set statusTache
     *
     * @param string $statusTache
     *
     * @return Tache
     */
    public function setStatusTache($statusTache)
    {
        $this->statusTache = $statusTache;

        return $this;
    }

    /**
     * Get statusTache
     *
     * @return string
     */
    public function getStatusTache()
    {
        return $this->statusTache;
    }

    /**
     * Set clotureeTache
     *
     * @param boolean $clotureeTache
     *
     * @return Tache
     */
    public function setClotureeTache($clotureeTache)
    {
        $this->clotureeTache = $clotureeTache;

        return $this;
    }

    /**
     * Get clotureeTache
     *
     * @return bool
     */
    public function getClotureeTache()
    {
        return $this->clotureeTache;
    }

    /**
     * Set dateDebutTache
     *
     * @param \DateTime $dateDebutTache
     *
     * @return Tache
     */
    public function setDateDebutTache($dateDebutTache)
    {
        $this->dateDebutTache = $dateDebutTache;

        return $this;
    }

    /**
     * Get dateDebutTache
     *
     * @return \DateTime
     */
    public function getDateDebutTache()
    {
        return $this->dateDebutTache;
    }

    /**
     * Set dateFinTache
     *
     * @param \DateTime $dateFinTache
     *
     * @return Tache
     */
    public function setDateFinTache($dateFinTache)
    {
        $this->dateFinTache = $dateFinTache;

        return $this;
    }

    /**
     * Get dateFinTache
     *
     * @return \DateTime
     */
    public function getDateFinTache()
    {
        return $this->dateFinTache;
    }

    /**
     * Set dateFinReelleTache
     *
     * @param \DateTime $dateFinReelleTache
     *
     * @return Tache
     */
    public function setDateFinReelleTache($dateFinReelleTache)
    {
        $this->dateFinReelleTache = $dateFinReelleTache;

        return $this;
    }

    /**
     * Get dateFinReelleTache
     *
     * @return \DateTime
     */
    public function getDateFinReelleTache()
    {
        return $this->dateFinReelleTache;
    }

    /**
     * Set dateCreationTache
     *
     * @param \DateTime $dateCreationTache
     *
     * @return Tache
     */
    public function setDateCreationTache($dateCreationTache)
    {
        $this->dateCreationTache = $dateCreationTache;

        return $this;
    }

    /**
     * Get dateCreationTache
     *
     * @return \DateTime
     */
    public function getDateCreationTache()
    {
        return $this->dateCreationTache;
    }

    /**
     * Set dateModificationTache
     *
     * @param \DateTime $dateModificationTache
     *
     * @return Tache
     */
    public function setDateModificationTache($dateModificationTache)
    {
        $this->dateModificationTache = $dateModificationTache;

        return $this;
    }

    /**
     * Get dateModificationTache
     *
     * @return \DateTime
     */
    public function getDateModificationTache()
    {
        return $this->dateModificationTache;
    }

    /**
     * Set commentaireTache
     *
     * @param string $commentaireTache
     *
     * @return Tache
     */
    public function setCommentaireTache($commentaireTache)
    {
        $this->commentaireTache = $commentaireTache;

        return $this;
    }

    /**
     * Get commentaireTache
     *
     * @return string
     */
    public function getCommentaireTache()
    {
        return $this->commentaireTache;
    }

    /**
     * Set projet
     */
    public function setClient(Projet $projet)
    {
        $this->projet = $projet;
    }

    /**
     * Get projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
