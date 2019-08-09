<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    private $id;
    private $name;
    private $jobs; //tableau d'objets Job
    private $affiliates; //tableau d'objets affiliate

    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getJobs(): ArrayCollection
    {
        return $this->jobs;
    }

    /**
     * @param ArrayCollection $jobs
     * @return Category
     */
    public function setJobs(ArrayCollection $jobs): Category
    {
        $this->jobs = $jobs;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getAffiliates(): ArrayCollection
    {
        return $this->affiliates;
    }

    /**
     * @param ArrayCollection $affiliates
     * @return Category
     */
    public function setAffiliates(ArrayCollection $affiliates): Category
    {
        $this->affiliates = $affiliates;
        return $this;
    }


}