<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 21/08/18
 * Time: 12:40
 */

include "../Personnage.php";

class PersonnageTest extends PHPUnit\Framework\TestCase
{

    public $personnage;

    public function setUp()
    {
        $this->personnage = new Personnage();


    }

//    public function testGetLifeSpan()
//    {
//
//    }
//
//    public function testSetLifeSpan()
//    {
//
//    }
//
//    public function testSetLocation()
//    {
//
//    }


    /**
     * @depends testGetBirthSize
     */
    public function testSetBirthSize()
    {
        $this->personnage->setBirthSize(38);


        $this->assertEquals(42, $this->personnage->getBirthSize());

    }

//    public function testSavePerso()
//    {
//
//    }
//
//    public function testSetMan()
//    {
//
//    }
//
//    public function testSetGrowth()
//    {
//
//    }
//
//    public function testVerifyExistingPerso()
//    {
//
//    }
//
    public function testGetBirthSize()
    {

        $this->assertNotEmpty($this->personnage->getBirthSize());

    }
//
//    public function testAssociatePersoParty()
//    {
//
//    }
//
//    public function testGetMan()
//    {
//
//    }
//
//    public function testGetGrowth()
//    {
//
//    }
//
//    public function testGetLocation()
//    {
//
//    }
}
