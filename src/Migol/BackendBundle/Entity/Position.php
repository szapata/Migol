<?php
namespace Migol\BackendBundle\Entity;

use Gedmo\Translatable\Translatable;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="positions")
 */

class Position implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=100)
     */
    private $posname;
    
    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $zonename;
    
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $pos;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $zone;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $htmlid;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $x1;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $y1;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $x2;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    protected $y2;
    
    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;

    
    /**
     * @ORM\OneToMany(targetEntity="Migol\UserBundle\Entity\UserPosition", mappedBy="position")
     */
    protected $userspositions;
    
    /**
     * @ORM\OneToMany(targetEntity="Position", mappedBy="position")
     */
    protected $skills;
    
    public function __toString() { return $this->posname; }
    
    public function __construct()
    {
        $this->userspositions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set posname
     *
     * @param string $posname
     */
    public function setPosname($posname)
    {
        $this->posname = $posname;
    }

    /**
     * Get posname
     *
     * @return string 
     */
    public function getPosname()
    {
        return $this->posname;
    }

    /**
     * Set zonename
     *
     * @param string $zonename
     */
    public function setZonename($zonename)
    {
        $this->zonename = $zonename;
    }

    /**
     * Get zonename
     *
     * @return string 
     */
    public function getZonename()
    {
        return $this->zonename;
    }

    /**
     * Set pos
     *
     * @param string $pos
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
    }

    /**
     * Get pos
     *
     * @return string 
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set zone
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * Get zone
     *
     * @return string 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set htmlid
     *
     * @param string $htmlid
     */
    public function setHtmlid($htmlid)
    {
        $this->htmlid = $htmlid;
    }

    /**
     * Get htmlid
     *
     * @return string 
     */
    public function getHtmlid()
    {
        return $this->htmlid;
    }

    /**
     * Set x1
     *
     * @param string $x1
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;
    }

    /**
     * Get x1
     *
     * @return string 
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * Set y1
     *
     * @param string $y1
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;
    }

    /**
     * Get y1
     *
     * @return string 
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * Set x2
     *
     * @param string $x2
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;
    }

    /**
     * Get x2
     *
     * @return string 
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * Set y2
     *
     * @param string $y2
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;
    }

    /**
     * Get y2
     *
     * @return string 
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * Add skills
     *
     * @param Migol\BackendBundle\Entity\Position $skills
     */
    public function addPosition(\Migol\BackendBundle\Entity\Position $skills)
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
     * Add userspositions
     *
     * @param Migol\UserBundle\Entity\UserPosition $userspositions
     */
    public function addUserPosition(\Migol\UserBundle\Entity\UserPosition $userspositions)
    {
        $this->userspositions[] = $userspositions;
    }

    /**
     * Get userspositions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUserspositions()
    {
        return $this->userspositions;
    }
}