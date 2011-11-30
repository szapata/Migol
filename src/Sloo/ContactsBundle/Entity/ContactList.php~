<?php
namespace Sloo\ContactsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Sloo\ContactsBundle\Model\ContactsListRepository")
 * @ORM\Table(name="contacts_list", uniqueConstraints={@ORM\UniqueConstraint(name="unique_indx", columns={"name", "owner"})}) 
 */

class ContactList
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
     * @ORM\ManyToOne(targetEntity="Migol\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="owner", referencedColumnName="id")
     */
    protected $owner;
    
    /**
     * @ORM\ManyToMany(targetEntity="Migol\UserBundle\Entity\User")
     * @ORM\JoinTable(
     * 		name="join_user_contacts_list",
     *      joinColumns={
     *      	@ORM\JoinColumn(name="list_id", referencedColumnName="id")
     *      },
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    protected $usercontactlists;

    

    public function __construct()
    {
        $this->usercontactlists = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set owner
     *
     * @param Migol\UserBundle\Entity\User $owner
     */
    public function setOwner(\Migol\UserBundle\Entity\User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return Migol\UserBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Add usercontactlists
     *
     * @param Migol\UserBundle\Entity\User $usercontactlists
     */
    public function addUser(\Migol\UserBundle\Entity\User $usercontactlists)
    {
        $this->usercontactlists[] = $usercontactlists;
    }

    /**
     * Get usercontactlists
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsercontactlists()
    {
        return $this->usercontactlists;
    }
}