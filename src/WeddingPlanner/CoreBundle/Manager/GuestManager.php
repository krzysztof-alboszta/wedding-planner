<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace WeddingPlanner\CoreBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use WeddingPlanner\CoreBundle\Model\GuestInterface;

/**
 * Description of GuestManager
 *
 * @author krzyhu
 */
class GuestManager
{
    /**
     *
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     *
     * @var ObjectRepository
     */
    protected $repository;

    public function __construct(ObjectManager $objectManager,
                                ObjectRepository $repository)
    {
        $this->objectManager = $objectManager;
        $this->repository    = $repository;
    }

    public function addGuest()
    {
        
    }

    public function deleteGuest()
    {

    }

    public function countGuests()
    {
        
    }
}