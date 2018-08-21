<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 21/08/18
 * Time: 12:40
 */

use Personnage\Personnage;

class PersonnageTest extends PHPUnit\Framework\TestCase
{

    public function testGetLifespan()
    {

    }

    public function testSetLifespan()
    {

    }

    public function testSetLocation()
    {

    }

    public function testSetBirthsize()
    {
        $expected = 42;
        $testValue = $this->setBirthsize(38);


        $this->assertEquals($expected, $testValue);

    }

    public function testSavePerso()
    {

    }

    public function testSetMan()
    {

    }

    public function testSetGrowth()
    {

    }

    public function testVerifyExistingPerso()
    {

    }

    public function testGetBirthsize()
    {

    }

    public function testAssociatePersoParty()
    {

    }

    public function testGetMan()
    {

    }

    public function testGetGrowth()
    {

    }

    public function testGetLocation()
    {

    }
}
