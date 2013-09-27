<?php

namespace AD\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class siController extends Controller
{
    public function descriptionAction()
    {
        return $this->render('ADGsbBundle:default:description.html.twig');
    }
    public function gestionAction()
    {
         return $this->render('ADGsbBundle:default:gestion.html.twig');
                        
    }
     public function equipementAction()
    {
         return $this->render('ADGsbBundle:default:equipement.html.twig');
                        
    }
}
