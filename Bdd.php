<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 21/08/18
 * Time: 11:36
 */

class Bdd
{
    private $host = 'localhost';
    private $dbname = 'human_evolution_bdd';
    private $dblogin = 'root';
    private $mdp = 'neiluj';

    public function connexion() {
        try {
            $bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->dblogin, $this->mdp);
            $bdd->exec("SET CHARACTER SET utf8");
            $bdd->exec("SET NAMES utf8");
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