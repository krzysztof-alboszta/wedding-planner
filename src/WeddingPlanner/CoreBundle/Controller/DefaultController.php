<?php

namespace WeddingPlanner\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="wp_core_index")
     * @Template("WeddingPlannerCoreBundle:Default:index.html.twig")
     * 
     * @return array
     */
    public function indexAction()
    {
        return [];
    }
}