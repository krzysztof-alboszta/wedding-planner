<?php

namespace WeddingPlanner\CoreBundle\Controller\API;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use WeddingPlanner\CoreBundle\Controller\Controller;
use WeddingPlanner\CoreBundle\Entity\Guest;

/**
 * Description of GuestController
 *
 * @author krzyhu
 */
class GuestController extends Controller
{

    public function listAction(Request $request)
    {
        $guests = $this->getGuestRepository()->findAll();

        return new JsonResponse($guests);
    }

    /**
     * Set invitation response to true
     *
     * @param Guest $guest
     *
     * @Route("/{id}/accept", name="wp_api_guest_accept", options={"expose"=true})
     *
     * @return JsonResponse
     */
    public function acceptAcction(Guest $guest)
    {
        $this->getGuestManager()->accept($guest);

        return new JsonResponse([]);
    }

    /**
     * Set invitation response to false
     *
     * @param Guest $guest
     *
     * @Route("/{id}/reject", name="wp_api_guest_reject", options={"expose"=true})
     *
     * @return JsonResponse
     */
    public function rejectAcction(Guest $guest)
    {
        $this->getGuestManager()->reject($guest);

        return new JsonResponse([]);
    }
}