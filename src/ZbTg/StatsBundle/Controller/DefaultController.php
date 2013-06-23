<?php

namespace ZbTg\StatsBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return new JsonResponse(array('name' => $name));
      
        return $this->render('ZbTgStatsBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     *
     */
    protected function makeRequest()
    {

    }

    /**
     * 
     */
    public function statsAction($user)
    {
      
    }
}
