<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Base Class for Inheritance
 *
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discriminator", type="string")
 * @DiscriminatorMap({"project" = "Project", "component" = "Component", "component" = "Component", "revisionState" = "RevisionState", "revisionInProject" = "RevisionInProject"})
 *
 */
abstract class Base
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="Value", mappedBy="entity", cascade={"persist"}, fetch="EAGER")
     **/
    protected $values;

    public function __construct($id = null)
    {
        if($id == null){
            $this->id = uniqid();
        }else{
            $this->id = $id;
        }

        $this->values = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add values
     *
     * @param \AppBundle\Entity\Value $values
     * @return Base
     */
    public function addValue(\AppBundle\Entity\Value $values)
    {
        $this->values[] = $values;
        $values->setEntity($this);

        return $this;
    }

    /**
     * Remove values
     *
     * @param \AppBundle\Entity\Value $values
     */
    public function removeValue(\AppBundle\Entity\Value $values)
    {
        $this->values->removeElement($values);
    }

    /**
     * Get values
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValues()
    {
        return $this->values;
    }
}
