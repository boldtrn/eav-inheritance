<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Component inherits from the Base
 *
 * @Entity
 *
 */
class RevisionState extends Base
{

    /**
     * @var string
     *
     * @ORM\Column(name="revisionIndex", type="string", length=255)
     */
    private $revisionIndex;

    /**
     * @ManyToOne(targetEntity="AppBundle\Entity\Component", inversedBy="revisionStates")
     * @JoinColumn(name="component_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $component;

    /**
     * @OneToMany(targetEntity="AppBundle\Entity\RevisionInProject", mappedBy="revisionState", cascade={"persist"})
     **/
    private $revisionsInProject;

    /**
     * Constructor
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->revisionsInProject = new ArrayCollection();
    }

    /**
     * Set revisionIndex
     *
     * @param string revisionIndex
     * @return RevisionState
     */
    public function setRevisionIndex($revisionIndex)
    {
        $this->revisionIndex = $revisionIndex;

        return $this;
    }

    /**
     * Get revisionIndex
     *
     * @return string
     */
    public function getRevisionIndex()
    {
        return $this->revisionIndex;
    }

    /**
     * Set component
     *
     * @param \AppBundle\Entity\Component $component
     * @return RevisionState
     */
    public function setComponent(\AppBundle\Entity\Component $component = null)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return \AppBundle\Entity\Component 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Add revisionsInProject
     *
     * @param \AppBundle\Entity\RevisionInProject $revisionsInProject
     * @return RevisionState
     */
    public function addRevisionsInProject(\AppBundle\Entity\RevisionInProject $revisionsInProject)
    {
        $this->revisionsInProject[] = $revisionsInProject;

        return $this;
    }

    /**
     * Remove revisionsInProject
     *
     * @param \AppBundle\Entity\RevisionInProject $revisionsInProject
     */
    public function removeRevisionsInProject(\AppBundle\Entity\RevisionInProject $revisionsInProject)
    {
        $this->revisionsInProject->removeElement($revisionsInProject);
    }

    /**
     * Get revisionsInProject
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRevisionsInProject()
    {
        return $this->revisionsInProject;
    }

}
