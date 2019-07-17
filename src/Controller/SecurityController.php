<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UpdateFormType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/Connexion", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
    }

    /**
     * @Route("/Mon-Compte-{id}", name="app_edit")
     * @param User $user
     * @param Request $request
     * @param ObjectManager $em
     * @return Response
     */

    public function UpdateUsers(User $user, Request $request, ObjectManager $em)
    {
        $this->em = $em;
        $repo = $this->getDoctrine()->getRepository(User::class);
        $edit = $repo->find($user);
        $form = $this->createForm(UpdateFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();

            $this->addFlash('success','Vos données ont bién été changer.');
        }

        return $this->render('security/login.html.twig', [
            'UpdateForm' => $form->createView(),
            'edit' => $edit
        ]);
    }
}
