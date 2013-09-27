<?php

namespace AD\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADGsbBundle:Default:index.html.twig');
    }
}
