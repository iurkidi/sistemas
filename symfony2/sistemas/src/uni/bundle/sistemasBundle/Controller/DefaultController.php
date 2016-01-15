<?php

namespace uni\bundle\sistemasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniSistemasBundle:Default:index.html.twig');
    }
    
    public function indexCrearAction()
    {
        return $this->render('uniSistemasBundle:Default:indexCrear.html.twig');
    }
}
