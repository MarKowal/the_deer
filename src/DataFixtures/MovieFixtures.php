<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('good movie');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2024/01/15/11/36/batman-8510027_1280.png');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Oppenheimer');
        $movie2->setReleaseYear(2023);
        $movie2->setDescription('very good movie');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2024/01/12/08/37/ai-generated-8503459_1280.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
