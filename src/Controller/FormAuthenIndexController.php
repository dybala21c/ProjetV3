<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormAuthenIndexController extends AbstractController
{
    /**
     * @Route("/form/authen/index", name="form_authen_index")
     */
    public function index()
    { 
        return $this->render('form_authen_index/index.html.twig', [
            'controller_name' => 'FormAuthenIndexController',
        ]);
    }
}
