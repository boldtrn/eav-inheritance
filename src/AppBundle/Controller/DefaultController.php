<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Component;
use AppBundle\Entity\Project;
use AppBundle\Entity\RevisionInProject;
use AppBundle\Entity\RevisionState;
use AppBundle\Entity\Value;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/create", name="create")
     */
    public function createAction()
    {
        $em = $this->getDoctrine()->getManager();

        $project = new Project();

        $value1 = new Value();
        $value1->setValue("Value1");
        $value1->setEntity($project);
        $em->persist($value1);

        $component = new Component();

        $value2 = new Value();
        $value2->setValue("Value2");
        $value2->setEntity($component);
        $em->persist($value2);

        $revisionState = new RevisionState();
        $revisionState->setComponent($component);

        $value3 = new Value();
        $value3->setValue("Value3");
        $value3->setEntity($revisionState);
        $em->persist($value3);

        $revisionInProject = new RevisionInProject();
        $revisionInProject->setProject($project);
        $revisionInProject->setRevisionState($revisionState);

        $value4 = new Value();
        $value4->setValue("Value4");
        $value4->setEntity($revisionInProject);
        $em->persist($value4);


        $em->persist($revisionInProject);
        $em->persist($revisionState);
        $em->persist($component);
        $em->persist($project);
        $em->flush();

        return new Response('Created project id '.$project->getId());
        //return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/app/view/{id}", name="view")
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine();

        $project = $em->getRepository("AppBundle:Project")->getProjectForExternal($id);

        return $this->render('default/index.html.twig', array("ent" => $project));
    }
}
