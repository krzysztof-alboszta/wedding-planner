<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace WeddingPlanner\CoreBundle\Doctrine\ORM;

use WeddingPlanner\CoreBundle\Model\GuestInterface;

/**
 *
 * @author krzyhu
 */
interface GuestRepositoryInterface
{

    public function persist(GuestInterface $guest);

    public function update(GuestInterface $guest, $sync = true);

    public function getNotInvitedGuests();

    public function getGuestsThatComming();

    public function getGuestsForBus();
}