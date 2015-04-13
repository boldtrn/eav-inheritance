<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\InheritanceType;

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
     * @ORM\Column(name="values", type="jsonb", nullable=true)
     **/
    protected $values;

    public function __construct($id = null)
    {
        if($id == null){
            $this->id = uniqid();
        }else{
            $this->id = $id;
        }
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
     * Add a value
     *
     * @param $key
     * @param $value
     * @return Base
     */
    public function addValue($key, $value)
    {
        $this->values[$key] = $value;
        return $this;
    }

    /**
     * Removes a Value
     *
     */
    public function removeValue($key)
    {
        // TODO Implement
        //$this->values->removeElement($values);
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
