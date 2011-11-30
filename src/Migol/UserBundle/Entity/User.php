<?php
// src/Acme/UserBundle/Entity/User.php

namespace Migol\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $firstname;

    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $lastname;

    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $address;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $city;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sloo\BackendBundle\Entity\Region", inversedBy="users")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected $region;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sloo\BackendBundle\Entity\Country", inversedBy="users")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected $country;
    
    /**
    * @ORM\Column(type="date", nullable=true)
    */
    protected $birthdate;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $player;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $manager;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $trainer;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $fan=true;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $medic;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $agent;
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $executive;  
    
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    protected $male;  
    
    /**
    * @ORM\Column(type="text", nullable=true)
    */
    protected $aboutme;
    
    /**
     * @ORM\OneToMany(targetEntity="Migol\UserBundle\Entity\UserSkill", mappedBy="user")
     */
    protected $skills;
    
    /**
     * @ORM\OneToMany(targetEntity="Migol\UserBundle\Entity\UserPosition", mappedBy="user")
     */
    protected $positions;
    
    /**
     * @ORM\ManyToMany(targetEntity="Sloo\ContactsBundle\Entity\ContactList", mappedBy="usercontactlists")
     */
    protected $contactlists;
    
    /**
     * @ORM\ManyToMany(targetEntity="Migol\UserBundle\Entity\User")
     * @ORM\JoinTable(
     * 		name="follow",
     *      joinColumns={
     *      	@ORM\JoinColumn(name="follower_id", referencedColumnName="id")
     *      },
     *      inverseJoinColumns={@ORM\JoinColumn(name="followed_id", referencedColumnName="id")}
     * )
     */
    protected $followlist;
    
    /**
     * @ORM\ManyToMany(targetEntity="Migol\UserBundle\Entity\User", mappedBy="followlist")
     */
    protected $followers;
    
    
    
    public function __construct()
    {
        parent::__construct();
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    $this->positions = new \Doctrine\Common\Collections\ArrayCollection();
    $this->contactlists = new \Doctrine\Common\Collections\ArrayCollection();
    $this->followlist = new \Doctrine\Common\Collections\ArrayCollection();
    $this->followers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * Set birthdate
     *
     * @param date $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return date 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set player
     *
     * @param boolean $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * Get player
     *
     * @return boolean 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set manager
     *
     * @param boolean $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    /**
     * Get manager
     *
     * @return boolean 
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set trainer
     *
     * @param boolean $trainer
     */
    public function setTrainer($trainer)
    {
        $this->trainer = $trainer;
    }

    /**
     * Get trainer
     *
     * @return boolean 
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set fan
     *
     * @param boolean $fan
     */
    public function setFan($fan)
    {
        $this->fan = $fan;
    }

    /**
     * Get fan
     *
     * @return boolean 
     */
    public function getFan()
    {
        return $this->fan;
    }

    /**
     * Set medic
     *
     * @param boolean $medic
     */
    public function setMedic($medic)
    {
        $this->medic = $medic;
    }

    /**
     * Get medic
     *
     * @return boolean 
     */
    public function getMedic()
    {
        return $this->medic;
    }

    /**
     * Set agent
     *
     * @param boolean $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    /**
     * Get agent
     *
     * @return boolean 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set executive
     *
     * @param boolean $executive
     */
    public function setExecutive($executive)
    {
        $this->executive = $executive;
    }

    /**
     * Get executive
     *
     * @return boolean 
     */
    public function getExecutive()
    {
        return $this->executive;
    }

    /**
     * Set male
     *
     * @param boolean $male
     */
    public function setMale($male)
    {
        $this->male = $male;
    }

    /**
     * Get male
     *
     * @return boolean 
     */
    public function getMale()
    {
        return $this->male;
    }

    /**
     * Set aboutme
     *
     * @param text $aboutme
     */
    public function setAboutme($aboutme)
    {
        $this->aboutme = $aboutme;
    }

    /**
     * Get aboutme
     *
     * @return text 
     */
    public function getAboutme()
    {
        return $this->aboutme;
    }

    /**
     * Set region
     *
     * @param Sloo\BackendBundle\Entity\Region $region
     */
    public function setRegion(\Sloo\BackendBundle\Entity\Region $region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return Sloo\BackendBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
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

    /**
     * Add skills
     *
     * @param Migol\UserBundle\Entity\UserSkill $skills
     */
    public function addUserSkill(\Migol\UserBundle\Entity\UserSkill $skills)
    {
        $this->skills[] = $skills;
    }

    /**
     * Get skills
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add positions
     *
     * @param Migol\UserBundle\Entity\UserPosition $positions
     */
    public function addUserPosition(\Migol\UserBundle\Entity\UserPosition $positions)
    {
        $this->positions[] = $positions;
    }

    /**
     * Get positions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * Add contactlists
     *
     * @param Sloo\ContactsBundle\Entity\ContactList $contactlists
     */
    public function addContactList(\Sloo\ContactsBundle\Entity\ContactList $contactlists)
    {
        $this->contactlists[] = $contactlists;
    }

    /**
     * Get contactlists
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getContactlists()
    {
        return $this->contactlists;
    }

    /**
     * Add followlist
     *
     * @param Migol\UserBundle\Entity\User $followlist
     */
    public function addUser(\Migol\UserBundle\Entity\User $followlist)
    {
        $this->followlist[] = $followlist;
    }

    /**
     * Get followlist
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFollowlist()
    {
        return $this->followlist;
    }

    /**
     * Get followers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFollowers()
    {
        return $this->followers;
    }
}