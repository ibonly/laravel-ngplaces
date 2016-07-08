<?php
namespace Ibonly\NgPlaces\Test;

use Mockery as m;
use GuzzleHttp\Client;
use Ibonly\NgPlaces\NgPlaces;
use PHPUnit_Framework_TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade as Facade;

class NgPlacesTest extends PHPUnit_Framework_TestCase
{
	public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }
}