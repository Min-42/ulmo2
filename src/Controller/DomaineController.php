<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use App\Entity\Domaine;

class DomaineController extends Controller
{
    /**
     * @Route("/admin/domaine/detail", name="detailDomaine")
     */
    public function detail(Request $request)
    {
        $domaine = new Domaine();
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($domaine)
            ->add('numOrdre', IntegerType::class)
            ->add('libelle', TextType::class)
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('icone', TextType::class)
            ->add('fondEcran', TextType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $domaine = $form->getData();
            $entityManager->persist($domaine);
            $entityManager->flush();
           
            return $this->redirectToRoute('listeDomaine');
        }

        return $this->render('domaine/detail.html.twig', [
            'controller_name' => 'DomaineController',
            'form' => $form->createView(),
        ]);
    }

     /**
     * @Route("/admin/domaine/liste", name="listeDomaine")
     */
    public function liste(Request $request)
    {
        // $domaine = new Domaine();
        // $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Domaine::class);
        $domaines = $repository->findBy(
            [],
            ['numOrdre' => 'ASC']
        );

//	if (!$domaines) {
//		throw $this->createNotFoundException(
//			'Pas de domaine en base de données.'
//		);
//	}

        $form = $this->createFormBuilder()
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        }

        return $this->render('domaine/liste.html.twig', [
            'controller_name' => 'DomaineController',
            'form' => $form->createView(),
            'domaines' => $domaines,
        ]);
    }
}
