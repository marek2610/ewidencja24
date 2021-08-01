<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $utils)
    {

        #jeżeli user jest zalogowany zostanie przeniesiony na stronę główną
        if($this->getUser()) {
            // $this->redirectToRoute('dokumenty/index.html.twig');
            $this->redirectToRoute('dokumenty_index');
        }
        
        $error = $utils->getLastAuthenticationError();
    
        $lastUsername = $utils->getLastUsername();
        
        return $this->render('security/login.html.twig', [
            'error'     => $error,
            'lastUsername' => $lastUsername,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        
    }
}
