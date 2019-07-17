<?php

namespace App\Controller;

use App\Entity\SallePublique;
use App\Repository\SallePubliqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{

    /**
     * @var SallePubliqueRepository
     */
    private $public;

    public function __construct(SallePubliqueRepository $public)
    {
        $this->public = $public;
    }

    /**
     * @Route("/Espace-Public", name="public")
     * @return Response
     */
    public function index(): Response
    {
        /*
        $SallePublique = new SallePublique();
        $SallePublique->setTitre('test');
        $SallePublique->setContenu('test');
        $SallePublique->setPlace('20');
        $SallePublique->setPrix('10');

        $em = $this->getDoctrine()->getManager();
        $em->persist($SallePublique);
        $em->flush();
        */

        $SallePublique = $this->public->findAll();
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
            'SallePublique'   => $SallePublique,
        ]);
    }
}
