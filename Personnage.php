<?php

namespace Personnage;


class Personnage extends \Bdd
{

private $lifespan;

private $growth;

private $birthsize;

private $man;

private $location;

    /**
     * @return mixed
     */
    public function getLifespan()
    {
        return $this->lifespan;
    }

    /**
     * @param mixed $lifespan
     */
    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;
    }

    /**
     * @return mixed
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * @param mixed $growth
     */
    public function setGrowth($growth)
    {
        if ($growth < 0.8 || $growth >1.2) {
            $this->setGrowth(0.8);
        }

        $this->growth = $growth;
    }

    /**
     * @return mixed
     */
    public function getBirthsize()
    {

        return $this->birthsize;
    }

    /**
     * @param mixed $birthsize
     */
    public function setBirthsize($birthsize)
    {
        if ($birthsize < 42 || $birthsize > 57){
            $this->setBirthsize(42);
        }
        $this->birthsize = $birthsize;
    }

    /**
     * @return mixed
     */
    public function getMan()
    {
        return $this->man;
    }

    /**
     * @param mixed $man
     */
    public function setMan($man)
    {
        $this->man = $man;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function  savePerso()
    {

    }

    public function  associatePersoParty()
    {

    }

    public function verifyExistingPerso()
    {

    }
}