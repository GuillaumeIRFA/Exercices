<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 12; $i++){
            $article = new Articles();
            $size = 200 + $i;
            $article->setTitle("Titre article $i")->setCreatedAt(new \DateTime())->setImage("https://picsum.photos/350/$size")->setContent("xD mdr xD mdr");
            $manager->persist($article);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
