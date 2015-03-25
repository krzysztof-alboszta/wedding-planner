<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace WeddingPlanner\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Generator;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use WeddingPlanner\CoreBundle\Entity\Guest;
use WeddingPlanner\CoreBundle\Model\GuestInterface;

/**
 * Description of GuestData
 *
 * @author krzyhu
 */
class GuestData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($j = 0; $j < 20; $j++) {
            $guest = new Guest();
            $guest->setFirstName($this->getFaker()->firstName);
            $guest->setLastName($this->getFaker()->lastName);
            $guest->setCategory($j % 3 ? GuestInterface::CATEGORY_FRIENDS : GuestInterface::CATEGORY_FAMILY);

            $guest->setInvitationStatus(GuestInterface::INVITATION_PENDING);

            if ($j > 15) {
                $guest->setInvitationStatus($this->getFaker()->numberBetween(GuestInterface::INVITATION_GIVEN,
                        GuestInterface::INVITATION_SEND));
                $guest->setResponse(GuestInterface::RESPONSE_ACCEPTED);
                $guest->setNeedTransport($this->getFaker()->randomNumber() % 2);
            }

            $manager->persist($guest);
        }
        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return Generator
     */
    protected function getFaker()
    {
        return $this->container->get('faker.generator');
    }
}