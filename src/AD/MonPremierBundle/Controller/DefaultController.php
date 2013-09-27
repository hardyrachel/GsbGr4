<?php

namespace AD\MonPremierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message ='Voici mon premier message sous Symfony2';
        
        return $this->container->get('templating')->renderResponse('ADMonPremierBundle:Default:index.html.twig', array('message' => $message));
    }
}
