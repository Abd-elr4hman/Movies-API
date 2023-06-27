<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The DarkKnight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is a description of the dark knight');
        $movie->setImagePath("https://cdn.pixabay.com/photo/2017/08/19/03/00/batman-2657186_1280.jpg");
        $manager->persist($movie);

        $manager->flush();
    }
}