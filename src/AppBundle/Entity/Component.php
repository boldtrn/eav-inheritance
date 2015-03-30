<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Component inherits from the Base
 *
 * @Entity
 *
 */
class Component extends Base
{

    /**
     * @OneToMany(targetEntity="AppBundle\Entity\RevisionState", mappedBy="component", cascade={"persist", "remove"})
     **/
    private $revisionStates;

    /**
     * Constructor
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->revisionStates = new ArrayCollection();
    }

    /**
     * Add revisionStates
     *
     * @param \AppBundle\Entity\RevisionState $revisionStates
     * @return Component
     */
    public function addRevisionState(\AppBundle\Entity\RevisionState $revisionStates)
    {
        $this->revisionStates[] = $revisionStates;

        return $this;
    }

    /**
     * Remove revisionStates
     *
     * @param \AppBundle\Entity\RevisionState $revisionStates
     */
    public function removeRevisionState(\AppBundle\Entity\RevisionState $revisionStates)
    {
        $this->revisionStates->removeElement($revisionStates);
    }

    /**
     * Get revisionStates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRevisionStates()
    {
        return $this->revisionStates;
    }
}
