<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        Personnage::creerPersonnages();
       
        return $this->render('person/persos.html.twig', [
            'players' => Personnage::$personnages
        ]);
    }

    /**
     * @Route("/persos/{nom}", name="afficher_personnage")
     */
    public function afficherPerso($nom)
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageNom($nom);
        return $this->render('person/perso.html.twig', [
            'perso' => $perso
        ]);
    }
}
