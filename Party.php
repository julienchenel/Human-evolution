<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 21/08/18
 * Time: 12:31
 */

class Party
{
 protected $date;

    /**
     * Party constructor.
     * @param $date
     */
    public function __construct($date)
    {
        $this->date = $date;
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

    }

    public function generateStat()
    {

    }

}