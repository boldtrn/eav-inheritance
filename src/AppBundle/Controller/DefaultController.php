<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use AppBundle\Entity\RevisionInProject;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/app/view1/{id}", name="view1")
     */
    public function view1Action($id)
    {
        $em = $this->getDoctrine();

        $project = $em->getRepository("AppBundle:Project")->getProjectForExternal($id);

        return $this->render('default/ext.html.twig', array("ent" => $project));
    }

    /**
     * @Route("/app/view2/{id}", name="view2")
     */
    public function view2Action($id)
    {
        $em = $this->getDoctrine();

        $projectArray = $em->getRepository("AppBundle:Project")->getProjectForExternalAsArray($id);

        $projectArray = array_pop($projectArray);

        $attributes = array(
            "DESIGNATION",
            "PURCHASER",
            "MATERIAL_STATUS",
            "CARE_STATUS",
            "ORDER_DATE",
            "QUANTITY",
            "DELIVERY_DATE",
            "PRICE_PER_100",
            "MONETARY_UNIT",
            "START_OF_INQUIRY",
            "DELIVERY_TIME_FROM_OFFER",
            "SUPPLIER",
        );

        var_dump($projectArray["revisionsInProject"]);
        //$this->traverseProjectArray($project, $attributes);

        return array();

        /*


        $projectArray = array_pop($projectArray);

        $externalList = $this->projectToArray($projectArray, $attributes);

        return $this->render('default/index.html.twig', array("arr" => $externalList, "attributes" => $attributes));

        */
    }

    private function traverseProjectArray($projectArray = array(), $attributes = array())
    {

        $data = array();

        $revisionInProject = $projectArray["revisionsInProject"];

        foreach ($revisionInProject as $rip) {
            var_dump($rip);
            /*
            $row = array();
            foreach ($attributes as $attribute) {
                $val = $this->getValueForAttribute($rip, $attribute);
                $row[$attribute] = $val;
            }
            $data[] = $row;
            */
        }


        return $data;
    }

    private function getValueForAttribute(RevisionInProject $rip, $attribute)
    {
        foreach ($rip->getProject()->getValues() as $val) {
            if ($val->getAttribute()->getName() == $attribute) {
                return $val;
            }
        }
        foreach ($rip->getValues() as $val) {
            if ($val->getAttribute()->getName() == $attribute) {
                return $val;
            }
        }
        foreach ($rip->getRevisionState()->getValues() as $val) {
            if ($val->getAttribute()->getName() == $attribute) {
                return $val;
            }
        }
        foreach ($rip->getRevisionState()->getComponent()->getValues() as $val) {
            if ($val->getAttribute()->getName() == $attribute) {
                return $val;
            }
        }

        return null;
    }
}
