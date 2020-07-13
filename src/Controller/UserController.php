<?php

namespace App\Controller;

use App\Entity\Annonce;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(Request $request, PaginatorInterface $paginatorInterface)
    {
        $annonce = new Annonce();

        $donnee = $this->getDoctrine()->getRepository(Annonce::class)->findAll();

        $annonce = $paginatorInterface->paginate(
            $donnee,
            $request->query->getInt('page',1),
            5
        );

        return $this->render('user/index.html.twig', [
            'var' => $annonce,
        ]);
    }

     /**
     * @Route("/{id}", name="details_user")
     */
    public function show(Annonce $annonce)
    {
        return $this->render('user/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }
}
