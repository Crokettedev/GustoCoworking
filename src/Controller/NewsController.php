<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @var NewsRepository
     */

    private $news;

    public function __construct(NewsRepository $news)
    {
        $this->news = $news;
    }

    /**
     * @Route("/news", name="news")
     * @return Response
     */
    public function index(): Response
    {
        /*
        $News = new News();
        $News->setTitre('Hello, bienvenu chez nous');
        $News->setContenu('Venez retrouver notre merveilleux café dans vos espaces, cappuccino ?');

        $em = $this->getDoctrine()->getManager();
        $em->persist($News);
        $em->flush();
        */
        $News = $this->news->findAll();
        return $this->render('news/index.html.twig', [
            'controller_name' => 'NewsController',
            'LesNews'   => $News,
        ]);
    }

}
