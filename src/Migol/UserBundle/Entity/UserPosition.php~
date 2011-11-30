<?php
namespace Migol\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_positions")
 */

class UserPosition
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Migol\BackendBundle\Entity\Position", inversedBy="userspositions")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     */
    protected $position;
    
        
    /**
     * @ORM\ManyToOne(targetEntity="Migol\UserBundle\Entity\User", inversedBy="positions")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    


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
     * Set position
     *
     * @param Migol\BackendBundle\Entity\Position $position
     */
    public function setPosition(\Migol\BackendBundle\Entity\Position $position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return Migol\BackendBundle\Entity\Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set user
     *
     * @param Migol\UserBundle\Entity\User $user
     */
    public function setUser(\Migol\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Migol\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}