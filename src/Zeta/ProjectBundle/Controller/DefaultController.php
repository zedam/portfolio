<?php

namespace Zeta\ProjectBundle\Controller;

use Zeta\ProjectBundle\Entity\Project;
use Zeta\ProjectBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\BrowserKit\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
	    $repository = $this->getDoctrine()
		    ->getRepository('ZetaProjectBundle:Project')->findAll();

      return $this->render('ZetaProjectBundle:Default:index.html.twig', array('repository' => $repository));
    }

    public function productAction($name)
    {
        $category = new Category();
        $category->setName($name);

        $project = new Project();
        $project->setTitle('Foo');
        $project->setDescription('Lorem ipsum dolor');
        // relate this product to the category
        $project->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($project);
        $em->flush();

        return new Response(
            'Created product id: '.$project->getId()
            .' and category id: '.$category->getId()
        );
    }
}
