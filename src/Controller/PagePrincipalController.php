<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagePrincipalController extends AbstractController
{
    /**
     * @Route("/Coworking-Gusto", name="page_principal")
     */
    public function index()
    {
        return $this->render('page_principal/index.html.twig', [
            'controller_name' => 'PagePrincipalController',
        ]);
    }
}
