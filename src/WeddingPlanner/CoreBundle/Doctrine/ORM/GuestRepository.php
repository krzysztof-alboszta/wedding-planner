<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace WeddingPlanner\CoreBundle\Doctrine\ORM;

use Doctrine\ORM\EntityRepository;
use WeddingPlanner\CoreBundle\Model\GuestInterface;

/**
 * Description of GuestRepository
 *
 * @author krzyhu
 */
class GuestRepository extends EntityRepository implements GuestRepositoryInterface
{

    public function getGuestsForBus()
    {
        return $this->findBy(['needTransport' => true]);
    }

    public function getGuestsThatComming()
    {
        return $this->findBy(['response' => true]);
    }

    public function getNotInvitedGuests()
    {
        return $this->findBy(['invitationStatus' => GuestInterface::INVITATION_PENDING]);
    }

    public function persist(GuestInterface $guest)
    {
        $this->getEntityManager()->persist($guest);
    }

    public function update(GuestInterface $guest, $sync = true)
    {
        $this->persist($guest);

        if ($sync) {
            $this->sync();
        }
    }

    protected function sync()
    {
        $this->getEntityManager()->flush();
    }
}