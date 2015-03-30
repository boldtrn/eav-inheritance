<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Attribute;
use AppBundle\Entity\Component;
use AppBundle\Entity\Project;
use AppBundle\Entity\RevisionInProject;
use AppBundle\Entity\RevisionState;
use AppBundle\Entity\Value;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {

        $this->loadAtttributes($manager);

        $this->loadComponents($manager);

        $this->loadRevisionStates($manager);

        $this->loadProjects($manager);

        $this->loadRevisionInProject($manager);

        $manager->flush();

    }

    private function loadRevisionInProject(ObjectManager $manager){

        //////////////////////////////////////////////////////////////////////
        // Revisions for WS Typ3
        //////////////////////////////////////////////////////////////////////
        $pro = "WS Typ3";
        $project = $this->getReference($pro);

        /////////////////////////////////////////
        // Revions for Comp1
        /////////////////////////////////////////
        $comp = "Comp1";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev002 PROTOTYPE
        $index = "002";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev005 PRE_PILOT_RUN
        $index = "005";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);


        /////////////////////////////////////////
        // Revions for Comp007
        /////////////////////////////////////////
        $comp = "Comp007";

        // rev007 PROTOTYPE
        $index = "007";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev007 PRE_PILOT_RUN
        $index = "007";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp02
        /////////////////////////////////////////
        $comp = "Comp02";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev001 PRE_PILOT_RUN
        $index = "001";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev002 PILOT_RUN
        $index = "002";
        $type = "PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev004 PILOT_RUN
        $index = "004";
        $type = "PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);
        //////////////////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////////////////
        // Revisions for BS 300
        //////////////////////////////////////////////////////////////////////
        $pro = "BS 300";
        $project = $this->getReference($pro);

        /////////////////////////////////////////
        // Revions for Comp1
        /////////////////////////////////////////
        $comp = "Comp1";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev002 PRE_PILOT_RUN
        $index = "002";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp007
        /////////////////////////////////////////
        $comp = "Comp007";

        // rev007 PRE_PILOT_RUN
        $index = "007";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev009 PILOT_RUN
        $index = "009";
        $type = "PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp02
        /////////////////////////////////////////
        $comp = "Comp02";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev005 PRE_PILOT_RUN
        $index = "005";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev009 PILOT_RUN
        $index = "009";
        $type = "PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // rev006 PILOT_RUN
        $index = "006";
        $type = "PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp13456
        /////////////////////////////////////////
        $comp = "Comp13456";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        // ////////////////////////////////////////////////////////////////////

        //////////////////////////////////////////////////////////////////////
        // Revisions for AH 27
        //////////////////////////////////////////////////////////////////////
        $pro = "AH 27";
        $project = $this->getReference($pro);

        /////////////////////////////////////////
        // Revions for Comp1
        /////////////////////////////////////////
        $comp = "Comp1";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp007
        /////////////////////////////////////////
        $comp = "Comp007";

        // rev007 PRE_PILOT_RUN
        $index = "007";
        $type = "PRE_PILOT_RUN";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp02
        /////////////////////////////////////////
        $comp = "Comp02";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        /////////////////////////////////////////
        // Revions for Comp13456
        /////////////////////////////////////////
        $comp = "Comp13456";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        ////////////////////////////////////////////////////////////////////////////////////////

        //////////////////////////////////////////////////////////////////////
        // Revisions for Project Uninitialized Values
        //////////////////////////////////////////////////////////////////////
        $pro = "Project Uninitialized Values";
        $project = $this->getReference($pro);

        /////////////////////////////////////////
        // Revions for Component Uninitialized Values
        /////////////////////////////////////////
        $comp = "Component Uninitialized Values";

        // rev001 PROTOTYPE
        $index = "001";
        $type = "PROTOTYPE";
        $revision = $this->getReference($comp . "-" . $index);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revision);
        $this->addReference($pro . "-" . $comp . "-" . $index . "-" . $type, $revisionInProject);

        $project->addRevisionsInProject($revisionInProject);
        $revision->addRevisionsInProject($revisionInProject);
        $manager->persist($project);
        $manager->persist($revision);

        $manager->persist($revisionInProject);

        ////////////////////////////////////////////////////////////////////////////////////////

        $values = array(
            "revision" => "WS Typ3-Comp1-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-13",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-04-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "WS Typ3-Comp1-002-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "200",
                "DELIVERY_DATE" => "2013-08-25",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp1-005-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "",
                "QUANTITY" => "",
                "DELIVERY_DATE" => "",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp007-007-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-15",
                "QUANTITY" => "5",
                "DELIVERY_DATE" => "2013-06-30",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp007-007-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "",
                "QUANTITY" => "",
                "DELIVERY_DATE" => "",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp02-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "10",
                "DELIVERY_DATE" => "2013-04-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp02-001-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-06-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp02-002-PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-07-10",
                "QUANTITY" => "70",
                "DELIVERY_DATE" => "2013-07-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "WS Typ3-Comp02-004-PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-09-10",
                "QUANTITY" => "223",
                "DELIVERY_DATE" => "2013-09-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp1-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-04-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "BS 300-Comp1-002-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "200",
                "DELIVERY_DATE" => "2013-08-25",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp007-007-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "200",
                "DELIVERY_DATE" => "2013-08-25",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp007-009-PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "",
                "QUANTITY" => "",
                "DELIVERY_DATE" => "",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp02-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "10",
                "DELIVERY_DATE" => "2013-04-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp02-005-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-06-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp02-009-PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-07-10",
                "QUANTITY" => "70",
                "DELIVERY_DATE" => "2013-07-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp02-006-PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "",
                "QUANTITY" => "",
                "DELIVERY_DATE" => "",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "BS 300-Comp13456-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-04-27",
            )
        );
        $this->createRevisionStateValue($values, $manager);


        /////////////////////////////////// AH 27 ///////////////////////////////////////
        $values = array(
            "revision" => "AH 27-Comp1-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-04-27",
                "PANEL" => "Montageplatz 1:10.1.1.27:1",
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "AH 27-Comp007-007-PRE_PILOT_RUN",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-06-10",
                "QUANTITY" => "200",
                "DELIVERY_DATE" => "2013-08-25",
                "PANEL" => "Montageplatz 1:10.1.1.27:1",
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "AH 27-Comp02-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "10",
                "DELIVERY_DATE" => "2013-04-27",
                "PANEL" => "Montageplatz 1:10.1.1.27:1",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "AH 27-Comp13456-001-PROTOTYPE",
            "attributesValues" => array(
                "ORDER_DATE" => "2013-03-10",
                "QUANTITY" => "20",
                "DELIVERY_DATE" => "2013-04-27",
                "PANEL" => "Montageplatz 1:10.1.1.27:1",
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Project Uninitialized Values-Component Uninitialized Values-001-PROTOTYPE",
            "attributesValues" => array(
            )
        );
        $this->createRevisionStateValue($values, $manager);

    }

    private function createRevisionInProjectValue(Array $values, ObjectManager $manager)
    {

        $revision = $values['revision'];
        if (!($revision instanceof RevisionInProject)) {
            $revision = $this->getReference($revision);
        }

        foreach ($values['attributesValues'] as $attribute => $val) {

            $value = new Value();
            $value->setAttribute($this->getReference($attribute));
            $value->setValue($val);

            $revision->addValue($value);
        }

        $manager->persist($revision);

    }

    private function createRevisionStateValue(Array $values, ObjectManager $manager)
    {

        $revision = $values['revision'];
        if (!($revision instanceof RevisionState)) {
            $revision = $this->getReference($revision);
        }
        foreach ($values['attributesValues'] as $attribute => $val) {

            $value = new Value();
            $value->setAttribute($this->getReference($attribute));
            $value->setValue($val);
            $revision->addValue($value);

        }

        $manager->persist($revision);

    }

    private function loadRevisionStates(ObjectManager $manager)
    {
        //////////////////////////////////////////////////////////////////////
        // Revisions for Comp1
        //////////////////////////////////////////////////////////////////////
        $comp = "Comp1";
        $component = $this->getReference($comp);

        // rev001
        $index = "001";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev002
        $index = "002";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev005
        $index = "005";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);
        //////////////////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////////////////
        // Revisions for Comp007
        //////////////////////////////////////////////////////////////////////
        $comp = "Comp007";
        $component = $this->getReference($comp);

        // rev007
        $index = "007";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev009
        $index = "009";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);
        //////////////////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////////////////
        // Revisions for Comp02
        //////////////////////////////////////////////////////////////////////
        $comp = "Comp02";
        $component = $this->getReference($comp);

        // rev001
        $index = "001";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev002
        $index = "002";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev004
        $index = "004";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev005
        $index = "005";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev006
        $index = "006";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);

        // rev009
        $index = "009";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);
        //////////////////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////////////////
        // Revisions for Comp13456
        //////////////////////////////////////////////////////////////////////
        $comp = "Comp13456";
        $component = $this->getReference($comp);

        // rev001
        $index = "001";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);

        $manager->persist($revisionState);
        //////////////////////////////////////////////////////////////////////

        //////////////////////////////////////////////////////////////////////
        // Revisions for Component Uninitialized Values
        //////////////////////////////////////////////////////////////////////
        $comp = "Component Uninitialized Values";
        $component = $this->getReference($comp);

        // rev001
        $index = "001";

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);
        $revisionState->setRevisionIndex($index);
        $this->addReference($comp . "-" . $index, $revisionState);

        $component->addRevisionState($revisionState);
        $manager->persist($component);
        $manager->persist($revisionState);
        //////////////////////////////////////////////////////////////////////


        $values = array(
            "revision" => "Comp1-001",
            "attributesValues" => array(
                "PRICE_PER_100" => "12.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-02-12",
                "DELIVERY_TIME_FROM_OFFER" => "8 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier12"
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "Comp1-002",
            "attributesValues" => array(
                "PRICE_PER_100" => "11.50",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-05-22",
                "DELIVERY_TIME_FROM_OFFER" => "8 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier12"
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "Comp1-005",
            "attributesValues" => array(
                "PRICE_PER_100" => "13.00",
                "MONETARY_UNIT" => "USD",
                "START_OF_INQUIRY" => "2013-09-01",
                "DELIVERY_TIME_FROM_OFFER" => "12 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier9673"
            )
        );
        $this->createRevisionStateValue($values, $manager);


        $values = array(
            "revision" => "Comp007-007",
            "attributesValues" => array(
                "PRICE_PER_100" => "15.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-09-03",
                "DELIVERY_TIME_FROM_OFFER" => "10 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier084"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp007-009",
            "attributesValues" => array(
                "PRICE_PER_100" => "",
                "MONETARY_UNIT" => "",
                "START_OF_INQUIRY" => "2013-10-03",
                "DELIVERY_TIME_FROM_OFFER" => "", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => ""
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-001",
            "attributesValues" => array(
                "PRICE_PER_100" => "12.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-02-12",
                "DELIVERY_TIME_FROM_OFFER" => "3 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier084"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-002",
            "attributesValues" => array(
                "PRICE_PER_100" => "12.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-03-12",
                "DELIVERY_TIME_FROM_OFFER" => "3 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier9673"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-004",
            "attributesValues" => array(
                "PRICE_PER_100" => "11.50",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-04-12",
                "DELIVERY_TIME_FROM_OFFER" => "3 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier084"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-005",
            "attributesValues" => array(
                "PRICE_PER_100" => "10.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-05-10",
                "DELIVERY_TIME_FROM_OFFER" => "8 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Wing Shing"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-006",
            "attributesValues" => array(
                "PRICE_PER_100" => "",
                "MONETARY_UNIT" => "",
                "START_OF_INQUIRY" => "",
                "DELIVERY_TIME_FROM_OFFER" => "",
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => ""
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp02-009",
            "attributesValues" => array(
                "PRICE_PER_100" => "12.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-05-20",
                "DELIVERY_TIME_FROM_OFFER" => "3 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier9673"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Comp13456-001",
            "attributesValues" => array(
                "PRICE_PER_100" => "12.00",
                "MONETARY_UNIT" => "EUR",
                "START_OF_INQUIRY" => "2013-02-12",
                "DELIVERY_TIME_FROM_OFFER" => "8 Weeks", // TODO: Should be Integer like 8 + Translated(WEEK) or Date type!!
                "UPDATED_AT" => "2014-08-13 16:05:00",
                "UPDATED_BY" => "projektleiter1",
                "SUPPLIER" => "Supplier084"
            )
        );
        $this->createRevisionStateValue($values, $manager);

        $values = array(
            "revision" => "Component Uninitialized Values-001",
            "attributesValues" => array(
            )
        );
        $this->createRevisionStateValue($values, $manager);

    }

    private function loadComponents(ObjectManager $manager)
    {

        $component = new Component("7852625489");
        $this->addReference("Comp1", $component);
        $manager->persist($component);


        $component = new Component("7852623124");
        $this->addReference("Comp007", $component);
        $manager->persist($component);


        $component = new Component("7852654235");
        $this->addReference("Comp02", $component);
        $manager->persist($component);


        $component = new Component("1234234566");
        $this->addReference("Comp13456", $component);
        $manager->persist($component);


        $component = new Component("1234234544");
        $this->addReference("Component Uninitialized Values", $component);
        $manager->persist($component);

        $values = array(
            "component" => "Comp1",
            "attributesValues" => array(
                "DESIGNATION" => "Component 1",
                "PURCHASER" => "Purchaser 1",
                "MATERIAL_STATUS" => "01",
                "CARE_STATUS" => "02",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user1",
            )
        );
        $this->createComponentValue($values, $manager);

        $values = array(
            "component" => "Comp007",
            "attributesValues" => array(
                "DESIGNATION" => "Component 007",
                "PURCHASER" => "Purchaser 7",
                "MATERIAL_STATUS" => "11",
                "CARE_STATUS" => "55",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user1",
            )
        );
        $this->createComponentValue($values, $manager);

        $values = array(
            "component" => "Comp02",
            "attributesValues" => array(
                "DESIGNATION" => "Component 02",
                "PURCHASER" => "Purchaser 17",
                "MATERIAL_STATUS" => "41",
                "CARE_STATUS" => "56",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user3",
            )
        );
        $this->createComponentValue($values, $manager);

        $values = array(
            "component" => "Comp13456",
            "attributesValues" => array(
                "DESIGNATION" => "Comp13456",
                "PURCHASER" => "Purchaser 147",
                "MATERIAL_STATUS" => "451",
                "CARE_STATUS" => "536",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "use2r3",
            )
        );
        $this->createComponentValue($values, $manager);
    }

    private function createComponentValue(Array $values, ObjectManager $manager)
    {

        $component = $this->getReference($values['component']);
        foreach ($values['attributesValues'] as $attribute => $val) {

            $value = new Value();
            $value->setAttribute($this->getReference($attribute));
            $value->setValue($val);
            $component->addValue($value);
        }

        $manager->persist($component);

    }

    private function loadProjects(ObjectManager $manager)
    {
        /*
         * Fix value
         */
        $project = new Project("30024");
        $this->addReference('WS Typ3', $project);
        $manager->persist($project);

        $project = new Project("30030");
        $this->addReference('BS 300', $project);
        $manager->persist($project);

        $project = new Project("30040");
        $this->addReference('AH 27', $project);
        $manager->persist($project);

        $project = new Project("30050");
        $this->addReference('Project Uninitialized Values', $project);
        $manager->persist($project);

        // Project WS Typ3
        $values = array(
            "project" => "WS Typ3",
            "attributesValues" => array(
                "SUBJECT" => "WS Typ3",
                "ORDER_TYPE" => "E-Projekt (EANr)",
                "PROJECT_LEADER" => "leader1",
                "TARGET_DATE" => "2013-08-08",
                "PLANNED_DATE" => "2013-10-08",
                "COMPLETION_DATE" => "2014-04-08",
                "PRIORITY" => "1",
                "ACTIVE" => "1",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user1",
            )
        );
        $this->createProjectValue($values, $manager);

        // Project BS 300
        $values = array(
            "project" => "BS 300",
            "attributesValues" => array(
                "SUBJECT" => "BS 300",
                "ORDER_TYPE" => "E-Projekt (EANr)",
                "PROJECT_LEADER" => "leader1",
                "TARGET_DATE" => "2013-08-08",
                "PLANNED_DATE" => "2013-12-08",
                "COMPLETION_DATE" => "2014-08-08", #
                "PRIORITY" => "0",
                "ACTIVE" => "1",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user1",
            )
        );
        $this->createProjectValue($values, $manager);

        // Project AH 27
        $values = array(
            "project" => "AH 27",
            "attributesValues" => array(
                "SUBJECT" => "AH 27",
                "ORDER_TYPE" => "Pick By Light",
                "PROJECT_LEADER" => "leader1",
                "TARGET_DATE" => "2013-08-08",
                "PLANNED_DATE" => "2013-12-08",
                "COMPLETION_DATE" => "2014-08-08",
                "PRIORITY" => "0",
                "ACTIVE" => "1",
                "UPDATED_AT" => "2014-08-13 15:15:35",
                "UPDATED_BY" => "user1",
            )
        );
        $this->createProjectValue($values, $manager);

        // Project Uninitialized
        $values = array(
            "project" => "Project Uninitialized Values",
            "attributesValues" => array()
        );
        $this->createProjectValue($values, $manager);


    }

    private function createProjectValue(Array $values, ObjectManager $manager)
    {

        $project = $this->getReference($values['project']);
        foreach ($values['attributesValues'] as $attribute => $val) {

            $value = new Value();
            $value->setAttribute($this->getReference($attribute));
            $value->setValue($val);
            $project->addValue($value);
        }

        $manager->persist($project);

    }

    private function loadAtttributes(ObjectManager $manager)
    {
        /*
        * Project Attributes
        */

        $this->createAttribute($manager, array(
            'name' => "SUBJECT",
            'dataType' => "text",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute($manager, array(
            'name' => "ORDER_TYPE",
            'dataType' => "choice",
            'constraints' => array('equals' => array(
                "E-Projekt (EANr)",
                "Allg. Projekt (allg. EANr)",
                "Änderung (ÄndNr)",
                "Variantenanlage (VNr – neu)",
                "Sonderprojekt (Bechtel…)",
                "Industriekunden-Projekt",
                "Zubehör",
                "Pick By Light",
            )),
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "PROJECT_LEADER",
            'dataType' => "user",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute($manager, array(
            'name' => "PANEL",
            'dataType' => "panel",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute(
            $manager, array(
            'name' => "TARGET_DATE",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute($manager, array(
            'name' => "PLANNED_DATE",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "COMPLETION_DATE",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute($manager, array(
            'name' => "PRIORITY",
            'dataType' => "boolean",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "ACTIVE",
            'dataType' => "boolean",
            'editable' => array("entwicklung_user"),
        ));


        /*
         * Component Attributes
         */

        $this->createAttribute($manager, array(
            'name' => "DESIGNATION",
            'dataType' => "text",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "PURCHASER",
            'dataType' => "user",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute($manager, array(
            'name' => "MATERIAL_STATUS",
            'dataType' => "choice",
            'constraints' => array('equals' => array(
                "10",
                "11",
                "50",
                "51",
                "53",
                "55",
                "57",
                "60",
                "62",
            )),
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "CARE_STATUS",
            'dataType' => "choice",
            'constraints' => array(
                'equals' => array(
                    "20",
                    "30",
                    "40",
                    "60",
                    "50",
                )
            ),
            'editable' => array("entwicklung_user"),
        ));


        /*
         * ComponentInProjects Attributes
        */
        $this->createAttribute($manager, array(
            'name' => "QUANTITY_PER_TOOL",
            'dataType' => "natural",
            'unit' => "UNIT_PIECES",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute($manager, array(
            'name' => "QUANTITY_PER_YEAR",
            'dataType' => "natural",
            'unit' => "UNIT_PIECES",
            'editable' => array("entwicklung_user"),
        ));


        /*
         *
         * Revision attributes
         *
         */

        $this->createAttribute($manager, array(
            'name' => "ORDER_DATE",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute(
            $manager,
            array(
                'name' => "QUANTITY",
                'dataType' => "natural",
                'unit' => "UNIT_PIECES",
                'editable' => array("entwicklung_user"),
            )
        );


        $this->createAttribute(
            $manager, array(
            'name' => "DELIVERY_DATE",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute($manager, array(
            'name' => "PRICE_PER_100",
            'dataType' => "money",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute(
            $manager, array(
            'name' => "MONETARY_UNIT",
            'dataType' => "choice",
            'constraints' => array(
                'equals' => array(
                    "EUR",
                    "USD",
                    "RMB",
                )
            ),
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute($manager, array(
            'name' => "START_OF_INQUIRY",
            'dataType' => "date",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute(
            $manager, array(
            'name' => "DELIVERY_TIME_FROM_OFFER",
            'dataType' => "text",
            'editable' => array("entwicklung_user"),
        ));


        $this->createAttribute($manager, array(
            'name' => "SUPPLIER",
            'dataType' => "text",
            'editable' => array("entwicklung_user"),
        ));

        $this->createAttribute(
            $manager, array(
            'name' => "UPDATED_AT",
            'dataType' => "datetime",
            'editable' => array(),
        ));

        $this->createAttribute($manager, array(
            'name' => "UPDATED_BY",
            'dataType' => "user",
            'editable' => array(),
        ));
    }

    private function createAttribute(ObjectManager $manager, $data = array())
    {

        $attribute = new Attribute($data['name']);
        $attribute->setDataType($data['dataType']);

        $this->addReference($attribute->getName(), $attribute);
        $manager->persist($attribute);
        $manager->flush();
    }

}