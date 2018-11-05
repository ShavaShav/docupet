<?php
// src/AppBundle/Controller/PetsController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Pet;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class PetsController extends Controller
{
    /**
     * Renders paginated list of all pets
     * @Route("/pets", name="pet_list")
     */
    public function listAction(Request $request)
    {
        // Get page and limit.
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 2);

        // Form a select all query on pet table
        $petsQuery = $this->getDoctrine()
            ->getRepository(Pet::class)
            ->createQueryBuilder('pet');
        
        // Paginate the results of the pets query
        $pets = $this->get('knp_paginator')->paginate(
            $petsQuery, $page, $limit
        );

        // Render results
        return $this->render('pets/index.html.twig', [
            'pets' => $pets
        ]);
    }
        
    /**
     * Renders a pet's profile page
     * @param [integer] $petId
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