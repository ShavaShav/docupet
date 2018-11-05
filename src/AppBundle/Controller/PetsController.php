<?php
// src/AppBundle/Controller/PetsController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Pet;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class PetsController extends AbstractController
{
    /**
     * Renders paginated list of all pets
     * @Route("/pets", name="pet_list")
     */
    public function listAction(Request $request)
    {
        $page = 1;
        $limit = 2;

        if ($request->query->has('page'))
            $page = $request->query->get('page');

        if ($request->query->has('limit'))
            $limit = $request->query->get('limit');

        $pets = $this->getDoctrine()
            ->getRepository(Pet::class)
            ->createQueryBuilder('pet')
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit
        
        $paginator = new Paginator($pets);

        return $this->render('pets/index.html.twig', [
            'pets' => $paginator,
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