<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagePrincipalController extends AbstractController
{
    /**
     * @var NewsRepository
     * @var NewsController
     */

    private $news;

    public function __construct(NewsRepository $news)
    {
        $this->news = $news;
    }

    /**
     * @Route("/Coworking-Gusto", name="page_principal")
     */
    public function index()
    {
        $News = $this->news->findMax3();
        return $this->render('page_principal/index.html.twig', [
            'controller_name' => 'PagePrincipalController',
            'LesNews'   => $News,
        ]);
    }
}
