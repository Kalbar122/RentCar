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
		
		$car2 = new Car();
        $car2->setMarka('Fiat');
        $car2->setModel('126p');
        $car2->setRocznik('1990');
        $car2->setCena(10.0);
        $car2->setKlasa('Hatchback');

        $manager->persist($car2);
		
		$car3 = new Car();
        $car3->setMarka('Fiat');
        $car3->setModel('125p');
        $car3->setRocznik('1986');
        $car3->setCena(15.0);
        $car3->setKlasa('Sedan');

        $manager->persist($car3);
		
		$car4 = new Car();
        $car4->setMarka('FSO');
        $car4->setModel('Polonez');
        $car4->setRocznik('1993');
        $car4->setCena(25.0);
        $car4->setKlasa('Sedan');

        $manager->persist($car4);
		
		$car5 = new Car();
        $car5->setMarka('FSM');
        $car5->setModel('Syrenka');
        $car5->setRocznik('1982');
        $car5->setCena(35.0);
        $car5->setKlasa('Sport');

        $manager->persist($car5);
		
		
		$car6 = new Car();
        $car6->setMarka('Skoda');
        $car6->setModel('Favorit');
        $car6->setRocznik('1993');
        $car6->setCena(50.0);
        $car6->setKlasa('Hatchback');

        $manager->persist($car6);
        $manager->flush();
    }
}