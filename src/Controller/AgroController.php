<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AgroController extends AbstractController
{
    /**
     * @Route("/agro/kontakt", name="agro_kontakt")
     */
    public function kontaktAgro(Request $request)
    {
        $message = new Message();

        $form = $this->createForm(MessageType::class, $message);

        // $submittedToken = $request->request->get('token');
        
        if($request->isMethod('post')){

            $form->handleRequest($request);
            
            if ($form->isValid()) {

                // if($this->isCsrfTokenValid('contact-form', $submittedToken)){

                    
                    $message = $form->getData();
                    
                    $message
                    ->setDataUtworzenia(new \DateTime())
                    ->setStatus(1);
                    
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($message);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Wiadomość zostałą wysłana.');
                    
                    return $this->redirectToRoute('message_new');
                // }

            }

            $this->addFlash('error', 'Nie udało się wysłać wiadomości.');
        }
            
        return $this->render('agro/kontakt.html.twig', [
            'form_message' => $form->createView(),
        ]);
    }

     /**
     * @Route("/agro/info", name="agro_system")
     */
    public function systemAgro()
    {
        return $this->render('agro/system.html.twig');
    }
}
