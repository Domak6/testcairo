<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;

/**
* @ORM\Entity
* @ORM\Table(name="childrens")
*/
class Children
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer",name="id", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255, name="name", nullable=false)
     */
    private $name;

     /**
     * @ORM\Column(type="string", length=255, name="surname", nullable=false)
     */
    private $surname;
     /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Parents", inversedBy="childrens")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname=$surname;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent=$parent;
    }
    public function addParent($parent)
    {
        $this->childrens[] = $parent;
    }
}
