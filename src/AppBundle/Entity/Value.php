<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Value
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ValueRepository")
 */
class Value
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @ManyToOne(targetEntity="Base", inversedBy="values")
     * @JoinColumn(name="entity_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $entity;

    /**
     * @ManyToOne(targetEntity="AppBundle\Entity\Attribute")
     * @JoinColumn(name="attribute_name", referencedColumnName="name")
     **/
    private $attribute;


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
     * @param string $value
     * @return Value
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set entity
     *
     * @param \AppBundle\Entity\Base $entity
     * @return Value
     */
    public function setEntity(\AppBundle\Entity\Base $entity = null)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return \AppBundle\Entity\Base 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set attribute
     *
     * @param \AppBundle\Entity\Attribute $attribute
     * @return Value
     */
    public function setAttribute(\AppBundle\Entity\Attribute $attribute = null)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return \AppBundle\Entity\Attribute 
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
