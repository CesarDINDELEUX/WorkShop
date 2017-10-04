<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as User;

/**
 * Client
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact extends User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    
    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Client", mappedBy="product")
     */
    private $besoins;

    public function __construct() {
        $this->besoins = new ArrayCollection();
    }
    
     


    /**
     * Add besoin
     *
     * @param \AppBundle\Entity\Client $besoin
     *
     * @return Contact
     */
    public function addBesoin(\AppBundle\Entity\Client $besoin)
    {
        $this->besoins[] = $besoin;

        return $this;
    }

    /**
     * Remove besoin
     *
     * @param \AppBundle\Entity\Client $besoin
     */
    public function removeBesoin(\AppBundle\Entity\Client $besoin)
    {
        $this->besoins->removeElement($besoin);
    }

    /**
     * Get besoins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBesoins()
    {
        return $this->besoins;
    }
}
