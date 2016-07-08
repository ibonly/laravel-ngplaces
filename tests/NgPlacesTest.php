<?php

namespace Ibonly\NgPlaces\Test;

use Ibonly\NgPlaces\NgPlaces;
use PHPUnit_Framework_TestCase;

class NgPlacesTest extends PHPUnit_Framework_TestCase
{
	protected $facade;
	protected $ngplaces;

    public function setUp()
    {
        $this->ngplaces = new NgPlaces();
    }

    public function testGetAllStates()
    {
        $this->assertInternalType('array', $this->ngplaces->getAllStates());
    }

    public function testGetStateIsArray()
    {
    	$this->assertInternalType('array', $this->ngplaces->getState('OG'));
    }

    public function testActualState()
    {
    	$this->assertEquals('Ogun', $this->ngplaces->getState('OG')[0]['state_name']);
    }

    public function testGetStateLgas()
    {
    	$this->assertInternalType('array', $this->ngplaces->getStateLga('AB'));
    }

}