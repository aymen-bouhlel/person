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
     * @Route("/persos", name="personnages")
     */
    public function person()
    {
        $p1= [
            'nom' => 'Marc',
            'age' => 25,
            'sexe' => true,
            'carac' => [
                'force' => 3,
                'agi' => 2,
                'intel' => 3
            ]
        ];
        $p2= [
            'nom' => 'Milo',
            'age' => 30,
            'sexe' => true,
            'carac' => [
                'force' => 5,
                'agi' => 1,
                'intel' => 2
            ]
        ];
        $p3= [
            'nom' => 'Tya',
            'age' => 22,
            'sexe' => false,
            'carac' => [
                'force' => 1,
                'agi' => 2,
                'intel' => 5
            ]
        ];
        $players = [
            'p1' => $p1,
            'p2' => $p2,
            'p3' => $p3
        ];
        return $this->render('person/persos.html.twig', [
            'players' => $players
        ]);
    }
}
