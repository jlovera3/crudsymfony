<?php

namespace App\DataFixtures;

use App\Entity\Autor;
use App\Entity\Libro;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class AutorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {}

}
