<?php

namespace App\Controller;


use App\Entity\SallePriver;
use App\Repository\SallePriverRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivateController extends AbstractController
{
    /**
     * @var SallePriverRepository
     */
    private $prive;

    public function __construct(SallePriverRepository $prive)
    {
        $this->prive = $prive;
    }

    /**
     * @Route("/Salons-Privées", name="private")
     * @return Response
     */
    public function index(): Response
    {
        /*
        $SallePriver = new SallePriver();
        $SallePriver->setTitre('Lune');
        $SallePriver->setContenu('Venez découvrir le mystère de la Lune');
        $SallePriver->setPlaces('4');
        $SallePriver->setPrixMatin('80');
        $SallePriver->setPrixAprem('110');
        $SallePriver->setPrixJourne('150');

        $em = $this->getDoctrine()->getManager();
        $em->persist($SallePriver);
        $em->flush();
        */
        $SallePrive6 = $this->prive->findBySalle6();
        $SallePrive4 = $this->prive->findBySalle4();
        return $this->render('private/index.html.twig', [
            'controller_name' => 'PrivateController',
            'SallePrive6'   => $SallePrive6,
            'SallePrive4'   => $SallePrive4,
        ]);
    }

    /**
     * @Route("/Reservation-{id}", name="reservation.priv")
     */

    public function reservation($id)
    {
        $repo = $this->getDoctrine()->getRepository(SallePriver::class);
        $sallepriver = $repo->find($id);
        return $this->render('reservation/index.html.twig', [
            'sallepriver' => $sallepriver
        ]);
    }
}
