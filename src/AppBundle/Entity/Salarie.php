<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Projet;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalarieRepository")
 */
class Salarie
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
     * @ORM\Column(name="civilite_salarie", type="string", length=255)
     */
    private $civiliteSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salarie", type="string", length=255)
     */
    private $nomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_salarie", type="string", length=255)
     */
    private $prenomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_salarie", type="string", length=255)
     */
    private $telephoneSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_salarie", type="string", length=255)
     */
    private $mobileSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_salarie", type="string", length=255)
     */
    private $mailSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_salarie", type="string", length=255)
     */
    private $rueSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_salarie", type="string", length=255)
     */
    private $villeSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_salarie", type="string", length=255)
     */
    private $cpSalarie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_salarie", type="date")
     */
    private $dateNaissanceSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance_salarie", type="string", length=255)
     */
    private $lieuNaissanceSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_securite_sociale_salarie", type="string", length=255)
     */
    private $numeroSecuriteSocialeSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civile_salarie", type="string", length=255)
     */
    private $etatCivileSalarie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_salarie", type="date")
     */
    private $dateCreationSalarie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification_salarie", type="date", nullable=true)
     */
    private $dateModificationSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_salarie", type="text", nullable=true)
     */
    private $commentaireSalarie;

    /**
     * @ORM\ManyToMany(targetEntity="Projet")
     */
    private $projets;

    public function __construct()
    {
        $this->projets = new ArrayCollection();
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
     * Set civiliteSalarie
     *
     * @param string $civiliteSalarie
     *
     * @return Salarie
     */
    public function setCiviliteSalarie($civiliteSalarie)
    {
        $this->civiliteSalarie = $civiliteSalarie;

        return $this;
    }

    /**
     * Get civiliteSalarie
     *
     * @return string
     */
    public function getCiviliteSalarie()
    {
        return $this->civiliteSalarie;
    }

    /**
     * Set nomSalarie
     *
     * @param string $nomSalarie
     *
     * @return Salarie
     */
    public function setNomSalarie($nomSalarie)
    {
        $this->nomSalarie = $nomSalarie;

        return $this;
    }

    /**
     * Get nomSalarie
     *
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->nomSalarie;
    }

    /**
     * Set prenomSalarie
     *
     * @param string $prenomSalarie
     *
     * @return Salarie
     */
    public function setPrenomSalarie($prenomSalarie)
    {
        $this->prenomSalarie = $prenomSalarie;

        return $this;
    }

    /**
     * Get prenomSalarie
     *
     * @return string
     */
    public function getPrenomSalarie()
    {
        return $this->prenomSalarie;
    }

    /**
     * Set telephoneSalarie
     *
     * @param string $telephoneSalarie
     *
     * @return Salarie
     */
    public function setTelephoneSalarie($telephoneSalarie)
    {
        $this->telephoneSalarie = $telephoneSalarie;

        return $this;
    }

    /**
     * Get telephoneSalarie
     *
     * @return string
     */
    public function getTelephoneSalarie()
    {
        return $this->telephoneSalarie;
    }

    /**
     * Set mobileSalarie
     *
     * @param string $mobileSalarie
     *
     * @return Salarie
     */
    public function setMobileSalarie($mobileSalarie)
    {
        $this->mobileSalarie = $mobileSalarie;

        return $this;
    }

    /**
     * Get mobileSalarie
     *
     * @return string
     */
    public function getMobileSalarie()
    {
        return $this->mobileSalarie;
    }

    /**
     * Set mailSalarie
     *
     * @param string $mailSalarie
     *
     * @return Salarie
     */
    public function setMailSalarie($mailSalarie)
    {
        $this->mailSalarie = $mailSalarie;

        return $this;
    }

    /**
     * Get mailSalarie
     *
     * @return string
     */
    public function getMailSalarie()
    {
        return $this->mailSalarie;
    }

    /**
     * Set rueSalarie
     *
     * @param string $rueSalarie
     *
     * @return Salarie
     */
    public function setRueSalarie($rueSalarie)
    {
        $this->rueSalarie = $rueSalarie;

        return $this;
    }

    /**
     * Get rueSalarie
     *
     * @return string
     */
    public function getRueSalarie()
    {
        return $this->rueSalarie;
    }

    /**
     * Set villeSalarie
     *
     * @param string $villeSalarie
     *
     * @return Salarie
     */
    public function setVilleSalarie($villeSalarie)
    {
        $this->villeSalarie = $villeSalarie;

        return $this;
    }

    /**
     * Get villeSalarie
     *
     * @return string
     */
    public function getVilleSalarie()
    {
        return $this->villeSalarie;
    }

    /**
     * Set cpSalarie
     *
     * @param string $cpSalarie
     *
     * @return Salarie
     */
    public function setCpSalarie($cpSalarie)
    {
        $this->cpSalarie = $cpSalarie;

        return $this;
    }

    /**
     * Get cpSalarie
     *
     * @return string
     */
    public function getCpSalarie()
    {
        return $this->cpSalarie;
    }

    /**
     * Set dateNaissanceSalarie
     *
     * @param \DateTime $dateNaissanceSalarie
     *
     * @return Salarie
     */
    public function setDateNaissanceSalarie($dateNaissanceSalarie)
    {
        $this->dateNaissanceSalarie = $dateNaissanceSalarie;

        return $this;
    }

    /**
     * Get dateNaissanceSalarie
     *
     * @return \DateTime
     */
    public function getDateNaissanceSalarie()
    {
        return $this->dateNaissanceSalarie;
    }

    /**
     * Set lieuNaissanceSalarie
     *
     * @param string $lieuNaissanceSalarie
     *
     * @return Salarie
     */
    public function setLieuNaissanceSalarie($lieuNaissanceSalarie)
    {
        $this->lieuNaissanceSalarie = $lieuNaissanceSalarie;

        return $this;
    }

    /**
     * Get lieuNaissanceSalarie
     *
     * @return string
     */
    public function getLieuNaissanceSalarie()
    {
        return $this->lieuNaissanceSalarie;
    }

    /**
     * Set numeroSecuriteSocialeSalarie
     *
     * @param string $numeroSecuriteSocialeSalarie
     *
     * @return Salarie
     */
    public function setNumeroSecuriteSocialeSalarie($numeroSecuriteSocialeSalarie)
    {
        $this->numeroSecuriteSocialeSalarie = $numeroSecuriteSocialeSalarie;

        return $this;
    }

    /**
     * Get numeroSecuriteSocialeSalarie
     *
     * @return string
     */
    public function getNumeroSecuriteSocialeSalarie()
    {
        return $this->numeroSecuriteSocialeSalarie;
    }

    /**
     * Set etatCivileSalarie
     *
     * @param string $etatCivileSalarie
     *
     * @return Salarie
     */
    public function setEtatCivileSalarie($etatCivileSalarie)
    {
        $this->etatCivileSalarie = $etatCivileSalarie;

        return $this;
    }

    /**
     * Get etatCivileSalarie
     *
     * @return string
     */
    public function getEtatCivileSalarie()
    {
        return $this->etatCivileSalarie;
    }

    /**
     * Set dateCreationSalarie
     *
     * @param \DateTime $dateCreationSalarie
     *
     * @return Salarie
     */
    public function setDateCreationSalarie($dateCreationSalarie)
    {
        $this->dateCreationSalarie = $dateCreationSalarie;

        return $this;
    }

    /**
     * Get dateCreationSalarie
     *
     * @return \DateTime
     */
    public function getDateCreationSalarie()
    {
        return $this->dateCreationSalarie;
    }

    /**
     * Set dateModificationSalarie
     *
     * @param \DateTime $dateModificationSalarie
     *
     * @return Salarie
     */
    public function setDateModificationSalarie($dateModificationSalarie)
    {
        $this->dateModificationSalarie = $dateModificationSalarie;

        return $this;
    }

    /**
     * Get dateModificationSalarie
     *
     * @return \DateTime
     */
    public function getDateModificationSalarie()
    {
        return $this->dateModificationSalarie;
    }

    /**
     * Set commentaireSalarie
     *
     * @param string $commentaireSalarie
     *
     * @return Salarie
     */
    public function setCommentaireSalarie($commentaireSalarie)
    {
        $this->commentaireSalarie = $commentaireSalarie;

        return $this;
    }

    /**
     * Get commentaireSalarie
     *
     * @return string
     */
    public function getCommentaireSalarie()
    {
        return $this->commentaireSalarie;
    }

    /**
     * Get projets
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
