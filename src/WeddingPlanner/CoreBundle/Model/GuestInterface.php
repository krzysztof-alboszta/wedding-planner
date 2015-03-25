<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace WeddingPlanner\CoreBundle\Model;

/**
 *
 * @author krzyhu
 */
interface GuestInterface
{
    const CATEGORY_FAMILY  = 0;
    const CATEGORY_FRIENDS = 1;
    const CATEGORY_STUFF   = 2;

    /**
     * Response statuses true|false
     */
    const RESPONSE_ACCEPTED = true;
    const RESPONSE_REJECTED = false;

    const INVITATION_PENDING = 0;
    const INVITATION_GIVEN = 1;
    const INVITATION_FORWARDED = 2;
    const INVITATION_SEND = 3;

    
    public function getId();

    public function getFullName();

    public function getCategory();
}