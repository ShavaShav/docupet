<?php
// src/AppBundle/Controller/PetsController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsController
{
    /**
     * @Route("/pets/", name="pet_list")
     */
    public function listAction()
    {
        return new Response(
            '<html><body>Pets will show here!</body></html>'
        );
    }

    /**
     * @Route("/pets/{slug}", name="pet_show")
     */
    public function showAction()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Specific pets will show here!</body></html>'
        );
    }
}