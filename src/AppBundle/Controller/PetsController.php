<?php
// src/AppBundle/Controller/PetsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsController extends AbstractController
{
    /**
     * @Route("/pets/", name="pet_list")
     */
    public function listAction()
    {
        return $this->render('pets/pets.html.twig');
    }

    /**
     * @Route("/pets/{slug}", name="pet_show")
     */
    public function showAction($slug)
    {
        return $this->render('pets/pet.html.twig', [
            'pet_slug' => $slug,
        ]);
    }
}