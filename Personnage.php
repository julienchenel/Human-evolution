<?php

include "DatabaseEvol.php";

/**
 * Class Personnage
 */
class Personnage extends DatabaseEvol
{

    /**
     * @var int
     */
    private $lifeSpan;

    /**
     * @var float
     */
    private $growth;

    /**
     * @var float
     */
    private $birthSize;

    /**
     * @var bool
     */
    private $man;

    /**
     * @var int
     */
    private $location;

    /**
     * Personnage constructor.
     *
     */
    public function __construct()
    {
//  Randomiszation of the value of lifeSpan
        $lifeSpan =mt_rand(0,100);
        $this->lifeSpan = $lifeSpan;

//  Randomization of the value of growth factor
        $growth = mt_rand(0.8, 1.2);
        $this->growth = $growth;

//  Randomization of the value of the size at birth
        $birthSize = mt_rand(42,57);
        $this->birthSize = $birthSize;
        var_dump($birthSize);

//  Randomization of the gender of the personnage
        $hazard =  mt_rand(0, 100);
        if ($hazard < 50)  {
            $man = true;
        } else {
            $man = false;
        }
        $this->man = $man;

//  Randomization of the value of the location
        $location = mt_rand(1, 100);
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getLifeSpan()
    {
        return $this->lifeSpan;
    }

    /**
     * @param int $lifeSpan
     */
    public function setLifeSpan($lifeSpan)
    {
        $this->lifeSpan = $lifeSpan;
    }

    /**
     * @return float
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * @param float $growth
     */
    public function setGrowth($growth)
    {
        if ($growth < 0.8 || $growth >1.2) {
            $this->setGrowth(0.8);
        }

        $this->growth = $growth;
    }

    /**
     * @return float
     */
    public function getBirthSize()
    {

        return $this->birthSize;
    }

    /**
     * @param float $birthSize
     */
    public function setBirthSize($birthSize)
    {
        if ($birthSize < 42 || $birthSize > 57){
            $this->setBirthSize(42);
        }
        $this->birthSize = $birthSize;
    }

    /**
     * @return boolean
     */
    public function getMan()
    {
        return $this->man;
    }

    /**
     * @param boolean $man
     */
    public function setMan($man)
    {
        $this->man = $man;
    }

    /**
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param int $location
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
$Perso = new Personnage();
var_dump($Perso);