<?php

namespace Zeta\ProjectBundle\Controller;

use Zeta\ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
	    $repository = $this->getDoctrine()
		    ->getRepository('ZetaProjectBundle:Project')->findAll();

      return $this->render('ZetaProjectBundle:Default:index.html.twig', array('repository' => $repository));
    }
}
