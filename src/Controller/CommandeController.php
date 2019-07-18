<?php

namespace App\Controller;

use App\Entity\Commandefood;
use App\Entity\Nourriture;
use App\Entity\Panier;
use App\Form\CommandType;
use App\Form\NourritureType;
use App\Form\PanierType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/Commander/{id}", name="commande.food")
     *
     */
    public function index(Nourriture $id, Request $request, ObjectManager $manager)
    {
        //dump($request->get('id'));
        //dd($this->getUser());
        $repo = $this->getDoctrine()->getRepository(Nourriture::class);
        $commander = $repo->find($id);


        //$command = new Commandefood();
        //dump($command->setIdFood($food));
        //$command->setIdFood($user);
        //$form = $this->createForm(CommandType::class, $command);
        //$form->handleRequest($request);

        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $panier->setIdFood($id);
            $panier->setIdUsers($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($panier);
            $entityManager->flush();

            $this->addFlash('success','Votre article à bien été ajouter au panier.');
        }

        return $this->render('commande/index.html.twig', [
            'commander' => $commander,
            //'commandForm' => $form->createView(),
            'panierForm' => $form->createView(),

        ]);
    }

}

