<?php


class DatabaseEvol
{
    CONST HOST = 'localhost';
    CONST DBNAME = 'human_evolution_bdd';
    CONST DBLOGIN = 'root';
    CONST MDP = 'neiluj';

    /**
     * Bdd constructor.
     * @param string $host
     * @param string $dbname
     * @param string $dblogin
     * @param string $mdp
     */
    public function __construct()
    {
        try {
            $bdd = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME, self::DBLOGIN, self::MDP);
            $bdd->exec("SET CHARACTER SET utf8");
            $bdd->exec("SET NAMES utf8");

            echo "Success";
        }
        catch(PDOException $e) {
            die('<h3>Erreur!</h3>');
        }
        return $bdd;
    }

    public function createGlobalStat()
    {

    }

}

//$connection = new DatabaseEvol();