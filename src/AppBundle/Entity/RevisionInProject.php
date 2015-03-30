<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Component inherits from the Base
 *
 * @Entity
 *
 */
class RevisionInProject extends Base
{

    /**
     * @ManyToOne(targetEntity="Project", inversedBy="revisionsInProject")
     * @JoinColumn(name="project_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $project;

    /**
     * @ManyToOne(targetEntity="RevisionState", inversedBy="revisionsInProject")
     * @JoinColumn(name="revision_state_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $revisionState;

    /**
     * Constructor
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\Project $project
     * @return RevisionInProject
     */
    public function setProject(\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set RevisionState
     *
     * @param RevisionState $revisionState
     * @return RevisionInProject
     */
    public function setRevisionState(RevisionState $revisionState = null)
    {
        $this->revisionState = $revisionState;

        return $this;
    }

    /**
     * Get RevisionState
     *
     * @return \AppBundle\Entity\RevisionState
     */
    public function getRevisionState()
    {
        return $this->revisionState;
    }
}
