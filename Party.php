<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 21/08/18
 * Time: 12:31
 */


use function Composer\Autoload\includeFile;

include "DatabaseEvol.php";

class Party extends DatabaseEvol
{
 protected $date;
    /**
     * Party constructor.
     * @param $date
     */
    public function __construct()
    {
        parent::__construct();

        $this->date = date("Y-m-d H:i:s");

    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function saveParty()
    {
        $req = $this->bdd->prepare("INSERT INTO partie(date_partie) VALUES (?)");

        $req->bindParam(1,$this->getDate(), PDO::PARAM_STR);

        if ($req->execute()) {
            echo "Happy is Vincent";
        } else {
            echo "Angry is Julien";
        }

    }

    public function generateStat()
    {

    }

}

$Party = new Party();
$Party->saveParty();