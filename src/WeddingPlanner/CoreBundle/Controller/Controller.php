<?php

namespace WeddingPlanner\CoreBundle\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

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

    /**
     * @return LoggerInterface
     */
    protected function getLogger()
    {
        return $this->get('logger');
    }

    /**
     * @return EventDispatcherInterface
     */
    protected function getEventDispatcher()
    {
        return $this->get('event_dispatcher');
    }
}