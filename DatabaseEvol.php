<?php


class DatabaseEvol
{
    CONST HOST = 'localhost:3306';
    CONST DBNAME = 'human_evolution_bdd';
    CONST DBLOGIN = 'root';
    CONST MDP = 'neiluj';

    protected $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME, self::DBLOGIN, self::MDP);
            $this->bdd->exec("SET CHARACTER SET utf8");
            $this->bdd->exec("SET NAMES utf8");

            echo "Success";
        }
        catch(PDOException $e) {
            die('<h3>Erreur!</h3>');
        }
    }

    public function createGlobalStat()
    {

    }

}
