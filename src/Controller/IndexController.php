<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use App\Repository\PersonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Vacation;

class IndexController extends AbstractController
{

    // /**
    //  * @Route("/", name="home")
    //  */
    // public function home(PersonRepository $personRepository)
    // {
    //     $persons = $personRepository->findAll(); 
        
    //     return $this->render('home/index.html.twig', [
    //         'persons' => $persons
    //     ]);
    // }


    // /**
    //  * @Route("/add", name="add")
    //  */
    // public function add(EntityManagerInterface $manager, Request $request)
    // {
    //     $path = $this->getParameter('kernel.project_dir');         // La racine du projet
    //     $path = $path . '/public/images';                          // le repertoire images
        
    //     // création des objet person à partir de formulaire
    //     $form = $this->createForm(PersonType::class);              // créer la formulaire

    //     $form->handleRequest($request);

    //     if($form->isSubmitted() && $form->isValid())
    //     {
            
            
    //         $person = $form->getData();                             //recuperer les valeurs qui sont soumis par la formulaire
        
    //         /**
    //          * @var Image $image
    //          */
    //         $image = $person->getImage();                           //recuperer l'image
    //         /**
    //          * @var UploadedFile $file
    //          */
    //         $file = $image->getFile();                              //recuperer le file de l'image 
            
    //         $name = md5(uniqid()) . '.' . $file->guessExtension();   //creer un nom unique pour l'image 
    //         $file->move($path, $name);                              //deplacer de file de l'image
            
    //         $image->setName($name);                                 //changer le nom de l'image 


            
    //         $manager->persist($person);
    //         $manager->flush();

    //         // AFFICHER UN PETIT MESSAGE APRÉS L'AJOUT D'UNE PERSONNE
    //         $this->addFlash(
    //                 'notice',
    //                 'Super! Sie haben eine neue Person hinzugefügt'
    //         );

    //         return $this->redirectToRoute('home');
    //     }

    //     return $this->render('home/add.html.twig', [
    //         'formPerson' => $form->createView()
    //     ]);
    // }

    // /**
    //  * @Route("/edit/{id}", name="edit")
    //  */
    // public function edit(Person $person, EntityManagerInterface $manager, PersonRepository $personRepository, Request $request)
    // {
    //     // modifier l'objet person á partir du formulaire
    //     $form = $this->createForm(PersonType::class, $person);         // créer la formulaire

    //     $form->handleRequest($request);

    //     if($form->isSubmitted() && $form->isValid())
    //     {
    //         $manager->flush();

    //         // AFFICHER UN PETIT MESSAGE QPRÉS L'AJOUT DE VOITURE
    //         $this->addFlash(
    //             'notice',
    //             'Super! Ihre Änderungen wurden gespeichert !'
    //         );

    //         return $this->redirectToRoute('show', [
    //             'id' => $person->getId()
    //         ]);
    //     }


    //     return $this->render('home/edit.html.twig', [
    //         'person' => $person,
    //         'formPerson' => $form->createView()
    //     ]);
    // }

    // /**
    //  * @Route("/delete/{id}", name="delete")
    //  */
    // public function delete(Person $person, EntityManagerInterface $manager, PersonRepository $personRepository)
    // {
    //     // suprimer l'objet person
    //     $manager->remove($person);

    //     // enregistrer les modifications
    //     $manager->flush();


    //     return $this->redirectToRoute('home');
    // }


    // /**
    //  * @Route("/show/{id}", name="show")
    //  */
    // public function show(Person $person)
    // {
    //     return $this->render('home/show.html.twig', [
    //         'person' => $person
    //     ]);
    // }
}
