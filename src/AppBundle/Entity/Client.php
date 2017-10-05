<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="Company", type="string", length=255)
     */
    private $company;

    
        /**
     * @var string
     *
     * @ORM\Column(name="ContactName", type="string", length=255)
     */
    private $contactName;

    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="text")
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=255)
     */
    private $city;
    
     /**
     * @var int
     *
     * @ORM\Column(name="ZIP", type="integer")
     */
    private $zip;

    /**
     * @var int
     *
     * @ORM\Column(name="PhoneNumber", type="integer")
     */
    private $phoneNumber;


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
     * Set company
     *
     * @param string $company
     *
     * @return Client
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    
    
    /**
     * Set company
     *
     * @param string $contactname
     *
     * @return Client
     */
    public function setContactName($contactname)
    {
        $this->contactName = $contactname;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
    

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Client
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Client
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Client
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }
    
     /**
     * Set phoneNumber
     *
     * @param integer $zip
     *
     * @return Client
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    
    
    
    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Besoin", mappedBy="client")
     */
    private $besoins;
    // ...

    public function __construct() {
        $this->besoins = new ArrayCollection();
    }
    



    /**
     * Add besoin
     *
     * @param \AppBundle\Entity\Besoin $besoin
     *
     * @return Client
     */
    public function addBesoin(\AppBundle\Entity\Besoin $besoin)
    {
        $this->besoins[] = $besoin;

        return $this;
    }

    /**
     * Remove besoin
     *
     * @param \AppBundle\Entity\Besoin $besoin
     */
    public function removeBesoin(\AppBundle\Entity\Besoin $besoin)
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
    
    public function __toString() {
    return $this->company;
}
    
    
}
