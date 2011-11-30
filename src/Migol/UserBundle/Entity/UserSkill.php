<?php
namespace Migol\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_skills")
 */

class UserSkill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $value;
    
    /**
     * @ORM\ManyToOne(targetEntity="Migol\UserBundle\Entity\User", inversedBy="skills")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Migol\BackendBundle\Entity\Skill", inversedBy="usersskills")
     * @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
     */
    protected $skill;

    

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
     * Set value
     *
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
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

    /**
     * Set skill
     *
     * @param Migol\BackendBundle\Entity\Skill $skill
     */
    public function setSkill(\Migol\BackendBundle\Entity\Skill $skill)
    {
        $this->skill = $skill;
    }

    /**
     * Get skill
     *
     * @return Migol\BackendBundle\Entity\Skill 
     */
    public function getSkill()
    {
        return $this->skill;
    }
}