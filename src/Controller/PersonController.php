<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('person/index.html.twig');
    }

    /**
     * @Route("/persos", name="persos")
     */
    public function person()
    {
        return $this->render('person/persos.html.twig', [
            'pseudo' => 'toto',
            'age' => 25,
            'carac' => [
                'force' => 3,
                'agi' => 2,
                'intel' => 3
            ]
        ]);
    }
}
