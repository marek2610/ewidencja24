<?php

namespace App\Controller;

use App\Entity\Dokument;
use App\Entity\Message;
use App\Entity\User;
use App\Form\UserAdminEditType;
use App\Form\UserType;
use App\Repository\DokumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAdmin(Request $request)
    {

        $this->denyAccessUnlessGranted("ROLE_ADMIN");

        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findBy(
            [],
            [
                'dataTermin'    => 'DESC',
            ],
            5,
            null
        );

        $dokumenty = $entityManager->getRepository(Dokument::class)->findBy(
            [],
            [],
            5,
            null
        );

        $wiadomosci = $entityManager->getRepository(Message::class)->findBy(
            [],
            [
                'dataUtworzenia'    =>  'ASC',
            ],
            5,
            null
        );

        #dump($dokumenty);

        return $this->render('admin/base2.html.twig', [
            'users'         => $users,
            'dokumenty'     => $dokumenty,
            'wiadomosci'    => $wiadomosci,
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function users(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('admin/panel/users/users.html.twig', [
            'users'         => $users,
        ]);
    }

    /**
     * @Route("/admin/users/dodaj", name="admin_users_dodaj")
     */
    public function dodajUsersAdmin(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $user = new User();
        
        $form = $this->createForm(UserType::class, $user);
        
        if ($request->isMethod('post')) {
            
            $form->handleRequest($request);

            if ($form->isValid()){

                $user = $form->getData();

                $dataTermin = new \DateTime("+30 days"); //do sprawdzenia
                $user
                    ->setPassword($encoder->encodePassword($user, $user->getPassword()))
                    ->setDataUtworzenia(new \DateTime())
                    ->setDataAktualizacji(new \DateTime())
                    ->setDataTermin($dataTermin)
                ;
        
                            
                $entityManager =$this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Użytkownik pomyślnie dodany.');

                return $this->redirectToRoute('admin');
            }

            $this->addFlash('error', 'Nie udało się dodać zdarzenia księgowego.');
        } 
        
        return $this->render('admin/panel/users/users_dodaj.html.twig', [
            'form_admin_dodaj_user' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/admin/users/{id}", name="admin_users_info")
     * 
     * @param User $user
     * 
     * @param Response
     * 
     */
    public function infoUserAdmin(User $user)
    {

        #dump($user);

        return $this->render('admin/panel/users/users_info.html.twig', [
            'user'  => $user,
        ]);
    }

    /**
     * @Route("/admin/users/edit/{id}", name="admin_users_edit")
     * 
     * @param Request $request
     * @param User $user 
     * @param $id 
     * 
     * @return Response
     */
    public function editUserAdmin(Request $request, User $user)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy([
            'id'    => $this->getUser()
        ]);
        #dump($user);

        $form = $this->createForm(UserAdminEditType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user
                ->setDataAktualizacji(new \DateTime())
            ;

            $entityManager->persist($user);
            $entityManager->flush();

        }

        return $this->render('admin/panel/users/users_edit.html.twig', [
            'user'  => $user,
            'form'  => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/dokumenty", name="admin_dokumenty")
     */
    public function dokumenty(Request $request, DokumentRepository $dokumentRepository)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dokumenty = $entityManager->getRepository(Dokument::class)->findAll([
            'utworzony' => 'DESC'
        ]);

        #dump($dokumenty);

        return $this->render('admin/panel/dokumenty/dokumenty.html.twig', [
            'dokumenty'     => $dokumenty,
        ]);
    }

    /**
     * @Route("/admin/dokumenty/dodaj", name="admin_dokumenty_dodaj")
     */
    public function dodajDokumentyAdmin(Request $request)
    {
        $dokument = new Dokument();

        $form = $this->createForm(Dokument::class, $dokument);

        if ($request->isMethod('post')){

            $form->handleRequest($request);

            if ($form->isValid()){
                
                $dokument = $form->getData();

                $dokument
                    ->setUtworzony(new \DateTime())
                    ->setModyfikacja(new \DateTime())
                    ->setStatus(Dokument::STATUS_ACTIVE)
                    ->setOwner()
                ;

                if ($dokument->getRodzaj() == 'koszt'){
                    $negativKwota = -abs($dokument->getKwota());
                    $dokument
                        ->setKwota($negativKwota)
                    ;
                }

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($dokument);
                $entityManager->flush();

                return $this->render('admin/panel/dokumenty/dokumenty.html.twig');

                // sprawdzić czy nie będzie kolizji bez parametru
            }
        }


    }

    /**
     * @Route("/admin/message", name="admin_message")
     */
    public function message(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $wiadomosci = $entityManager->getRepository(Message::class)->findAll();

        #dd($wiadomosci);

        return $this->render('admin/panel/message/message.html.twig', [
            'wiadomosci'    => $wiadomosci,
        ]);
    }
}
