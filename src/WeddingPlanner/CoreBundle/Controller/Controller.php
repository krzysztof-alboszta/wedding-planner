<?php

namespace WeddingPlanner\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

/**
 * Common controller for CoreBundle
 *
 * @author krzyhu
 */
class Controller extends BaseController
{

    protected function getGuestRepository()
    {
        $this->get('wedding_planner.guest_repository');
    }

    protected function getGuestManager()
    {
        $this->get('wedding_planner.guest_manager');
    }
}