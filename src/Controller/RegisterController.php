<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $encodePassword)
    {
        
        $user = new User();
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $dataTermin = new \DateTime("+30 days"); //do sprawdzenia
            $user
                ->setPassword($encodePassword->encodePassword($user, $user->getPassword()))
                ->setDataUtworzenia(new \DateTime())
                ->setDataAktualizacji(new \DateTime())
                ->setDataTermin($dataTermin)
                ->setStatus(User::STATUS_ACTIVE)
                ->setRoles(['ROLE_USER']);
            ;
  
                        
            $entityManager =$this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Użytkownik zarejestrowany w serwisie. Można się zalogować. Aplikacja będzie dostępna w formie bezpłatnej przez najbliższe 30 dni. Po upływie wskazanego okresu wymagane będzie opłacenia abonamentu.');
        
            return $this->redirectToRoute('login');

        }

        return $this->render('register/register.html.twig', [
            'form_register' => $form->createView(),
        ]);
    }
}
