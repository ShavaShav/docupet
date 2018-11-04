<?php
// src/AppBundle/Controller/PetsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Pet;

class PetsController extends AbstractController
{
    /**
     * Remders list of all pets
     * @Route("/pets/", name="pet_list")
     */
    public function listAction()
    {
        return $this->render('pets/pets.html.twig');
    }

    /**
     * Renders a pet's profile page
     * @Route("/pets/{petId}", name="pet_show")
     */
    public function showAction($petId)
    {
        $pet = $this->getDoctrine()
            ->getRepository(Pet::class)
            ->find($petId);

        if (!$pet) {
            throw $this->createNotFoundException(
                'No pet found with id '.$petId
            );
        }

        return $this->render('pets/pet.html.twig', [
            'pet' => $pet,
        ]);
    }
}