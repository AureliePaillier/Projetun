<?php


namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    // manager interagit avec doctrine
    public function load(ObjectManager $manager)
    {
        $design = new Category();
        $design->setName("Design");
        $manager->persist($design);

        $programming= new Category();
        $programming->setName("Programming");
        $manager->persist($programming);

        $managing = new Category();
        $managing->setName("Managing");
        $manager->persist($managing);

        $administrator = new Category();
        $administrator->setName("Administrator");
        $manager->persist($administrator);

        $manager->flush();

        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-managing', $managing);
        $this->addReference('category-administrator', $administrator);
    }
}