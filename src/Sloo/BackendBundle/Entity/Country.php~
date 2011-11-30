<?php
namespace Sloo\BackendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Sloo\BackendBundle\Model\CountryRepository")
 * @ORM\Table(name="countries")
 */

class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Region", mappedBy="country")
     */
    protected $regions;
    
    /**
     * @ORM\OneToMany(targetEntity="Migol\UserBundle\Entity\User", mappedBy="country")
     */
    protected $users;

    public function __construct()
    {
        $this->regions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add regions
     *
     * @param Sloo\BackendBundle\Entity\Region $regions
     */
    public function addRegions(\Sloo\BackendBundle\Entity\Region $regions)
    {
        $this->regions[] = $regions;
    }

    /**
     * Get regions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Add users
     *
     * @param Migol\UserBundle\Entity\User $users
     */
    public function addUsers(\Migol\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    public function __toString() { return $this->name; }

    /**
     * Add regions
     *
     * @param Sloo\BackendBundle\Entity\Region $regions
     */
    public function addRegion(\Sloo\BackendBundle\Entity\Region $regions)
    {
        $this->regions[] = $regions;
    }

    /**
     * Add users
     *
     * @param Migol\UserBundle\Entity\User $users
     */
    public function addUser(\Sloo\BackendBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }
}