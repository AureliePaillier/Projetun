<?php


namespace App\DataFixtures;

use App\Entity\Job;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadJobData extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $categoryProgramming = $this->getReference('category-programming');
        $categoryManaging = $this->getReference('category-managing');
        $categoryAdministrator = $this->getReference('category-administrator');
        $categoryDesign = $this->getReference('category-design');

        $job = new Job();
        $job->setCategory($categoryProgramming);
        $job->setType('full-time');
        $job->setCompany('Apple');
        $job->setLogo('apple.png');
        $job->setUrl('www.apple.com');
        $job->setPosition('Web Dev');
        $job->setLocation('Paris, France');
        $job->setDescription('ma description');
        $job->setHowToApply('par mail');
        $job->setIsPublic('true');
        $job->setIsActivated('true');
        $job->setToken('job-apple');
        $job->setEmail('mmmm@gmail.com');
        $job->setExpiresAt(new \DateTime('2020-05-20'));

        $manager->persist($job);

        $job = new Job();
        $job->setCategory($categoryProgramming);
        $job->setType('full-time');
        $job->setCompany('Microsoft');
        $job->setLogo('microsoft.png');
        $job->setUrl('www.microsoft.com');
        $job->setPosition('Web Dev');
        $job->setLocation('Paris, France');
        $job->setDescription('ma description');
        $job->setHowToApply('par mail');
        $job->setIsPublic('true');
        $job->setIsActivated('true');
        $job->setToken('job-microsoft');
        $job->setEmail('mmmm@gmail.com');
        $job->setExpiresAt(new \DateTime('2020-05-20'));

        $manager->persist($job);

        $job = new Job();
        $job->setCategory($categoryProgramming);
        $job->setType('full-time');
        $job->setCompany('Linux');
        $job->setLogo('linux.png');
        $job->setUrl('www.linux.com');
        $job->setPosition('Web Dev');
        $job->setLocation('Paris, France');
        $job->setDescription('ma description');
        $job->setHowToApply('par mail');
        $job->setIsPublic('true');
        $job->setIsActivated('true');
        $job->setToken('job-linux');
        $job->setEmail('mmmm@gmail.com');
        $job->setExpiresAt(new \DateTime('2020-05-20'));

        $manager->persist($job);

        $manager->flush();
    }
}
