<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Projet;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="societe_client", type="string", length=255, unique=true)
     */
    private $societeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite_client", type="string", length=255)
     */
    private $civiliteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=255, unique=true)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", length=255)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_societe_client", type="string", length=255)
     */
    private $rueSocieteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_societe_client", type="string", length=255)
     */
    private $villeSocieteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_societe_client", type="string", length=255)
     */
    private $cpSocieteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_contact_societe_client", type="string", length=255)
     */
    private $telephoneContactSocieteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_contact_societe_client", type="string", length=255)
     */
    private $mobileContactSocieteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_contact_societe_client", type="string", length=255)
     */
    private $mailContactSocieteClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_client", type="date")
     */
    private $dateCreationClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification_client", type="date", nullable=true)
     */
    private $dateModificationClient;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_client", type="text", nullable=true)
     */
    private $commentaireClient;

    /**
    * @ORM\OneToMany(targetEntity="Projet", mappedBy="client")
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
     * Set societeClient
     *
     * @param string $societeClient
     *
     * @return Client
     */
    public function setSocieteClient($societeClient)
    {
        $this->societeClient = $societeClient;

        return $this;
    }

    /**
     * Get societeClient
     *
     * @return string
     */
    public function getSocieteClient()
    {
        return $this->societeClient;
    }

    /**
     * Set civiliteClient
     *
     * @param string $civiliteClient
     *
     * @return Client
     */
    public function setCiviliteClient($civiliteClient)
    {
        $this->civiliteClient = $civiliteClient;

        return $this;
    }

    /**
     * Get civiliteClient
     *
     * @return string
     */
    public function getCiviliteClient()
    {
        return $this->civiliteClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set rueSocieteClient
     *
     * @param string $rueSocieteClient
     *
     * @return Client
     */
    public function setRueSocieteClient($rueSocieteClient)
    {
        $this->rueSocieteClient = $rueSocieteClient;

        return $this;
    }

    /**
     * Get rueSocieteClient
     *
     * @return string
     */
    public function getRueSocieteClient()
    {
        return $this->rueSocieteClient;
    }

    /**
     * Set villeSocieteClient
     *
     * @param string $villeSocieteClient
     *
     * @return Client
     */
    public function setVilleSocieteClient($villeSocieteClient)
    {
        $this->villeSocieteClient = $villeSocieteClient;

        return $this;
    }

    /**
     * Get villeSocieteClient
     *
     * @return string
     */
    public function getVilleSocieteClient()
    {
        return $this->villeSocieteClient;
    }

    /**
     * Set cpSocieteClient
     *
     * @param string $cpSocieteClient
     *
     * @return Client
     */
    public function setCpSocieteClient($cpSocieteClient)
    {
        $this->cpSocieteClient = $cpSocieteClient;

        return $this;
    }

    /**
     * Get cpSocieteClient
     *
     * @return string
     */
    public function getCpSocieteClient()
    {
        return $this->cpSocieteClient;
    }

    /**
     * Set telephoneContactSocieteClient
     *
     * @param string $telephoneContactSocieteClient
     *
     * @return Client
     */
    public function setTelephoneContactSocieteClient($telephoneContactSocieteClient)
    {
        $this->telephoneContactSocieteClient = $telephoneContactSocieteClient;

        return $this;
    }

    /**
     * Get telephoneContactSocieteClient
     *
     * @return string
     */
    public function getTelephoneContactSocieteClient()
    {
        return $this->telephoneContactSocieteClient;
    }

    /**
     * Set mobileContactSocieteClient
     *
     * @param string $mobileContactSocieteClient
     *
     * @return Client
     */
    public function setMobileContactSocieteClient($mobileContactSocieteClient)
    {
        $this->mobileContactSocieteClient = $mobileContactSocieteClient;

        return $this;
    }

    /**
     * Get mobileContactSocieteClient
     *
     * @return string
     */
    public function getMobileContactSocieteClient()
    {
        return $this->mobileContactSocieteClient;
    }

    /**
     * Set mailContactSocieteClient
     *
     * @param string $mailContactSocieteClient
     *
     * @return Client
     */
    public function setMailContactSocieteClient($mailContactSocieteClient)
    {
        $this->mailContactSocieteClient = $mailContactSocieteClient;

        return $this;
    }

    /**
     * Get mailContactSocieteClient
     *
     * @return string
     */
    public function getMailContactSocieteClient()
    {
        return $this->mailContactSocieteClient;
    }

    /**
     * Set dateCreationClient
     *
     * @param \DateTime $dateCreationClient
     *
     * @return Client
     */
    public function setDateCreationClient($dateCreationClient)
    {
        $this->dateCreationClient = $dateCreationClient;

        return $this;
    }

    /**
     * Get dateCreationClient
     *
     * @return \DateTime
     */
    public function getDateCreationClient()
    {
        return $this->dateCreationClient;
    }

    /**
     * Set dateModificationClient
     *
     * @param \DateTime $dateModificationClient
     *
     * @return Client
     */
    public function setDateModificationClient($dateModificationClient)
    {
        $this->dateModificationClient = $dateModificationClient;

        return $this;
    }

    /**
     * Get dateModificationClient
     *
     * @return \DateTime
     */
    public function getDateModificationClient()
    {
        return $this->dateModificationClient;
    }

    /**
     * Set commentaireClient
     *
     * @param string $commentaireClient
     *
     * @return Client
     */
    public function setCommentaireClient($commentaireClient)
    {
        $this->commentaireClient = $commentaireClient;

        return $this;
    }

    /**
     * Get commentaireClient
     *
     * @return string
     */
    public function getCommentaireClient()
    {
        return $this->commentaireClient;
    }

    /**
     * Get projets
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
