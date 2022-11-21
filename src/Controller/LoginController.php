<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * Connxion utilisateur
     *
     * @param AuthenticationUtils $utils
     * @return Response
     */
    #[Route('/login', name: 'account_login')]
    public function index(AuthenticationUtils $utils): Response
    {
          // Repere si il y a une erreur
+         $error = $utils->getLastAuthenticationError();
          $username = $utils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }
    /**
     * Deconnexion
     *
     * @return void
     */
    #[Route("/logout", name:"account_logout")]
    public function logout(): void
    {
        // ..
    }

}
