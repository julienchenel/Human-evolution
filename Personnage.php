<?php
//namespace Perso;
include "DatabaseEvol.php";
use Party\Party;

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
        parent::__construct();

//  Randomiszation of the value of lifeSpan
        $lifeSpan =mt_rand(0,100);
        $this->lifeSpan = $lifeSpan;

//  Randomization of the value of growth factor
        $growth = mt_rand(80, 120)/100;
        $this->growth = $growth;

//  Randomization of the value of the size at birth
        $birthSize = mt_rand(42,57);
        $this->birthSize = $birthSize;

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

    /**
     * @return mixed
     */
    public function savePerso()
    {
        $req = $this->bdd->prepare("INSERT INTO personnage(lifespan, growth, location, man, birthsize) VALUES (?, ?, ?, ?, ?)");

        $req->bindParam(1,$this->getLifeSpan(), PDO::PARAM_INT);
        $req->bindParam(2,$this->getGrowth(),PDO::PARAM_STR);
        $req->bindParam(3,$this->getLocation(), PDO::PARAM_INT);
        $req->bindParam(4,$this->getMan(), PDO::PARAM_INT);
        $req->bindParam(5,$this->getBirthSize(), PDO::PARAM_STR);

    if ($req->execute()) {
        echo"c'est dans la boite";
        $parts = new Party();
        $parts->saveParty();
        } else {
            echo "Pas de bol";
        }
    }

    public function associatePersoParty()
    {



    }

    public function verifyExistingPerso()
    {

    }

}
$Perso = new Personnage();
$Perso->savePerso();


