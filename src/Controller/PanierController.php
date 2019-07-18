<?php

namespace App\Controller;

use App\Entity\Nourriture;
use App\Entity\Panier;
use App\Repository\PanierRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @var ObjectManager
     */
    private $em;
    /**
     * @var PanierRepository
     */
    private $repository;

    public function __construct(PanierRepository $repository, ObjectManager $em)
    {

        $this->em = $em;
        $this->repository = $repository;
    }

    /**
     * @Route("/panier/{id}", name="panier")
     */
    public function index()
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    /**
     * @Route("/panier/{id}", name="panier.delete")
     * @param Panier $id
     */

    public function deletePanier(Nourriture $nourriture, Panier $id)
    {
        $repo = $this->getDoctrine()->getRepository(Panier::class);
        $commander = $repo->find($id);

        $nourriture->remove($commander);
        $this->em->persist($commander);
        $this->em->flush();

    }

}
