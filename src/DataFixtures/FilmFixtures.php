<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $film1 = new Film();
        $film1->setTitre("The Batman");
        $film1->setDescription("Le meilleur Batman devant The Dark Knight");
        $film1->setRealisateur("Matt Reeves");

        $manager->persist($film1);

        $film2 = new Film();
        $film2->setTitre("Spider-Man : No Way Home");
        $film2->setDescription("Une seule chose à dire : Peux mieux faire..");
        $film2->setRealisateur("Jon Watts");

        $manager->persist($film2);

        $manager->flush();
    }
}
