<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     **/ 
    public function indexAction(Request $request)
    {
        $name = 'Naiara';
        
        return $this->render('default/index.html.twig', ['name' => $name]);
    }
}
