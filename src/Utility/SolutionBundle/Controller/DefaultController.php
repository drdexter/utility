<?php

namespace Utility\SolutionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UtilitySolutionBundle:Default:index.html.twig', array('name' => $name));
    }
}
