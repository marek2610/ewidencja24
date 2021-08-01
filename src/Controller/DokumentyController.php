<?php

namespace App\Controller;

use App\Entity\Dokument;
use App\Entity\User;
use App\Form\DokumentType;
use App\Form\UserEditType;
use App\Repository\DokumentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @IsGranted("ROLE_USER")
 */
class DokumentyController extends AbstractController
{
    /**
     * @Route("/", name="dokumenty_index")
     * 
     * @return Response
     */
    public function indexDokumenty(Request $request, PaginatorInterface $paginator, DokumentRepository $dokumentRepository)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        // // generowanie wyjątków
        // throw $this->createNotFoundException('Brak dostępu.');

        //widok wszystkich dokumentów użytkownika
        // $entityManager = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        // $dokumenty = $entityManager->getRepository(Dokument::class)->findBy([
        //     'status'    => 'active',
        //     'owner'     => $this->getUser(),
        // ],
        // [
        //     'data'      => 'DESC',
        // ]);
            
        $query = $request->request->get('form')['query'];
            
        // if($query){
                
        //     $dokumenty = $dokumentRepository->findBySearch($query, $user);
    
        // }

        $dokumenty = $dokumentRepository->findBySearch($query, $user);
        //wyszukiwanie dokumentu

        #dump(($dokumenty));

        //paginacja dla zmiennej result
        $result = $paginator->paginate(
            //stronicowanie dla zmiennej
            $dokumenty,
            //strona startowa
            $request->query->getInt('page', 1),
            //limit na stronie
            $request->query->getInt('limit', 5)
        );

        $owner = $this->getUser();

        //posumowanie wszystkich transakcji
     
        $sumaWszystkie = $dokumentRepository->findSumaWszystkie($owner);

        //podsumowanie z podziałem na rodzaj - koszty i przychody
        $sumaRodzaj = $dokumentRepository->findSumaRodzaj($owner);

        //pobieranie danych użytkownika
        $em = $this->getDoctrine()->getManager();
        $userinfo = $em->getRepository(User::class)->findBy([
            'id'     => $this->getUser(),
        ]
        );      

        #dump($userinfo);
            
        return $this->render('dokumenty/index.html.twig',[
            'pagination'                => $result,
            'sumaWszystkie'             => $sumaWszystkie, 
            'sumaRodzaj'                => $sumaRodzaj,
            'userinfo'                  => $userinfo,
            ]);
    }
        
    /**
     * @Route("/dokumenty/info/{id}", name="dokumenty_details")
     * 
     * @param $id 
     */
    public function detailsDokumenty(Dokument $dokument)
        {
            $this->denyAccessUnlessGranted("ROLE_USER");

            $usunForm = $this->createFormBuilder()
                ->setAction($this->generateUrl('dokumenty_usun', ['id' => $dokument->getId()]))
                ->setMethod(Request::METHOD_POST)
                ->add('submit', SubmitType::class, ['label' => 'Usuń'])
                ->getForm();

            $deleteForm = $this->createFormBuilder()
                ->setAction($this->generateUrl('dokumenty_delete', ['id' => $dokument->getId()]))
                ->setMethod(Request::METHOD_DELETE)
                ->add('submit', SubmitType::class, ['label' => 'Kasuj'])
                ->getForm();

            return $this->render('dokumenty/details.html.twig',[
                'dokument'              => $dokument,
                'form_usun_dokument'    => $usunForm->createView(),
                'form_delete_dokument'  => $deleteForm->createView(),
            ]);
        }


    /**
     * @Route("/dokumenty/dodaj", name="dokumenty_dodaj")
     */
    public function dodajDokumenty(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $dokument = new Dokument();
    
        $form = $this->createForm(DokumentType::class, $dokument);
 
        if ($request->isMethod('post')){
            $form->handleRequest($request);

            if ($form->isValid()){

                $dokument = $form->getData();
                
                $dokument
                    ->setUtworzony(new \DateTime())
                    ->setModyfikacja(new \DateTime())
                    ->setStatus(Dokument::STATUS_ACTIVE)
                    ->setOwner($this->getUser());
                
                
                if ($dokument->getRodzaj() == 'koszt'){
                    
                    $negativeKwota = -abs($dokument->getKwota());
                    
                    $dokument->setKwota($negativeKwota);
                }
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($dokument);
                $entityManager->flush();
                
                $this->addFlash('success', 'Pomyślnie dodano zdarzenie księgowe.');
                
                return $this->redirectToRoute('dokumenty_details',[
                    'id'    =>$dokument->getId()
                ]);
            }

            $this->addFlash('error', 'Nie udało się dodać zdarzenia księgowego.');
        }
                
        return $this->render('dokumenty/dodaj.html.twig', [
        'form_dodaj_dokument'  =>$form->createView(),
        ]);
    }

    
    /**
     * @Route("/dokument/edytuj/{id}", name="dokumenty_edytuj")
     */
    public function edytujDokumenty(Request $request, Dokument $dokument)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        if($this->getUser() !== $dokument->getOwner()){
            throw new AccessDeniedException();
        }
        
        $form = $this->createForm(DokumentType::class, $dokument);
        
        if ($request->isMethod('post')) {
            $form->handleRequest($request);
            
            $dokument
                ->setModyfikacja(new \DateTime);
            
            if ($dokument->getKwota() > 0){
                $dokument->setRodzaj('przychód');
            }
            else{
                $dokument->setRodzaj('koszt');
            }  
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dokument);
            $entityManager->flush();

            $this->addFlash('success', 'Zmodyfikowano zapis w księdze przychodów i rozchodów.');
            
            return $this->redirectToRoute('dokumenty_details',[
                'id'    =>$dokument->getId()
            ]);
        }
            
        return $this->render('dokumenty/edytuj.html.twig', [
            'form'  =>$form->createView(),
        ]);
    }
            
    /**
     * @Route("/dokumenty/usun/{id}", name="dokumenty_usun", methods={"POST"})
     */
    public function usunDokument(Dokument $dokument)
        {
            $this->denyAccessUnlessGranted("ROLE_USER");

            if($this->getUser() !== $dokument->getOwner()){
            throw new AccessDeniedException();
            }

            $dokument
                ->setModyfikacja(new \DateTime)
                ->setStatus(Dokument::STATUS_DELETE);
                                
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dokument);
            $entityManager->flush();

            $this->addFlash('success', 'Usunięto zapis z bazy danych.');
                    
            return $this->redirectToRoute('dokumenty_index');          
        }

    /**
     * @Route("/dokumenty/delete/{id}", name="dokumenty_delete", methods={"DELETE"})
     */
    public function deleteDokument(Dokument $dokument)
    {

        $this->denyAccessUnlessGranted("ROLE_USER");

        if($this->getUser() !== $dokument->getOwner()){
            throw new AccessDeniedException();
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($dokument);
        $entityManager->flush();

        $this->addFlash('info', 'Całkowicie usunięto zapis z bazy danych.');

        return $this->redirectToRoute('dokumenty_index');  
    }

    
    /**
     * @Route("/dokumenty/test", name="dokumenty_test")
     */
    public function testDokumenty(Request $request, DokumentRepository $dokumentRepository)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $user = $this->getUser();
     
        $query = $dokumentRepository->findByZestawienieMiesieczneRodzaj($user);

        #dump($query);

        return $this->render('dokumenty/test.html.twig',[
            'query'         => $query,
        ]);
    }

    /**
     * @Route("/dokumenty/test2/{data}", name="dokumenty_test_2") 
     * 
     * @param $data
     * 
     */
    public function testDokumentyId(Request $request, DokumentRepository $dokumentRepository, $data)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $user = $this->getUser();
        //$entityManager = $this->getDoctrine()->getManager();

        // $newData = (new \DateTime($data));
        // $newData->createFromFormat('Y-m', $newData);
        // $data = \DateTime::createFromFormat('Y-m', $data);
       
        $query = $dokumentRepository->findByDataMiesSuma($data, $user);

        dump($query);

        return $this->render('dokumenty/test2.html.twig',[
            'query'         => $query,
        ]);
    }

    /**
     * @Route("/dokumenty/dane", name="dokumenty_dane")
     */
    public function daneDokumenty(Request $request, DokumentRepository $dokumentRepository, PaginatorInterface $paginator)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        $user = $this->getUser();
     
        $query = $dokumentRepository->findByZestawienieMiesieczne($user);

        #stronicowanie dla zmiennej query
        $result = $paginator->paginate(
            //stronicowanie dla zmiennej
            $query,
            //strona startowa
            $request->query->getInt('page', 1),
            //limit na stronie
            $request->query->getInt('limit', 5)
        );


        //podsumowanie z podziałem na rodzaj - koszty i przychody
        $sumaRodzaj = $dokumentRepository->findSumaRodzaj($user);

        //posumowanie wszystkich transakcji
        $sumaWszystkie = $dokumentRepository->findSumaWszystkie($user);

        #dump($query);

        return $this->render('dokumenty/dane.html.twig',[
            'pagination'    => $result,
            'sumaRodzaj'    => $sumaRodzaj,
            'sumaWszystkie' => $sumaWszystkie,
        ]);
    }

    /**
     * @Route("/dokumenty/zestawienie/zbiorcze", name="dokumenty_zbiorcze", methods={"GET"})
     * 
     * @return Response
     */
    #DOKUMENT PDF
    public function zbiorczeDokumenty(DokumentRepository $dokumentRepository, Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'DejaVu Sans');
        $pdfOptions->set('isRemoteEnabled',true);
        // $pdfOptions->set('defaultFont', 'serif');

        $pdfOptions->set('isHtml5ParserEnabled', true);
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        $dokumenty = $dokumentRepository->findBy([
            'status'    => 'active',
            'owner'     => $this->getUser(),
        ],[
            'data'      => 'asc',
        ]);
        
        #dump($dokumenty);

        #####
        # pobieranie danych usera
        #####
        $userinfo = $this->getDoctrine()->getManager()->getRepository(User::class)->findBy([
            'id' => $this->getUser(),
        ]);

        $owner = $this->getUser();

        $sumaWszystkie = $dokumentRepository->findSumaWszystkie($owner);

        $sumaRodzaj = $dokumentRepository->findSumaRodzaj($owner);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('dokumenty/zbiorcze.html.twig',[
            'dokumenty'                 => $dokumenty,
            'sumaWszystkie'             => $sumaWszystkie, 
            'sumaRodzaj'                => $sumaRodzaj,
            'userinfo'                  => $userinfo,
        ]);

        // Load HTML to Dompdf
        
        $dompdf->loadHtml($html, 'UTF-8');
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'landscape'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();
        
        // format daty w nazwie pliku
        $data = date("Y-m-d_H:i:s");
        //$data = date ( "Y-m-d_H:i:s", time());
        //dd($data);

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("zest_zbiorcze_". $data . ".pdf", [
            "Attachment" => true
        ]);

        $this->addFlash('success', 'Wygenerowano dokument PDF.');

    }

    /**
     * @Route("/dokumenty/zestawienie/zbiorcze_miesiac/{data}", name="dokumenty_zbiorcze_miesiac", methods={"GET"})
     * 
     * @return Response
     * 
     * @param $data
     */
    #DOKUMENT PDF
    public function zbiorczeMiesiacDokumenty(Request $request, DokumentRepository $dokumentRepository, $data)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'DejaVu Sans');
        $pdfOptions->set('isRemoteEnabled',true);
        // $pdfOptions->set('defaultFont', 'serif');

        $pdfOptions->set('isHtml5ParserEnabled', true);
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        #dump($dokumenty);
        
        #####
        # pobieranie danych usera
        #####
        $userinfo = $this->getDoctrine()->getManager()->getRepository(User::class)->findBy([
            'id' => $this->getUser(),
        ]);

        $user = $this->getUser();

        $query = $dokumentRepository->findByDataMies($data, $user);

        $query3 = $dokumentRepository->findByDataMiesSuma($data, $user);

        $query2 = $dokumentRepository->findByDataMiesRodzaj($data, $user);
        
        // format daty w nazwie pliku
        #$data = date("Y-m");
        //$data = date ( "Y-m-d_H:i:s", time());
        //dd($data);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('dokumenty/zbiorcze_miesiac.html.twig',[
            'dokumenty'                 => $query,
            'sumaWszystkie'             => $query3, 
            'sumaRodzaj'                => $query2,
            'userinfo'                  => $userinfo,
            'data'                      => $data,
        ]);

        // Load HTML to Dompdf
        
        $dompdf->loadHtml($html, 'UTF-8');
        
        ## konwertuje tylko text na UTF-8 a nie obiekt, trzeba wyciągnąć z bazy imiona i nazwiska oraz treść
        #$dompdf = mb_convert_encoding($dompdf, 'HTML-ENTITIES', 'UTF-8');
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'landscape'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        
        

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("zest_zbiorcze_". $data . ".pdf", [
            "Attachment" => true
        ]);

        $this->addFlash('success', 'Wygenerowano miesięczny dokument PDF.');

    }

    /**
     * 
     * @Route("/dokumenty/dane/miesiac/{data}", name="dokumenty_danemiesiac")
     * 
     * @param $data
     * 
     */
    public function detailsMiesiecznyDokumenty(Request $request, DokumentRepository $dokumentRepository, $data, PaginatorInterface $paginator)
    {

        $this->denyAccessUnlessGranted("ROLE_USER");

        $user = $this->getUser();
        //$entityManager = $this->getDoctrine()->getManager();

        // $newData = (new \DateTime($data));
        // $newData->createFromFormat('Y-m', $newData);
        // $data = \DateTime::createFromFormat('Y-m', $data);
       
        $query = $dokumentRepository->findByDataMies($data, $user);
        $query2 = $dokumentRepository->findByDataMiesRodzaj($data, $user);
        $query3 = $dokumentRepository->findByDataMiesSuma($data, $user);

        #dump($query3);

        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('dokumenty/danemiesiac.html.twig',[
            'pagination'    => $result,
            'sumaRodzaj'    => $query2,
            'sumaWszystkie' => $query3,
            'data'          => $data,
        ]);
    }

    /**
     * @Route("/dokumenty/user/", name="dokumenty_user")
     * 
     * @param $id 
     */
    public function infoUserDokumenty(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
 
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findBy([
            'id'     => $this->getUser(),
        ]);

        //dump($user);

        return $this->render('dokumenty/user.html.twig',[
            'user'  => $user,
        ]);
    }

    /**
     * @Route("/dokumenty/user/edit/", name="dokumenty_useredit")
     * 
     * @param Request $request
     * @param User $user 
     * @param $id 
     * 
     * @return Response
     */
    public function edytujUserDokumenty(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy([
            'id'     => $this->getUser(),
        ]);

        #dump($user);

        $form = $this->createForm(UserEditType::class, $user);

        if ($request->isMethod('post')){
            
            $form->handleRequest($request);

            $user
                ->setDataAktualizacji(new \DateTime())
            ;

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Poprawnie zmodyfikowano dane użytkownika.');

            return $this->redirectToRoute('dokumenty_user', [
                'id'    =>  $user->getId(),
            ]);

        }
        return $this->render('dokumenty/useredit.html.twig',[
            'form'   => $form->createView()
        ]);
    }

    // /**
    //  * @Route("/agro/kontakt/", name="dokumenty_agrokontakt")
    //  */
    // public function kontaktDokumenty()
    // {
    //     return $this->render('agro/kontakt.html.twig');
    // }

    //  /**
    //  * @Route("/agro/info/", name="dokumenty_system")
    //  */
    // public function infoDokumenty()
    // {
    //     return $this->render('agro/system.html.twig');
    // }

    //szukaj
    public function searchBar()
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('dokumenty_index'))
            ->add('query', TextType::class, [
                'attr'  => [
                    'placeholder'   => 'Wpisz szukany element...',
                ]
            ])
            ->add('szukaj', SubmitType::class, [
                'attr'  => [
                    'class' => 'btn btn-primary pull-right',
                ]
            ])
            ->getForm()
        ;

        return $this->render('dokumenty/searchBar.html.twig', [
            'form_search'  => $form->createView(),
        ]);
    }
 
    /**
    * @Route ("/dokumenty/szukaj", name="dokumenty_szukaj")
    * 
    */
    // wyszujkuje po dokłądnej nazwie z pola szukaj
    public function szukajDokumenty(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $em = $this->getDoctrine()->getManager();
        $dokumenty = $em->getRepository(Dokument::class)->findAll();

        if($request->isMethod('post')){
            $faktura = $request->get('faktura');
            $dokumenty  = $em->getRepository(Dokument::class)->findBySearch([
                'faktura'   => $faktura,
            ],[
                'data'      => 'DESC',
            ]);
         }

        dump($dokumenty);

        return $this->render('dokumenty/szukaj.html.twig',[
            'dokumenty'         => $dokumenty ,
        ]);
    }
}