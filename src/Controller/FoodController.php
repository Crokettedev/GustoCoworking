<?php

namespace App\Controller;

use App\Entity\Nourriture;
use App\Repository\NourritureRepository;
use App\Repository\PanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoodController extends AbstractController
{
    /**
     * @var NourritureRepository
     */

    private $food;
    private $panier;

    public function __construct(NourritureRepository $food, PanierRepository $panier)
    {
        $this->food = $food;
        $this->panier = $panier;
    }

    /**
     * @Route("/Restaurant", name="food")
     * @return Response
     */
    public function index(): Response
    {
        /*
        $Food = new Nourriture();
        $Food->setNom('Cocktail Mojito sans alcool');
        $Food->setContenu('');
        $Food->setPrix('2');
        $Food->setStock('45');
        $Food->setLabel('Boissons');

        $em = $this->getDoctrine()->getManager();
        $em->persist($Food);
        $em->flush();
        */

        $FoodMenu = $this->food->findByLabelMenu();
        $FoodBoissons = $this->food->findByLabelBoissons();
        return $this->render('food/index.html.twig', [
            'controller_name' => 'FoodController',
            'FoodMenu'   => $FoodMenu,
            'FoodBoissons' => $FoodBoissons
        ]);
    }
}
