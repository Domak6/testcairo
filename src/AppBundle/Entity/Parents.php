<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;

/**
* @ORM\Entity
* @ORM\Table(name="parents")
*/
class Parents
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Children", mappedBy="parent")
     */
    private $childrens;

    public function __construct()
    {
        $this->childrens = new ArrayCollection();
    }

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
    /**
     * Add children
     *
     * @param \AppBundle\Entity\Children $children
     *
     * @return Parents
     */
    public function addChildrens(\AppBundle\Entity\Children $children)
    {
        $this->childrens[] = $children;

        return $this;
    }

    public function getChildrens()
    {
        return $this->childrens;
    }

    public function setChildrens($childrens)
    {
        $this->childrens=$childrens;
    }
}
