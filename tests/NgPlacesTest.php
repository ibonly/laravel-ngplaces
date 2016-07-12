<?php

namespace Ibonly\NgPlaces\Test;

use Ibonly\NgPlaces\NgPlaces;
use PHPUnit_Framework_TestCase;

class NgPlacesTest extends PHPUnit_Framework_TestCase
{
	protected $ngplaces;

    public function setUp()
    {
        $this->ngplaces = new NgPlaces();
    }

    /**
     * Test to check the data type of the states from the api
     */
    public function testGetAllStates()
    {
        $this->assertInternalType('array', $this->ngplaces->getAllStates());
    }

    /*
     * Test to check the return type of a paticular state
     */
    public function testGetStateIsObject()
    {
    	$this->assertInternalType('object', $this->ngplaces->getState('OG'));
    }

    /**
     * Test to confirm the returned state from the api
     */
    public function testActualState()
    {
    	$this->assertEquals('Ogun', $this->ngplaces->getState('OG')->state_name);
    }

    /**
     * Test to get all the local government of a state from the api
     */
    public function testGetStateLgas()
    {
    	$this->assertInternalType('array', $this->ngplaces->getStateLga('AB'));
    }
}
