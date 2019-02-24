<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Users;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new Users();
        $admin->setUsername("admin")
              ->setPassword("password")
              ->setMail("deschaussettes@yopmail.com")
              ->setApiKey("abcdefghjaimelesapis");

        $manager->persist($admin);

        $manager->flush();
    }
}
