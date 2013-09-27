<?php

namespace AD\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class presentationController extends Controller
{
    public function entrepriseAction()
    {
        return $this->render('ADGsbBundle:default:entreprise.html.twig');
    }
    public function activiteAction()
    {
         return $this->render('ADGsbBundle:default:activite.html.twig');
                        
    }
}
