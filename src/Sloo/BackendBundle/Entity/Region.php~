<?php
namespace Sloo\BackendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Sloo\BackendBundle\Model\RegionRepository")
 * @ORM\Table(name="regions")
 */

class Region
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
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="regions")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Migol\UserBundle\Entity\User", mappedBy="region")
     */
    protected $users;
    
    /**
     * @ORM\OneToMany(targetEntity="Sloo\BackendBundle\Entity\City", mappedBy="region")
     */
    protected $cities;

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
     * Set country
     *
     * @param Sloo\BackendBundle\Entity\Country $country
     */
    public function setCountry(\Sloo\BackendBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Sloo\BackendBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add cities
     *
     * @param Sloo\BackendBundle\Entity\City $cities
     */
    public function addCities(\Sloo\BackendBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;
    }

    /**
     * Get cities
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Add users
     *
     * @param Migol\UserBundle\Entity\User $users
     */
    public function addUser(\Migol\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }

    /**
     * Add cities
     *
     * @param Sloo\BackendBundle\Entity\City $cities
     */
    public function addCity(\Sloo\BackendBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;
    }
}