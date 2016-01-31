<?php

namespace RentCarBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentCarBundle\Entity\Car;

class LoadCarData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setMarka('Seat');
        $car1->setModel('Ibiza');
        $car1->setRocznik('2000');
        $car1->setCena(200.0);
        $car1->setKlasa('Hatchback');

        $manager->persist($car1);

        $manager->flush();
    }
}