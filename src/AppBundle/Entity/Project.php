<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Project inherits from the Base
 *
 * @Entity(repositoryClass="AppBundle\Entity\ProjectRepository")
 *
 */
class Project extends Base
{

    /**
     * @OneToMany(targetEntity="AppBundle\Entity\RevisionInProject", mappedBy="project", cascade={"persist", "remove"})
     **/
    private $revisionsInProject;

    /**
     * Constructor
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->revisionsInProject = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add revisionsInProject
     *
     * @param \AppBundle\Entity\RevisionInProject $revisionsInProject
     * @return Project
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
